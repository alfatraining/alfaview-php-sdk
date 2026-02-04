# alfaview PHP SDK

A PHP library for the alfaview APIs. This SDK is the successor of the previous version that was based on gRPC. Starting with version `2.0` this SDK no longer requires the gRPC server module and relies solely on JSON-based API communication.

### Getting started
- Signup for an alfaview account on [alfaview.com](https://alfaview.com)
- Create your API credentials in the [Account Management](https://app.alfaview.com/#/settings) of your alfaview account
- Include this SDK via Composer and take it for a spin

### Convenient usage
Take a look the `Alfaview.php` in the `src` directory. It is a convenient entry point for most use cases like **authentication**, **listing rooms** or **creating join links**.

Here is an example for authenticating with the API and retrieving a list of rooms:

```php
        $alfaview = new Alfaview();

        $credentials = new APICredentials();
        $credentials->setClientId('API_CLIENT_ID');
        $credentials->setKey('API_CODE');
        $credentials->setCompanyId('API_COMPANY_ID');

        $accessToken = $alfaview->authenticationApi->authenticateAPIKey($credentials);

```

To create or update a room that differ from the default room quota:

```
'active_participants' => 50
'passive_participants' => 0
'sub_rooms' => 10
```

it is required to specify the `\Alfaview\Model\CommonRoomQuotas` when creating or updating a room.

```php
        $alfaview = new Alfaview();

        $roomCreate = new RoomCreate();
        $roomCreate->setDisplayName('room created by php-sdk V2');
        $roomCreate->setCreateDefaultSubrooms(true);
        $roomCreate->setMode(RoomCreate::MODE_NORMAL);
        $roomCreate->setType(RoomCreate::TYPE_ROOM);
        $roomCreate->setWaitingRoomEnabled(false);

        $room = $alfaview->roomsApi->createRoom($roomCreate, $accessToken->getAccessToken());
```

Assuming you already have an `$accessToken` from the API authentication above,
To create a personal guest or group link in a room:
```php
        $alfaview = new Alfaview();
        // optionally validity end date, if not set the links are always valid
        $validUntil = new \DateTime("next week today");
        $roomId = 'YOUR_ROOM_ID'

        // Get the `Participant` permission group id to use in our group link, or any other permission group you want
        $permissionGroups = $alfaview->roomsApi->listPermissionGroups($accessToken->getAccessToken());
        $participantPermissionGroupId = null;
        foreach ($permissionGroups as $permissionGroup) {
            if ($permissionGroup->getName() === 'Participant') {
                $participantPermissionGroupId = $permissionGroup->getId();
            }
        }

        $groupLink = new GroupLinkCreate();
        $groupLink->setDescription('PHP SDK Group Link');
        $groupLink->setDialInAllowed(false);
        $groupLink->setPermissionGroupId($participantPermissionGroupId);
        $groupLink->setValidUntil(new \DateTime('next week today'));

        $groupLinksRequest = new PostGroupLinksRequestBody();
        $groupLinksRequest->setCreate([$groupLink]);

        $groupLinkId = $alfaview->guestsApi->createGroupLink($roomId, $groupLinksRequest, $accessToken->getAccessToken());

        $groupLink = $alfaview->guestsApi->getGroupLink($groupLink[0]->getId(), $accessToken->getAccessToken());

        $groupLinkData = new GuestAuthInfoRequestData();
        $groupLinkData->setDisplayName('John Doe');
        $groupLinkData->setCompanyId('COMPANY_ID'));
        $groupLinkData->setRoomId($roomId);
        // optional externalId usage
        $groupLinkData->setExternalId(md5('external_id'));
        $groupLinkData->setAccessKey($groupLink->getAccessKey());

        $groupLinkAuthResponse = $alfaview->authenticationApi->authenticateGuest($groupLinkData);

```



### Advanced usage
Not all use cases are covered in the convenience wrapper. However, the complete API functionality is yet available by directly accessing our API endpoints described in the documentation below. And if you are awesome, feel free to contribute!

### Documentation
- [Authentication Service](docs/Api/AuthenticationApi.md)
- [Room Service](docs/Api/RoomsApi.md)
- [Meetings Service](docs/Api/MeetingsApi.md)
- [Guests Service](docs/Api/GuestsApi.md)
- [Reports Service](docs/Api/ReportsApi.md)
