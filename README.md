# alfaview PHP SDK

A PHP library for the [alfaview API v2](https://apis.alfaview.com/v2/docs/openapi). This SDK is the successor of the previous version that was based on gRPC. Starting with version `2.0` this SDK no longer requires the gRPC server module and relies solely on JSON-based API communication.

### Getting started
- Signup for an alfaview account on [alfaview.com](https://alfaview.com)
- Create your API credentials in the alfaview administration, see the [support center](https://support.alfaview.com/en/developers/request-your-api-credentials/)
- Include this SDK via Composer (`composer require alfatraining/alfaview-php-sdk`) and take it for a spin

### Convenient usage
Take a look at `Alfaview.php` in the `lib` directory. It is a convenient entry point that exposes all API services (`authenticationApi`, `roomsApi`, `guestsApi`, `meetingsApi`, `permissionsApi`, `filesApi`, `reportsApi`, `usersApi`) with one shared configuration.

Authenticate with your API credentials and hand the access token to the SDK once. It is then sent as `Authorization: Bearer <token>` with every request that requires it. Access tokens are valid for 1 hour.

```php
use Alfaview\Client\Alfaview;
use Alfaview\Client\Model\APICredentials;

$alfaview = new Alfaview();

$credentials = new APICredentials();
$credentials->setClientId('API_CLIENT_ID');
$credentials->setKey('API_CODE');
$credentials->setCompanyId('API_COMPANY_ID');

$accessToken = $alfaview->authenticationApi->authenticateAPIKey($credentials);
$alfaview->setAccessToken($accessToken->getAccessToken());

$rooms = $alfaview->roomsApi->listRooms();
```

To create a room:

```php
use Alfaview\Client\Model\RoomCreate;
use Alfaview\Client\Model\SubroomCreateListItem;

$roomCreate = new RoomCreate();
$roomCreate->setDisplayName('room created by php-sdk V2');
$roomCreate->setType(RoomCreate::TYPE_ROOM);
$roomCreate->setWaitingRoomEnabled(false);
// optionally create subrooms right away
$roomCreate->setSubrooms([new SubroomCreateListItem(), new SubroomCreateListItem()]);

$roomId = $alfaview->roomsApi->createRoom($roomCreate)->getId();
$room = $alfaview->roomsApi->getRoom($roomId);
```

To create a group link in a room and authenticate a guest with it:

```php
use Alfaview\Client\Model\AuthenticateGroupLinkRequestBody;
use Alfaview\Client\Model\CreateGroupLinksRequestBody;
use Alfaview\Client\Model\GroupLinkCreate;

// Get the `Participant` permission group id to use in our group link, or any other permission group you want
$participantPermissionGroupId = null;
foreach ($alfaview->permissionsApi->listPermissionGroups() as $permissionGroup) {
    if ($permissionGroup->getName() === 'Participant') {
        $participantPermissionGroupId = $permissionGroup->getId();
    }
}

$groupLink = new GroupLinkCreate();
$groupLink->setDescription('PHP SDK Group Link');
$groupLink->setDialInAllowed(false);
$groupLink->setPermissionGroupId($participantPermissionGroupId);
// optional validity end date, if not set the link is always valid
$groupLink->setValidUntil(new \DateTime('next week today'));

$groupLinksRequest = new CreateGroupLinksRequestBody();
$groupLinksRequest->setCreate([$groupLink]);

$createdGroupLinks = $alfaview->guestsApi->createGroupLink($roomId, $groupLinksRequest);
$groupLink = $alfaview->guestsApi->getGroupLink($createdGroupLinks[0]->getId());

$groupLinkData = new AuthenticateGroupLinkRequestBody();
$groupLinkData->setDisplayName('John Doe');
$groupLinkData->setCompanyId('API_COMPANY_ID');
$groupLinkData->setRoomId($roomId);
// optional externalId (32 to 256 characters)
$groupLinkData->setExternalId(md5('external_id'));
$groupLinkData->setAccessKey($groupLink->getAccessKey());

$guestAuthentication = $alfaview->authenticationApi->authenticateGroupLink($groupLinkData);
```

Errors are thrown as `\Alfaview\Client\ApiException`. `getCode()` returns the HTTP status and `getResponseBody()` the `application/problem+json` error body.

### Upgrading to 3.0
Version 2.x passed the access token to every call (e.g. `createRoom($roomCreate, $token)`). The `$authorization` parameter no longer exists. Call `$alfaview->setAccessToken($token)` (or `Configuration::setAccessToken()`) once instead. Remove the token argument from every call: PHP does not reject the extra argument, it ends up in the wrong parameter (e.g. as the content type) and the request fails with `401` or `415`.
`listPermissionGroups()` has moved from `roomsApi` to `permissionsApi`.
`createGuestLinks()` returns the created `GuestLink` objects instead of `ID` objects. Code that only calls `getId()` on them keeps working.

### Advanced usage
Not all use cases are covered in the convenience wrapper. However, the complete API functionality is available by directly accessing our API endpoints described in the documentation below. And if you are awesome, feel free to contribute!

### Documentation
- [Authentication Service](docs/Api/AuthenticationApi.md)
- [Room Service](docs/Api/RoomsApi.md)
- [Permissions Service](docs/Api/PermissionsApi.md)
- [Files Service](docs/Api/FilesApi.md)
- [Meetings Service](docs/Api/MeetingsApi.md)
- [Guests Service](docs/Api/GuestsApi.md)
- [Reports Service](docs/Api/ReportsApi.md)
- [Users Service](docs/Api/UsersApi.md)
