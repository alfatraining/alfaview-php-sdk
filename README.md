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
        $av = new Alfaview();

        $credentials = new AuthenticationAuthorizationCodeCredentials();
        $credentials->setClientId('YOUR_API_CLIENT_ID');
        $credentials->setCode('YOUR_API_CODE');
        $credentials->setCompanyId('YOUR_API_COMPANY_ID');

        $response = $av->authenticate($credentials);
        $accessToken = $response->reply->getAccessToken();

        $response = $av->roomList($accessToken);
        var_dump($response->reply->getRooms());
```

To create or update a room that differ from the default room quota:

```
'active_participants' => 50
'passive_participants' => 0
'sub_rooms' => 10
```

it is required to specify the `\Alfaview\Model\CommonRoomQuotas` when creating or updating a room.

```php
        $av = new Alfaview();
        $room = new CommonRoom();
        $quotas = new CommonRoomQuotas();

        $room->setDisplayName("Meeting 1");
        $room->setQuotas($quotas->setActiveParticipants(100));

        $response = $av->createRoom($accessToken, $room);
        var_dump($response->reply->getRoomId());
```

Assuming you already have an `$accessToken` from the API authentication above,
To create a personal guest or group link in a room:
```php
        $av = new Alfaview();
        // optionally validity end date, if not set the links are always valid
        $validUntil = new \DateTime("next week today");
        $roomId = 'YOUR_ROOM_ID'

        // Get the `Participant` permission group id to use in our group link, or any other permission group you want
        $participantGroupId = $av->getPermissionGroupId($accessToken, 'Participant');

        $groupLink = new GuestServiceV2GroupLinkCreation();
        $groupLink->setPermissionGroupId($participantGroupId);
        $groupLink->setDescription("created by alfaview-php-sdk testCreateGroupLinks");
        $groupLink->setValidUntil($validUntil);

        $response = $av->createGroupLink($accessToken, $roomId, [$groupLink]);

        /* @var \Alfaview\Model\GuestServiceV2CreateGroupLinksReply $reply */
        $createGroupLinkReply = $response->reply;

        // Depending on how many you created a list is returned, in this example only one
        $groupLink = $createGroupLinkReply->getGroupLinks()[0];

        // optionally you can use an externalId for your group link authentication to ensure only one person is authenticating from your system
        $externalId = md5("unique-external-id-value-for-group-link");
        $response = $av->guestAuthenticate(
            'YOUR_API_COMPANY_ID',
            $roomId,
            $groupLink->getAccessKey(),
            'John Doe',
            $externalId
        );

```



### Advanced usage
Not all use cases are covered in the convenience wrapper. However, the complete API functionality is yet available by directly accessing our API endpoints described in the documentation below. And if you are awesome, feel free to contribute!

### Documentation
- [Authentication Service](docs/Api/AuthenticationServiceApi.md)
- [BusinessLogic Service](docs/Api/BusinessLogicServiceApi.md)
- [Company Service](docs/Api/CompanyServiceApi.md)
- [Room Service](docs/Api/RoomServiceApi.md)
- [User Service](docs/Api/UserServiceApi.md)
- [QuotaService Service](docs/Api/QuotaServiceApi.md)
- [GuestServiceV2 Service](docs/Api/GuestServiceApi.md)
