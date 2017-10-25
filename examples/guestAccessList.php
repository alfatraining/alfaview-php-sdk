<?php

require dirname(__FILE__).'/../vendor/autoload.php';

use Alfatraining\Grpc\Authentication\AuthenticationServiceClient;
use Alfatraining\Grpc\Authentication\AuthenticationRequest;
use Alfatraining\Grpc\Authentication\AuthorizationCodeCredentials;
use Alfatraining\Grpc\Authentication\ListAuthenticationsRequest;
use Alfatraining\Grpc\Common\AccessInfo;
use Alfatraining\Grpc\Room\RoomListRequest;
use Alfatraining\Grpc\Room\RoomServiceClient;
use Alfatraining\Grpc\User\UserListRequest;
use Alfatraining\Grpc\User\UserServiceClient;

// configuration
$clientId = '';
$authCode = '';
$companyId = '';
$authServiceAddress = '';
$userServiceAddress = '';
$roomServiceAddress = '';

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

// request room data for a specific room and filter guest ids
$roomListRequest = new RoomListRequest();
$roomListRequest->setFilterRoomIds(array('XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX')); // limits the request to just the specified room ids
$roomListRequest->setAccessInfo($accessInfo);
list($roomListReply, $status) = $roomClient->List($roomListRequest)->wait();
$guestIds = array();
foreach ($roomListReply->getRooms() as $roomID => $room) {
  $permissions = $room->getPermissions(); // the permissions object holds room permissions for specific users and guest ids
  $metadata = $room->getMetadata(); // guest ids are stored in the metadata object along with other metadata
  foreach ($metadata as $key => $value) { // iterating over the metadata
    if(isset($permissions[$key])) { // checking against the permissions object to find out whether we have found a guest id
      $guestIds[] = $key; // save guest id to array
    }
  }
}

// list all guest accounts for this specific room
$listAuthenticationsRequest = new ListAuthenticationsRequest();
$listAuthenticationsRequest->setKeyType(array('guest_access'));
$listAuthenticationsRequest->setUserIdList($guestIds);
$listAuthenticationsRequest->setCompanyId(array($companyId));
$listAuthenticationsRequest->setAccessInfo($accessInfo);
list($listAuthenticationsReply, $status) = $authClient->listAuthentications($listAuthenticationsRequest)->wait();
foreach ($listAuthenticationsReply->getResults() as $guestId => $guestAccount) {
    $authenticationList = $guestAccount->getList();
    $authenticationMeta = $authenticationList[0]->getMetadata(); // using the first element here is safe
    print_r($authenticationMeta);
}
