# Alfaview\Client\RoomsApi

Room endpoints

All URIs are relative to https://apis.alfaview.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createPermissions()**](RoomsApi.md#createPermissions) | **POST** /v2/rooms/{roomId}/permissions | Create Room Permissions |
| [**createRoom()**](RoomsApi.md#createRoom) | **POST** /v2/rooms | Create Room |
| [**createSubroom()**](RoomsApi.md#createSubroom) | **POST** /v2/rooms/{roomId}/subrooms | Create Subroom |
| [**deletePermissions()**](RoomsApi.md#deletePermissions) | **DELETE** /v2/rooms/{roomId}/permissions/{userId} | Delete Room Permissions |
| [**deleteRoom()**](RoomsApi.md#deleteRoom) | **DELETE** /v2/rooms/{id} | Delete Room |
| [**deleteRoomFeatures()**](RoomsApi.md#deleteRoomFeatures) | **DELETE** /v2/rooms/{roomId}/features | Delete Room Features |
| [**deleteSubroom()**](RoomsApi.md#deleteSubroom) | **DELETE** /v2/rooms/{roomId}/subrooms/{subroomId} | Delete Subroom |
| [**getLanguageSettings()**](RoomsApi.md#getLanguageSettings) | **GET** /v2/rooms/{roomId}/language-settings | Get Language Settings |
| [**getPasscode()**](RoomsApi.md#getPasscode) | **GET** /v2/rooms/{roomId}/passcode | Get Passcode |
| [**getRoom()**](RoomsApi.md#getRoom) | **GET** /v2/rooms/{id} | Get Room |
| [**getRoomFeatures()**](RoomsApi.md#getRoomFeatures) | **GET** /v2/rooms/{roomId}/features | Get Room Features |
| [**getRoomFileShareLimits()**](RoomsApi.md#getRoomFileShareLimits) | **GET** /v2/rooms/{roomId}/file-share-limits | Get File Share Limits |
| [**getRoomFileShareSettings()**](RoomsApi.md#getRoomFileShareSettings) | **GET** /v2/rooms/{roomId}/file-share-settings | Get File Share Settings |
| [**listAvailableLanguages()**](RoomsApi.md#listAvailableLanguages) | **GET** /v2/languages | List Available Languages |
| [**listParticipants()**](RoomsApi.md#listParticipants) | **GET** /v2/rooms/{id}/participants | List Participants |
| [**listPermissions()**](RoomsApi.md#listPermissions) | **GET** /v2/rooms/{roomId}/permissions | List Room Permissions |
| [**listRoomTypes()**](RoomsApi.md#listRoomTypes) | **GET** /v2/room-types | List Room Types |
| [**listRooms()**](RoomsApi.md#listRooms) | **GET** /v2/rooms | List Rooms |
| [**listSubrooms()**](RoomsApi.md#listSubrooms) | **GET** /v2/rooms/{roomId}/subrooms | List Subrooms |
| [**regeneratePasscode()**](RoomsApi.md#regeneratePasscode) | **POST** /v2/rooms/{roomId}/passcode | Regenerate Passcode |
| [**updateLanguageSettings()**](RoomsApi.md#updateLanguageSettings) | **PATCH** /v2/rooms/{roomId}/language-settings | Update Language Settings |
| [**updatePermissions()**](RoomsApi.md#updatePermissions) | **PATCH** /v2/rooms/{roomId}/permissions/{userId} | Update Room Permissions |
| [**updateRoom()**](RoomsApi.md#updateRoom) | **PATCH** /v2/rooms/{id} | Update Room |
| [**updateRoomFeatures()**](RoomsApi.md#updateRoomFeatures) | **PATCH** /v2/rooms/{roomId}/features | Update Room Features |
| [**updateRoomFileShareSettings()**](RoomsApi.md#updateRoomFileShareSettings) | **PATCH** /v2/rooms/{roomId}/file-share-settings | Update File Share Settings |
| [**updateSubroom()**](RoomsApi.md#updateSubroom) | **PATCH** /v2/rooms/{roomId}/subrooms/{subroomId} | Update Subroom |


## `createPermissions()`

```php
createPermissions($room_id, $participant_permissions)
```

Create Room Permissions

Creates permissions for a user that are applied in a room.  **Required permissions** (one of): - user permission `roomAdmin` - room permission `admin` in the room

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (opaque) authorization: accessToken
$config = Alfaview\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alfaview\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$room_id = 'room_id_example'; // string | The room ID.
$participant_permissions = new \Alfaview\Client\Model\ParticipantPermissions(); // \Alfaview\Client\Model\ParticipantPermissions | The permissions to apply.

try {
    $apiInstance->createPermissions($room_id, $participant_permissions);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->createPermissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **room_id** | **string**| The room ID. | |
| **participant_permissions** | [**\Alfaview\Client\Model\ParticipantPermissions**](../Model/ParticipantPermissions.md)| The permissions to apply. | |

### Return type

void (empty response body)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createRoom()`

```php
createRoom($room_create): \Alfaview\Client\Model\ID
```

Create Room

Creates a room.  **Required permissions** (one of): - user permission `roomCreate` - user permission `roomAdmin`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (opaque) authorization: accessToken
$config = Alfaview\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alfaview\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$room_create = new \Alfaview\Client\Model\RoomCreate(); // \Alfaview\Client\Model\RoomCreate | The room to create.

try {
    $result = $apiInstance->createRoom($room_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->createRoom: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **room_create** | [**\Alfaview\Client\Model\RoomCreate**](../Model/RoomCreate.md)| The room to create. | |

### Return type

[**\Alfaview\Client\Model\ID**](../Model/ID.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createSubroom()`

```php
createSubroom($room_id, $subroom_edit): \Alfaview\Client\Model\ID
```

Create Subroom

Creates a subroom.  **Required permissions** (one of): - user permission `roomAdmin` - room permission `admin` in the room

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (opaque) authorization: accessToken
$config = Alfaview\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alfaview\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$room_id = 'room_id_example'; // string | The room ID to assign the subroom to.
$subroom_edit = new \Alfaview\Client\Model\SubroomEdit(); // \Alfaview\Client\Model\SubroomEdit | The subroom to create.

try {
    $result = $apiInstance->createSubroom($room_id, $subroom_edit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->createSubroom: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **room_id** | **string**| The room ID to assign the subroom to. | |
| **subroom_edit** | [**\Alfaview\Client\Model\SubroomEdit**](../Model/SubroomEdit.md)| The subroom to create. | |

### Return type

[**\Alfaview\Client\Model\ID**](../Model/ID.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePermissions()`

```php
deletePermissions($room_id, $user_id)
```

Delete Room Permissions

Deletes permissions of a user that are applied in a room.  **Required permissions** (one of): - user permission `roomAdmin` - room permission `admin` in the room

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (opaque) authorization: accessToken
$config = Alfaview\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alfaview\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$room_id = 'room_id_example'; // string | The room ID.
$user_id = 'user_id_example'; // string | The user ID.

try {
    $apiInstance->deletePermissions($room_id, $user_id);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->deletePermissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **room_id** | **string**| The room ID. | |
| **user_id** | **string**| The user ID. | |

### Return type

void (empty response body)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteRoom()`

```php
deleteRoom($id)
```

Delete Room

Deletes a room.  **Required permissions** (one of): - user permission `roomAdmin` - room permission `admin` in the room

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (opaque) authorization: accessToken
$config = Alfaview\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alfaview\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The room ID.

try {
    $apiInstance->deleteRoom($id);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->deleteRoom: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The room ID. | |

### Return type

void (empty response body)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteRoomFeatures()`

```php
deleteRoomFeatures($room_id)
```

Delete Room Features

Sets all the room features of a room to default.  **Required permissions** (one of): - user permission `roomAdmin` - room permission `admin` in the room

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (opaque) authorization: accessToken
$config = Alfaview\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alfaview\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$room_id = 'room_id_example'; // string | The room ID.

try {
    $apiInstance->deleteRoomFeatures($room_id);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->deleteRoomFeatures: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **room_id** | **string**| The room ID. | |

### Return type

void (empty response body)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteSubroom()`

```php
deleteSubroom($room_id, $subroom_id)
```

Delete Subroom

Deletes a subroom.  **Required permissions** (one of): - user permission `roomAdmin` - room permission `admin` in the room

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (opaque) authorization: accessToken
$config = Alfaview\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alfaview\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$room_id = 'room_id_example'; // string | The room ID the subroom is assigned to.
$subroom_id = 'subroom_id_example'; // string | The subroom ID.

try {
    $apiInstance->deleteSubroom($room_id, $subroom_id);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->deleteSubroom: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **room_id** | **string**| The room ID the subroom is assigned to. | |
| **subroom_id** | **string**| The subroom ID. | |

### Return type

void (empty response body)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLanguageSettings()`

```php
getLanguageSettings($room_id): \Alfaview\Client\Model\LanguageSettings
```

Get Language Settings

Gets the language settings of a room.  **Required permissions:** - none beyond the access token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (opaque) authorization: accessToken
$config = Alfaview\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alfaview\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$room_id = 'room_id_example'; // string | The room ID.

try {
    $result = $apiInstance->getLanguageSettings($room_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->getLanguageSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **room_id** | **string**| The room ID. | |

### Return type

[**\Alfaview\Client\Model\LanguageSettings**](../Model/LanguageSettings.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPasscode()`

```php
getPasscode($room_id): \Alfaview\Client\Model\Passcode
```

Get Passcode

Gets the passcode for a room. Passcodes can be set regardless of whether a passcode is required for the room.  **Required permissions** (one of): - user permission `roomAdmin` - room permission `admin` in the room

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (opaque) authorization: accessToken
$config = Alfaview\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alfaview\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$room_id = 'room_id_example'; // string | The room ID.

try {
    $result = $apiInstance->getPasscode($room_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->getPasscode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **room_id** | **string**| The room ID. | |

### Return type

[**\Alfaview\Client\Model\Passcode**](../Model/Passcode.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRoom()`

```php
getRoom($id): \Alfaview\Client\Model\Room
```

Get Room

Gets a single room.  **Required permissions** (one of): - user permission `roomAdmin` - room permission `join`, `admin` or `promote` in the room  **Restrictions:** - department: visible only if the caller has the user permission `roomList` or room permissions in the department - room that is not visible: `404`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (opaque) authorization: accessToken
$config = Alfaview\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alfaview\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The room ID.

try {
    $result = $apiInstance->getRoom($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->getRoom: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The room ID. | |

### Return type

[**\Alfaview\Client\Model\Room**](../Model/Room.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRoomFeatures()`

```php
getRoomFeatures($room_id): \Alfaview\Client\Model\RoomFeatures
```

Get Room Features

Gets the room features of a room.  **Required permissions:** - none beyond the access token  **Restrictions:** - the room must be visible to the caller: user permission `roomAdmin` or `roomList`, or room permissions in the room - room that is not visible: `404`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (opaque) authorization: accessToken
$config = Alfaview\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alfaview\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$room_id = 'room_id_example'; // string | The room ID.

try {
    $result = $apiInstance->getRoomFeatures($room_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->getRoomFeatures: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **room_id** | **string**| The room ID. | |

### Return type

[**\Alfaview\Client\Model\RoomFeatures**](../Model/RoomFeatures.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRoomFileShareLimits()`

```php
getRoomFileShareLimits($room_id): \Alfaview\Client\Model\RoomLimits
```

Get File Share Limits

Gets the storage limits for file sharing in a room.  **Required permissions** (one of): - user permission `roomAdmin` - room permission `join`, `admin` or `promote` in the room

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (opaque) authorization: accessToken
$config = Alfaview\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alfaview\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$room_id = 'room_id_example'; // string | The room ID.

try {
    $result = $apiInstance->getRoomFileShareLimits($room_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->getRoomFileShareLimits: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **room_id** | **string**| The room ID. | |

### Return type

[**\Alfaview\Client\Model\RoomLimits**](../Model/RoomLimits.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRoomFileShareSettings()`

```php
getRoomFileShareSettings($room_id): \Alfaview\Client\Model\RoomSettings
```

Get File Share Settings

Gets the file share settings of a room.  **Required permissions** (one of): - user permission `roomAdmin` - room permission `join`, `admin` or `promote` in the room

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (opaque) authorization: accessToken
$config = Alfaview\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alfaview\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$room_id = 'room_id_example'; // string | The room ID.

try {
    $result = $apiInstance->getRoomFileShareSettings($room_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->getRoomFileShareSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **room_id** | **string**| The room ID. | |

### Return type

[**\Alfaview\Client\Model\RoomSettings**](../Model/RoomSettings.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAvailableLanguages()`

```php
listAvailableLanguages(): \Alfaview\Client\Model\Languages
```

List Available Languages

Lists the languages available for transcription and translation.  **Required permissions:** - none beyond the access token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (opaque) authorization: accessToken
$config = Alfaview\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alfaview\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listAvailableLanguages();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->listAvailableLanguages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Alfaview\Client\Model\Languages**](../Model/Languages.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listParticipants()`

```php
listParticipants($id): \Alfaview\Client\Model\SubroomParticipants[]
```

List Participants

Lists data about the participants who are currently in a room.  **Required permissions:** - room permission `join` in the room  **Result:** - without the user permission `userAdmin`, `userList` or `userShow`: `displayName` of every participant empty

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (opaque) authorization: accessToken
$config = Alfaview\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alfaview\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The room ID.

try {
    $result = $apiInstance->listParticipants($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->listParticipants: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The room ID. | |

### Return type

[**\Alfaview\Client\Model\SubroomParticipants[]**](../Model/SubroomParticipants.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPermissions()`

```php
listPermissions($room_id): \Alfaview\Client\Model\RoomPermissions
```

List Room Permissions

Lists permissions applied in a room.  **Required permissions:** - none beyond the access token  **Restrictions:** - the room must be visible to the caller: user permission `roomAdmin` or `roomList`, or room permissions in the room - room that is not visible: `404`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (opaque) authorization: accessToken
$config = Alfaview\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alfaview\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$room_id = 'room_id_example'; // string | The room ID.

try {
    $result = $apiInstance->listPermissions($room_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->listPermissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **room_id** | **string**| The room ID. | |

### Return type

[**\Alfaview\Client\Model\RoomPermissions**](../Model/RoomPermissions.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listRoomTypes()`

```php
listRoomTypes(): \Alfaview\Client\Model\RoomTypeData[]
```

List Room Types

Lists room types.  **Required permissions:** - none beyond the access token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (opaque) authorization: accessToken
$config = Alfaview\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alfaview\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listRoomTypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->listRoomTypes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Alfaview\Client\Model\RoomTypeData[]**](../Model/RoomTypeData.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listRooms()`

```php
listRooms($room_types, $page_token, $limit): \Alfaview\Client\Model\PaginatedBodyListRoom
```

List Rooms

Lists rooms.  **Required permissions:** - none beyond the access token  **Result:** - with the user permission `roomAdmin`: all rooms of the company, except meetings in which the caller has no room permission `join` - otherwise: the rooms in which the caller has the room permission `join`, `admin` or `promote` - departments: only if the caller has the user permission `roomList` or room permissions in the department

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (opaque) authorization: accessToken
$config = Alfaview\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alfaview\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$room_types = array('room_types_example'); // string[] | Filters the result by room type.  - <code>room</code> is used for normal rooms.  - <code>departments</code> are unjoinable rooms that can hold multiple child rooms to help improving room structuring.  - <code>meeting</code> marks temporary meeting rooms.
$page_token = 'page_token_example'; // string | For pagination: Pass the nextPageToken from the last successful request to obtain the next page. Omit on first request.
$limit = 50; // int | For pagination: Set a limit on the number of returned rooms.

try {
    $result = $apiInstance->listRooms($room_types, $page_token, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->listRooms: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **room_types** | [**string[]**](../Model/string.md)| Filters the result by room type.  - &lt;code&gt;room&lt;/code&gt; is used for normal rooms.  - &lt;code&gt;departments&lt;/code&gt; are unjoinable rooms that can hold multiple child rooms to help improving room structuring.  - &lt;code&gt;meeting&lt;/code&gt; marks temporary meeting rooms. | [optional] |
| **page_token** | **string**| For pagination: Pass the nextPageToken from the last successful request to obtain the next page. Omit on first request. | [optional] |
| **limit** | **int**| For pagination: Set a limit on the number of returned rooms. | [optional] [default to 50] |

### Return type

[**\Alfaview\Client\Model\PaginatedBodyListRoom**](../Model/PaginatedBodyListRoom.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSubrooms()`

```php
listSubrooms($room_id): \Alfaview\Client\Model\Subroom[]
```

List Subrooms

Lists subrooms.  **Required permissions:** - none beyond the access token  **Restrictions:** - the room must be visible to the caller: user permission `roomAdmin` or `roomList`, or room permissions in the room - room that is not visible: `404`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (opaque) authorization: accessToken
$config = Alfaview\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alfaview\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$room_id = 'room_id_example'; // string | The room ID of the subrooms.

try {
    $result = $apiInstance->listSubrooms($room_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->listSubrooms: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **room_id** | **string**| The room ID of the subrooms. | |

### Return type

[**\Alfaview\Client\Model\Subroom[]**](../Model/Subroom.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `regeneratePasscode()`

```php
regeneratePasscode($room_id): \Alfaview\Client\Model\Passcode
```

Regenerate Passcode

Generates a new passcode for a room. Passcodes are always generated, regardless of whether a passcode is required for the room. To require a passcode for a room, update the room.  **Required permissions** (one of): - user permission `roomAdmin` - room permission `admin` in the room

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (opaque) authorization: accessToken
$config = Alfaview\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alfaview\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$room_id = 'room_id_example'; // string | The room ID.

try {
    $result = $apiInstance->regeneratePasscode($room_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->regeneratePasscode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **room_id** | **string**| The room ID. | |

### Return type

[**\Alfaview\Client\Model\Passcode**](../Model/Passcode.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateLanguageSettings()`

```php
updateLanguageSettings($room_id, $language_settings_edit)
```

Update Language Settings

Updates the language settings of a room.  **Required permissions** (one of): - user permission `roomAdmin` - room permission `admin` or `promote` in the room  **Restrictions:** - changing `targetTranscriptionLanguages`: user permission `roomAdmin` or room permission `admin` - changing `transcriptionEnabled`: user permission `roomAdmin`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (opaque) authorization: accessToken
$config = Alfaview\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alfaview\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$room_id = 'room_id_example'; // string | The room ID.
$language_settings_edit = new \Alfaview\Client\Model\LanguageSettingsEdit(); // \Alfaview\Client\Model\LanguageSettingsEdit | The updated settings for the transcription and translation features.

try {
    $apiInstance->updateLanguageSettings($room_id, $language_settings_edit);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->updateLanguageSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **room_id** | **string**| The room ID. | |
| **language_settings_edit** | [**\Alfaview\Client\Model\LanguageSettingsEdit**](../Model/LanguageSettingsEdit.md)| The updated settings for the transcription and translation features. | |

### Return type

void (empty response body)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePermissions()`

```php
updatePermissions($room_id, $user_id, $permissions_edit)
```

Update Room Permissions

Updates permissions of a user that are applied in a room.  **Required permissions** (one of): - user permission `roomAdmin` - room permission `admin` in the room

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (opaque) authorization: accessToken
$config = Alfaview\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alfaview\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$room_id = 'room_id_example'; // string | The room ID.
$user_id = 'user_id_example'; // string | The user ID.
$permissions_edit = new \Alfaview\Client\Model\PermissionsEdit(); // \Alfaview\Client\Model\PermissionsEdit | The updated permissions.

try {
    $apiInstance->updatePermissions($room_id, $user_id, $permissions_edit);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->updatePermissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **room_id** | **string**| The room ID. | |
| **user_id** | **string**| The user ID. | |
| **permissions_edit** | [**\Alfaview\Client\Model\PermissionsEdit**](../Model/PermissionsEdit.md)| The updated permissions. | |

### Return type

void (empty response body)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateRoom()`

```php
updateRoom($id, $room_update)
```

Update Room

Updates a room. There are additional endpoints to create, update or delete subrooms, permissions and room features. Nested objects and arrays can only be replaced as a whole, not partially.  **Required permissions** (one of): - user permission `roomAdmin` - room permission `admin` in the room

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (opaque) authorization: accessToken
$config = Alfaview\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alfaview\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The room ID.
$room_update = new \Alfaview\Client\Model\RoomUpdate(); // \Alfaview\Client\Model\RoomUpdate | The updated room fields. Nested objects and arrays can only be replaced as a whole, not partially.

try {
    $apiInstance->updateRoom($id, $room_update);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->updateRoom: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The room ID. | |
| **room_update** | [**\Alfaview\Client\Model\RoomUpdate**](../Model/RoomUpdate.md)| The updated room fields. Nested objects and arrays can only be replaced as a whole, not partially. | |

### Return type

void (empty response body)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateRoomFeatures()`

```php
updateRoomFeatures($room_id, $room_features_edit)
```

Update Room Features

Updates the room features of a room.  **Required permissions** (one of): - user permission `roomAdmin` - room permission `admin` in the room

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (opaque) authorization: accessToken
$config = Alfaview\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alfaview\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$room_id = 'room_id_example'; // string | The room ID.
$room_features_edit = new \Alfaview\Client\Model\RoomFeaturesEdit(); // \Alfaview\Client\Model\RoomFeaturesEdit | The updated room features.

try {
    $apiInstance->updateRoomFeatures($room_id, $room_features_edit);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->updateRoomFeatures: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **room_id** | **string**| The room ID. | |
| **room_features_edit** | [**\Alfaview\Client\Model\RoomFeaturesEdit**](../Model/RoomFeaturesEdit.md)| The updated room features. | |

### Return type

void (empty response body)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateRoomFileShareSettings()`

```php
updateRoomFileShareSettings($room_id, $room_settings_update)
```

Update File Share Settings

Updates the file share settings of a room.  **Required permissions** (one of): - user permission `roomAdmin` - room permission `admin` or `promote` in the room  **Restrictions:** - body with `enabled`: user permission `roomAdmin` or room permission `admin`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (opaque) authorization: accessToken
$config = Alfaview\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alfaview\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$room_id = 'room_id_example'; // string | The room ID.
$room_settings_update = new \Alfaview\Client\Model\RoomSettingsUpdate(); // \Alfaview\Client\Model\RoomSettingsUpdate | The updated file share settings.

try {
    $apiInstance->updateRoomFileShareSettings($room_id, $room_settings_update);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->updateRoomFileShareSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **room_id** | **string**| The room ID. | |
| **room_settings_update** | [**\Alfaview\Client\Model\RoomSettingsUpdate**](../Model/RoomSettingsUpdate.md)| The updated file share settings. | |

### Return type

void (empty response body)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSubroom()`

```php
updateSubroom($room_id, $subroom_id, $subroom_edit)
```

Update Subroom

Updates a subroom.  **Required permissions** (one of): - user permission `roomAdmin` - room permission `admin` in the room

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (opaque) authorization: accessToken
$config = Alfaview\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alfaview\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$room_id = 'room_id_example'; // string | The room ID the subroom is assigned to.
$subroom_id = 'subroom_id_example'; // string | The subroom ID.
$subroom_edit = new \Alfaview\Client\Model\SubroomEdit(); // \Alfaview\Client\Model\SubroomEdit | The updated subroom fields.

try {
    $apiInstance->updateSubroom($room_id, $subroom_id, $subroom_edit);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->updateSubroom: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **room_id** | **string**| The room ID the subroom is assigned to. | |
| **subroom_id** | **string**| The subroom ID. | |
| **subroom_edit** | [**\Alfaview\Client\Model\SubroomEdit**](../Model/SubroomEdit.md)| The updated subroom fields. | |

### Return type

void (empty response body)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
