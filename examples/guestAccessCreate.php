<?php

require dirname(__FILE__).'/../vendor/autoload.php';

use Alfatraining\Grpc\Authentication\AuthenticationCreateRequest;
use Alfatraining\Grpc\Authentication\AuthenticationRequest;
use Alfatraining\Grpc\Authentication\GuestAccessCredentials;
use Alfatraining\Grpc\Authentication\AuthenticationServiceClient;
use Alfatraining\Grpc\Authentication\AuthorizationCodeCredentials;
use Alfatraining\Grpc\Common\AccessInfo;
use Alfatraining\Grpc\Common\BackendPermission;
use Alfatraining\Grpc\Common\Permissions;
use Alfatraining\Grpc\Common\RoomPermission;
use Alfatraining\Grpc\Common\Room;
use Alfatraining\Grpc\Room\RoomServiceClient;
use Alfatraining\Grpc\Room\RoomUpdateRequest;

// configuration
$clientId = '';
$authCode = '';
$companyId = '';
$roomServiceAddress = '';
$authServiceAddress = '';
$userServiceAddress = '';
$guestAccessCredentialsCode = '';

$name = '';
$email = '';
$roomId = '';

// set up clients
$credentials = \Grpc\ChannelCredentials::createSsl();
$authClient = new AuthenticationServiceClient($authServiceAddress, ['credentials' => $credentials]);
$roomClient = new RoomServiceClient($roomServiceAddress, ['credentials' => $credentials]);

// authentication
$credentials = new AuthorizationCodeCredentials();
$credentials->setClientId($clientId);
$credentials->setCode($authCode);
$credentials->setCompanyId($companyId);
$authRequest = new AuthenticationRequest();
$authRequest->setAuthorizationCodeCredentials($credentials);
$authRequest->setRequestId('examples-from-php-sdk');
list($authReply, $status) = $authClient->authenticate($authRequest)->wait();
if ($authReply === null) { // bail if authentication failed
  print("Authentication failed!");
  die();
}

// from here on we use the access token for all requests
$accessInfo = new AccessInfo();
$accessInfo->setRequestId('guest-access-example-from-sdk');
$accessInfo->setAccessToken($authReply->getAccessToken());

// create a non shareable guest access
$guestAccessCredentials = new GuestAccessCredentials();
$guestAccessCredentials->setDisplayName($name);
$guestAccessCredentials->setEmail($email);
$guestAccessCredentials->setShareable(false);
$guestAccessCredentials->setExpiry(time() + (7 * 24 * 60 * 60)); // this is next week, default expiry is 30 days
$guestAccessCredentials->setRoomId($roomId);
$guestAccessCredentials->setCompanyId($companyId);
$guestAccessCredentials->setCode($guestAccessCredentialsCode);
$authenticationRequest = new AuthenticationRequest();
$authenticationRequest->setGuestAccessCredentials($guestAccessCredentials);
$authenticationRequest->setPermissions(array(BackendPermission::USER_SHOW => true));
$authenticationCreateRequest = new AuthenticationCreateRequest();
$authenticationCreateRequest->setAuthenticationRequest($authenticationRequest);
$authenticationCreateRequest->setAccessInfo($accessInfo);
list($authenticationCreateReply, $status) = $authClient->authenticationCreate($authenticationCreateRequest)->wait();
if ($authenticationCreateReply === null) {
  print("Guest access creation failed!");
  die();
}
$userId = $authenticationCreateReply->getUserId();

// attach the guest to a room
$guestPermissions = new Permissions();
$guestPermissions->setVoice(true);
$guestPermissions->setVideo(true);
$guestPermissions->setChat(true);
$guestPermissions->setJoin(true);
$guestPermissions->setFairUse(true);
$room = new Room();
$room->setMetadata(array($userId => $name));
$room->setPermissions(array($userId => $guestPermissions));
$roomUpdateRequest = new RoomUpdateRequest();
$roomUpdateRequest->setRoomId($roomId);
$roomUpdateRequest->setRoom($room);
$roomUpdateRequest->setAccessInfo($accessInfo);
list($roomUpdateReply, $status) = $roomClient->Update($roomUpdateRequest)->wait();
