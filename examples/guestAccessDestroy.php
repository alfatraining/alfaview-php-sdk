<?php

require dirname(__FILE__).'/../vendor/autoload.php';

use Alfatraining\Grpc\Authentication\AuthenticationRequest;
use Alfatraining\Grpc\Authentication\AuthenticationServiceClient;
use Alfatraining\Grpc\Authentication\AuthenticationUpdateRequest;
use Alfatraining\Grpc\Authentication\AuthorizationCodeCredentials;
use Alfatraining\Grpc\Common\AccessInfo;
use Alfatraining\Grpc\Common\Permissions;
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

$guestId = '';
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

// detach the guest from room
$nilPermissions = new Permissions();
$nilPermissions->setRemove(true);
$room = new Room();
$room->setMetadata(array($guestId => ''));
$room->setPermissions(array($guestId => $nilPermissions));
$roomUpdateRequest = new RoomUpdateRequest();
$roomUpdateRequest->setRoomId($roomId);
$roomUpdateRequest->setRoom($room);
$roomUpdateRequest->setAccessInfo($accessInfo);
list($roomUpdateReply, $status) = $roomClient->Update($roomUpdateRequest)->wait();

// delete the guest access credentials
$authenticationUpdateRequest = new AuthenticationUpdateRequest();
$authenticationUpdateRequest->setRemoveAll(true);
$authenticationUpdateRequest->setUserId($guestId);
$authenticationUpdateRequest->setAccessInfo($accessInfo);
list($authenticationTReply, $status) = $authClient->authenticationUpdate($authenticationUpdateRequest)->wait();
