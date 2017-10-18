<?php

require dirname(__FILE__).'/../vendor/autoload.php';

use Alfatraining\Grpc\Authentication\AuthenticationServiceClient;
use Alfatraining\Grpc\Authentication\AuthenticationRequest;
use Alfatraining\Grpc\Authentication\AuthenticationReply;
use Alfatraining\Grpc\Authentication\AuthorizationCodeCredentials;
use Alfatraining\Grpc\Common\AccessInfo;
use Alfatraining\Grpc\Room\RoomListRequest;
use Alfatraining\Grpc\Room\RoomServiceClient;
use Alfatraining\Grpc\User\UserListRequest;
use Alfatraining\Grpc\User\UserServiceClient;
use Symfony\Component\Console\Application;

// configuration
$clientId = '';
$authCode = '';
$companyId = '';
$authServiceAddress = '';
$userServiceAddress = '';
$roomServiceAddress = '';

$credentials = new AuthorizationCodeCredentials();
$credentials->setClientId($clientId);
$credentials->setCode($authCode);
$credentials->setCompanyId($companyId);

$authRequest = new AuthenticationRequest();
$authRequest->setAuthorizationCodeCredentials($credentials);
$authRequest->setRequestId('testing-authentication');

$authClient = new AuthenticationServiceClient($authServiceAddress, ['credentials' => \Grpc\ChannelCredentials::createSsl()]);
list($authReply, $status) = $authClient->authenticate($authRequest)->wait();

if ($authReply === null) {
  print("Authentication failed!");
  die();
}
print("Authentication successful. Your user ID: ".$authReply->getUserId()."\n");

$accessInfo = new AccessInfo();
$accessInfo->setRequestId('should-be-used-for-logging'); // required by the room service, optional for the others
$accessInfo->setAccessToken($authReply->getAccessToken());

$userClient = new UserServiceClient($userServiceAddress, ['credentials' => \Grpc\ChannelCredentials::createSsl()]);
$userListRequest = new UserListRequest();
$userListRequest->setAccessInfo($accessInfo);
list($userListReply, $status) = $userClient->userList($userListRequest)->wait();

if ($userListReply !== null) {
  foreach ($userListReply->getUsers() as $userID => $user) {
    print("User ID ".$userID.": ".$user->getEmail().", first name: ".$user->getUserProfile()->getFirstname()." ".$user->getUserProfile()->getLastname()."\n");
  }
}

$roomClient = new RoomServiceClient($roomServiceAddress, ['credentials' => \Grpc\ChannelCredentials::createSsl()]);
$roomListRequest = new RoomListRequest();
$roomListRequest->setAccessInfo($accessInfo);
list($roomListReply, $status) = $roomClient->List($roomListRequest)->wait();

foreach ($roomListReply->getRooms() as $roomID => $room) {
  print("Room ID ".$roomID.": ".$room->getDisplayName()."\n");
  foreach ($room->getPermissions() as $userID => $permissions) {
    print("  User: ".$userID."\n");
  }
}
