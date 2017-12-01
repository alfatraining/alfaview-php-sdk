<?php

require dirname(__FILE__).'/../vendor/autoload.php';

use Alfatraining\Grpc\Authentication\AuthenticationServiceClient;
use Alfatraining\Grpc\Authentication\AuthenticationRequest;
use Alfatraining\Grpc\Authentication\AuthenticationReply;
use Alfatraining\Grpc\Authentication\AuthorizationCodeCredentials;
use Alfatraining\Grpc\Authentication\SignAccessTokenRequest;
use Alfatraining\Grpc\Common\AccessInfo;
use Alfatraining\Grpc\Common\AccessToken;
use Alfatraining\Grpc\Common\User;
use Alfatraining\Grpc\Common\UserProfile;
use Alfatraining\Grpc\Common\Room;
use Alfatraining\Grpc\Common\Permissions;
use Alfatraining\Grpc\Room\RoomCreateRequest;
use Alfatraining\Grpc\Room\RoomListRequest;
use Alfatraining\Grpc\Room\RoomServiceClient;
use Alfatraining\Grpc\Room\RoomUpdateRequest;
use Alfatraining\Grpc\User\UserListRequest;
use Alfatraining\Grpc\User\UserCreateRequest;
use Alfatraining\Grpc\User\UserServiceClient;
use Symfony\Component\Console\Application;

// configuration
$clientId = '';
$authCode = '';
$companyId = '';

$authServiceAddress = '';
$userServiceAddress = '';
$roomServiceAddress = '';

$roomId = '';
$userEmail = 'john.doe@example.com';
$userFirstname = 'John';
$userLastname = 'Doe';

$joinLinkScheme = '';
$joinLinkHostname = '';

// set up clients
$options = array('credentials' => \Grpc\ChannelCredentials::createSsl());
$authClient = new AuthenticationServiceClient($authServiceAddress, $options);
$userClient = new UserServiceClient($userServiceAddress, $options);
$roomClient = new RoomServiceClient($roomServiceAddress, $options);

// authentication
$credentials = new AuthorizationCodeCredentials();
$credentials->setClientId($clientId);
$credentials->setCode($authCode);
$credentials->setCompanyId($companyId);
$authRequest = new AuthenticationRequest();
$authRequest->setAuthorizationCodeCredentials($credentials);
$authRequest->setRequestId('examples-from-php-sdk');
list($authReply, $status) = $authClient->authenticate($authRequest)->wait();
if ($authReply === null) {
  print("Authentication failed!");
  die();
}

// from here on we use the access token for all requests
$accessInfo = new AccessInfo();
$accessInfo->setRequestId('launch-alfaview-example-from-sdk');
$accessInfo->setAccessToken($authReply->getAccessToken());

// create a user
$userProfile = new UserProfile();
$userProfile->setFirstname($userFirstname);
$userProfile->setLastname($userLastname);
$user = new User();
$user->setEmail($userEmail);
$user->setUserProfile($userProfile);
$userCreateRequest = new UserCreateRequest();
$userCreateRequest->setAccessInfo($accessInfo);
$userCreateRequest->setUser($user);
list($userCreateReply, $status) = $userClient->userCreate($userCreateRequest)->wait();
if ($userCreateReply === null) {
  print("User create failed!");
  die();
}
$userId = $userCreateReply->getUserId();

// create a set of permissions
$permissions = new Permissions();
$permissions->setJoin(true);
$permissions->setVoice(true);
$permissions->setVideo(true);
$permissions->setChat(true);
$permissions->setFairUse(true);
$permissions->setPromote(true);
$permissions->setVip(true);
$permissions->setScreen(true);

// update the room to grant these permissions to the new user
$room = new Room();
$room->setPermissions(array($userId => $permissions));
$roomUpdateRequest = new RoomUpdateRequest();
$roomUpdateRequest->setAccessInfo($accessInfo);
$roomUpdateRequest->setRoomId($roomId);
$roomUpdateRequest->setRoom($room);
list($roomUpdateReply, $status) = $roomClient->Update($roomUpdateRequest)->wait();
if ($roomUpdateReply === null) {
  print("Room update failed!");
  die();
}

// create access token for alfaview launch url
$signAccessTokenRequest = new SignAccessTokenRequest();
$signAccessTokenRequest->setAccessInfo($accessInfo);
$accessToken = (new AccessToken())->setUserId($userCreateReply->getUserId())->setCompanyId($companyId)->setExpiresAt($authReply->getExpiresAt());
$signAccessTokenRequest->setAccessToken($accessToken);
list($signAccessTokenReply, $status) = $authClient->signAccessToken($signAccessTokenRequest)->wait();

// verify room access for the new user
$roomListRequest = new RoomListRequest();
$roomListRequest->setAccessInfo((new AccessInfo())->setRequestId('verify-room-access-example-from-sdk')->setAccessToken($signAccessTokenReply->getAccessToken()));
$roomListRequest->setFilterRoomIds(array($roomId));
list($roomListReply, $status) = $roomClient->List($roomListRequest)->wait();
foreach ($roomListReply->getRooms() as $roomID => $room) {
  foreach ($room->getPermissions() as $userID => $permissions) {
    if ($userID == $userId) {
      print("User creation and room access successful.\n");
    }
  }
}

// token should preferably be base64 encoded because the result will be shorter
// a base64 encoded token parameter must be named "token" instead of "tokenhex"
// however this example uses bin2hex for availability reasons
$alfaviewLaunchURL = $joinLinkScheme . '://' . $joinLinkHostname . '?companyId=' . $companyId . '&roomid=' . $roomId . '&tokenhex=' . bin2hex($signAccessTokenReply->getAccessToken());
print("Point your browser to: " . $alfaviewLaunchURL . "\n");
