# Alfaview\Client\RoomsApi

All URIs are relative to https://apis.alfaview.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createPermissions()**](RoomsApi.md#createPermissions) | **POST** /v2/rooms/{roomId}/permissions | Create Permissions |
| [**createRoom()**](RoomsApi.md#createRoom) | **POST** /v2/rooms | Create Room |
| [**createSubroom()**](RoomsApi.md#createSubroom) | **POST** /v2/rooms/{roomId}/subrooms | Create Subroom |
| [**deletePermissions()**](RoomsApi.md#deletePermissions) | **DELETE** /v2/rooms/{roomId}/permissions/{userId} | Delete Permissions |
| [**deleteRoom()**](RoomsApi.md#deleteRoom) | **DELETE** /v2/rooms/{id} | Delete Room |
| [**deleteRoomFeatures()**](RoomsApi.md#deleteRoomFeatures) | **DELETE** /v2/rooms/{roomId}/features | Delete Room Features |
| [**deleteSubroom()**](RoomsApi.md#deleteSubroom) | **DELETE** /v2/rooms/{roomId}/subrooms/{subroomId} | Delete Subroom |
| [**getLanguageSettings()**](RoomsApi.md#getLanguageSettings) | **GET** /v2/rooms/{roomId}/language-settings | Get Language Settings |
| [**getRoom()**](RoomsApi.md#getRoom) | **GET** /v2/rooms/{id} | Get Room |
| [**getRoomFeatures()**](RoomsApi.md#getRoomFeatures) | **GET** /v2/rooms/{roomId}/features | Get Room Features |
| [**listAvailableLanguages()**](RoomsApi.md#listAvailableLanguages) | **GET** /v2/languages | List Available Languages |
| [**listParticipants()**](RoomsApi.md#listParticipants) | **GET** /v2/rooms/{id}/participants | List Participants |
| [**listPermissionGroups()**](RoomsApi.md#listPermissionGroups) | **GET** /v2/permission-groups | List Permission Groups |
| [**listPermissions()**](RoomsApi.md#listPermissions) | **GET** /v2/rooms/{roomId}/permissions | List Room Permissions |
| [**listRoomTypes()**](RoomsApi.md#listRoomTypes) | **GET** /v2/room-types | List Room Types |
| [**listRooms()**](RoomsApi.md#listRooms) | **GET** /v2/rooms | List Rooms |
| [**listSubrooms()**](RoomsApi.md#listSubrooms) | **GET** /v2/rooms/{roomId}/subrooms | List Subrooms |
| [**updateLanguageSettings()**](RoomsApi.md#updateLanguageSettings) | **PATCH** /v2/rooms/{roomId}/language-settings | Update Language Settings |
| [**updatePermissions()**](RoomsApi.md#updatePermissions) | **PATCH** /v2/rooms/{roomId}/permissions/{userId} | Update Permissions |
| [**updateRoom()**](RoomsApi.md#updateRoom) | **PATCH** /v2/rooms/{id} | Update Room |
| [**updateRoomFeatures()**](RoomsApi.md#updateRoomFeatures) | **PATCH** /v2/rooms/{roomId}/features | Update Room Features |
| [**updateSubroom()**](RoomsApi.md#updateSubroom) | **PATCH** /v2/rooms/{roomId}/subrooms/{subroomId} | Update Subroom |


## `createPermissions()`

```php
createPermissions($room_id, $participant_permissions, $authorization)
```

Create Permissions

Creates permissions for a user applied in a room.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alfaview\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$room_id = 00000000-0000-0000-0000-000000000000; // string | The room ID of the permissions.
$participant_permissions = new \Alfaview\Client\Model\ParticipantPermissions(); // \Alfaview\Client\Model\ParticipantPermissions
$authorization = 'authorization_example'; // string | A valid access token (can be obtained by authenticating).

try {
    $apiInstance->createPermissions($room_id, $participant_permissions, $authorization);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->createPermissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **room_id** | **string**| The room ID of the permissions. | |
| **participant_permissions** | [**\Alfaview\Client\Model\ParticipantPermissions**](../Model/ParticipantPermissions.md)|  | |
| **authorization** | **string**| A valid access token (can be obtained by authenticating). | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createRoom()`

```php
createRoom($room_create, $authorization): \Alfaview\Client\Model\ID
```

Create Room

Creates a room.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alfaview\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$room_create = new \Alfaview\Client\Model\RoomCreate(); // \Alfaview\Client\Model\RoomCreate | The room to create.
$authorization = 'authorization_example'; // string | A valid access token (can be obtained by authenticating).

try {
    $result = $apiInstance->createRoom($room_create, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->createRoom: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **room_create** | [**\Alfaview\Client\Model\RoomCreate**](../Model/RoomCreate.md)| The room to create. | |
| **authorization** | **string**| A valid access token (can be obtained by authenticating). | [optional] |

### Return type

[**\Alfaview\Client\Model\ID**](../Model/ID.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createSubroom()`

```php
createSubroom($room_id, $subroom_edit, $authorization): \Alfaview\Client\Model\ID
```

Create Subroom

Creates a subroom.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alfaview\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$room_id = 00000000-0000-0000-0000-000000000000; // string | The ID of the room in which to create the subroom.
$subroom_edit = new \Alfaview\Client\Model\SubroomEdit(); // \Alfaview\Client\Model\SubroomEdit | The subroom to create.
$authorization = 'authorization_example'; // string | A valid access token (can be obtained by authenticating).

try {
    $result = $apiInstance->createSubroom($room_id, $subroom_edit, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->createSubroom: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **room_id** | **string**| The ID of the room in which to create the subroom. | |
| **subroom_edit** | [**\Alfaview\Client\Model\SubroomEdit**](../Model/SubroomEdit.md)| The subroom to create. | |
| **authorization** | **string**| A valid access token (can be obtained by authenticating). | [optional] |

### Return type

[**\Alfaview\Client\Model\ID**](../Model/ID.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePermissions()`

```php
deletePermissions($room_id, $user_id, $authorization)
```

Delete Permissions

Deletes permissions of a user applied in a room.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alfaview\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$room_id = 00000000-0000-0000-0000-000000000000; // string | The room ID of the permissions.
$user_id = 00000000-0000-0000-0000-000000000000; // string | The user ID of the permissions.
$authorization = 'authorization_example'; // string | A valid access token (can be obtained by authenticating).

try {
    $apiInstance->deletePermissions($room_id, $user_id, $authorization);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->deletePermissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **room_id** | **string**| The room ID of the permissions. | |
| **user_id** | **string**| The user ID of the permissions. | |
| **authorization** | **string**| A valid access token (can be obtained by authenticating). | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteRoom()`

```php
deleteRoom($id, $authorization)
```

Delete Room

Deletes a room.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alfaview\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 00000000-0000-0000-0000-000000000000; // string | The ID of the room to delete.
$authorization = 'authorization_example'; // string | A valid access token (can be obtained by authenticating).

try {
    $apiInstance->deleteRoom($id, $authorization);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->deleteRoom: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the room to delete. | |
| **authorization** | **string**| A valid access token (can be obtained by authenticating). | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteRoomFeatures()`

```php
deleteRoomFeatures($room_id, $authorization)
```

Delete Room Features

Sets all the room features of a room to default.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alfaview\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$room_id = 00000000-0000-0000-0000-000000000000; // string | The room ID of the features.
$authorization = 'authorization_example'; // string | A valid access token (can be obtained by authenticating).

try {
    $apiInstance->deleteRoomFeatures($room_id, $authorization);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->deleteRoomFeatures: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **room_id** | **string**| The room ID of the features. | |
| **authorization** | **string**| A valid access token (can be obtained by authenticating). | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteSubroom()`

```php
deleteSubroom($room_id, $subroom_id, $authorization)
```

Delete Subroom

Deletes a subroom.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alfaview\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$room_id = 00000000-0000-0000-0000-000000000000; // string | The ID of the room the subroom is assigned to.
$subroom_id = 00000000-0000-0000-0000-000000000000; // string | The ID of the subroom to delete.
$authorization = 'authorization_example'; // string | A valid access token (can be obtained by authenticating).

try {
    $apiInstance->deleteSubroom($room_id, $subroom_id, $authorization);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->deleteSubroom: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **room_id** | **string**| The ID of the room the subroom is assigned to. | |
| **subroom_id** | **string**| The ID of the subroom to delete. | |
| **authorization** | **string**| A valid access token (can be obtained by authenticating). | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLanguageSettings()`

```php
getLanguageSettings($room_id, $authorization): \Alfaview\Client\Model\LanguageSettings
```

Get Language Settings

Gets the language settings of a room.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alfaview\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$room_id = 00000000-0000-0000-0000-000000000000; // string | The ID of the room.
$authorization = 'authorization_example'; // string | A valid access token (can be obtained by authenticating).

try {
    $result = $apiInstance->getLanguageSettings($room_id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->getLanguageSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **room_id** | **string**| The ID of the room. | |
| **authorization** | **string**| A valid access token (can be obtained by authenticating). | [optional] |

### Return type

[**\Alfaview\Client\Model\LanguageSettings**](../Model/LanguageSettings.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRoom()`

```php
getRoom($id, $authorization): \Alfaview\Client\Model\Room
```

Get Room

Gets a single room.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alfaview\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 00000000-0000-0000-0000-000000000000; // string | The ID of the room to get.
$authorization = 'authorization_example'; // string | A valid access token (can be obtained by authenticating).

try {
    $result = $apiInstance->getRoom($id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->getRoom: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the room to get. | |
| **authorization** | **string**| A valid access token (can be obtained by authenticating). | [optional] |

### Return type

[**\Alfaview\Client\Model\Room**](../Model/Room.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRoomFeatures()`

```php
getRoomFeatures($room_id, $authorization): \Alfaview\Client\Model\RoomFeatures
```

Get Room Features

Gets the room features of a room.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alfaview\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$room_id = 00000000-0000-0000-0000-000000000000; // string | The room ID of the features.
$authorization = 'authorization_example'; // string | A valid access token (can be obtained by authenticating).

try {
    $result = $apiInstance->getRoomFeatures($room_id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->getRoomFeatures: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **room_id** | **string**| The room ID of the features. | |
| **authorization** | **string**| A valid access token (can be obtained by authenticating). | [optional] |

### Return type

[**\Alfaview\Client\Model\RoomFeatures**](../Model/RoomFeatures.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAvailableLanguages()`

```php
listAvailableLanguages($authorization): \Alfaview\Client\Model\Languages
```

List Available Languages

Lists the languages available for transcription and translation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alfaview\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string | A valid access token (can be obtained by authenticating).

try {
    $result = $apiInstance->listAvailableLanguages($authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->listAvailableLanguages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| A valid access token (can be obtained by authenticating). | [optional] |

### Return type

[**\Alfaview\Client\Model\Languages**](../Model/Languages.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listParticipants()`

```php
listParticipants($id, $authorization): \Alfaview\Client\Model\SubroomParticipants[]
```

List Participants

Lists data about the users who are currently participating in a room.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alfaview\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 00000000-0000-0000-0000-000000000000; // string | The room ID of the participants.
$authorization = 'authorization_example'; // string | A valid access token (can be obtained by authenticating).

try {
    $result = $apiInstance->listParticipants($id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->listParticipants: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The room ID of the participants. | |
| **authorization** | **string**| A valid access token (can be obtained by authenticating). | [optional] |

### Return type

[**\Alfaview\Client\Model\SubroomParticipants[]**](../Model/SubroomParticipants.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPermissionGroups()`

```php
listPermissionGroups($authorization): \Alfaview\Client\Model\PermissionGroup[]
```

List Permission Groups

Lists permission groups.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alfaview\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string | A valid access token (can be obtained by authenticating).

try {
    $result = $apiInstance->listPermissionGroups($authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->listPermissionGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| A valid access token (can be obtained by authenticating). | [optional] |

### Return type

[**\Alfaview\Client\Model\PermissionGroup[]**](../Model/PermissionGroup.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPermissions()`

```php
listPermissions($room_id, $authorization): \Alfaview\Client\Model\RoomPermissions
```

List Room Permissions

Lists permissions applied in a room.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alfaview\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$room_id = 00000000-0000-0000-0000-000000000000; // string | The room ID of the permissions.
$authorization = 'authorization_example'; // string | A valid access token (can be obtained by authenticating).

try {
    $result = $apiInstance->listPermissions($room_id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->listPermissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **room_id** | **string**| The room ID of the permissions. | |
| **authorization** | **string**| A valid access token (can be obtained by authenticating). | [optional] |

### Return type

[**\Alfaview\Client\Model\RoomPermissions**](../Model/RoomPermissions.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listRoomTypes()`

```php
listRoomTypes($authorization): \Alfaview\Client\Model\RoomTypeData[]
```

List Room Types

Lists room types.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alfaview\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string | A valid access token (can be obtained by authenticating).

try {
    $result = $apiInstance->listRoomTypes($authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->listRoomTypes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| A valid access token (can be obtained by authenticating). | [optional] |

### Return type

[**\Alfaview\Client\Model\RoomTypeData[]**](../Model/RoomTypeData.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listRooms()`

```php
listRooms($authorization, $room_types, $page_token, $limit): \Alfaview\Client\Model\PaginatedBodyListRoom
```

List Rooms

Lists rooms.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alfaview\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string | A valid access token (can be obtained by authenticating).
$room_types = array('room_types_example'); // string[] | Filters the result by room type.
$page_token = 'page_token_example'; // string | For pagination: Pass the nextPageToken from the last successful request to obtain the next page. Omit on first request.
$limit = 50; // int | For pagination: Set a limit on the number of returned rooms.

try {
    $result = $apiInstance->listRooms($authorization, $room_types, $page_token, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->listRooms: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| A valid access token (can be obtained by authenticating). | [optional] |
| **room_types** | [**string[]**](../Model/string.md)| Filters the result by room type. | [optional] |
| **page_token** | **string**| For pagination: Pass the nextPageToken from the last successful request to obtain the next page. Omit on first request. | [optional] |
| **limit** | **int**| For pagination: Set a limit on the number of returned rooms. | [optional] [default to 50] |

### Return type

[**\Alfaview\Client\Model\PaginatedBodyListRoom**](../Model/PaginatedBodyListRoom.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSubrooms()`

```php
listSubrooms($room_id, $authorization): \Alfaview\Client\Model\Subroom[]
```

List Subrooms

Lists subrooms.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alfaview\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$room_id = 00000000-0000-0000-0000-000000000000; // string | The room ID of the subrooms.
$authorization = 'authorization_example'; // string | A valid access token (can be obtained by authenticating).

try {
    $result = $apiInstance->listSubrooms($room_id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->listSubrooms: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **room_id** | **string**| The room ID of the subrooms. | |
| **authorization** | **string**| A valid access token (can be obtained by authenticating). | [optional] |

### Return type

[**\Alfaview\Client\Model\Subroom[]**](../Model/Subroom.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateLanguageSettings()`

```php
updateLanguageSettings($room_id, $language_settings_edit, $authorization)
```

Update Language Settings

Updates the language settings of a room.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alfaview\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$room_id = 00000000-0000-0000-0000-000000000000; // string | The ID of the room.
$language_settings_edit = new \Alfaview\Client\Model\LanguageSettingsEdit(); // \Alfaview\Client\Model\LanguageSettingsEdit | The settings for the transcription and translation features.
$authorization = 'authorization_example'; // string | A valid access token (can be obtained by authenticating).

try {
    $apiInstance->updateLanguageSettings($room_id, $language_settings_edit, $authorization);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->updateLanguageSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **room_id** | **string**| The ID of the room. | |
| **language_settings_edit** | [**\Alfaview\Client\Model\LanguageSettingsEdit**](../Model/LanguageSettingsEdit.md)| The settings for the transcription and translation features. | |
| **authorization** | **string**| A valid access token (can be obtained by authenticating). | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePermissions()`

```php
updatePermissions($room_id, $user_id, $permissions_edit, $authorization)
```

Update Permissions

Updates permissions of a user applied in a room.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alfaview\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$room_id = 00000000-0000-0000-0000-000000000000; // string | The room ID of the permissions.
$user_id = 00000000-0000-0000-0000-000000000000; // string | The user ID of the permissions.
$permissions_edit = new \Alfaview\Client\Model\PermissionsEdit(); // \Alfaview\Client\Model\PermissionsEdit
$authorization = 'authorization_example'; // string | A valid access token (can be obtained by authenticating).

try {
    $apiInstance->updatePermissions($room_id, $user_id, $permissions_edit, $authorization);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->updatePermissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **room_id** | **string**| The room ID of the permissions. | |
| **user_id** | **string**| The user ID of the permissions. | |
| **permissions_edit** | [**\Alfaview\Client\Model\PermissionsEdit**](../Model/PermissionsEdit.md)|  | |
| **authorization** | **string**| A valid access token (can be obtained by authenticating). | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateRoom()`

```php
updateRoom($id, $room_update, $authorization)
```

Update Room

Updates a room. There are additional endpoints to create, update or delete subrooms, permissions and room features. Nested objects and arrays can only be replaced as a whole, not partially.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alfaview\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 00000000-0000-0000-0000-000000000000; // string | The ID of the room to update.
$room_update = new \Alfaview\Client\Model\RoomUpdate(); // \Alfaview\Client\Model\RoomUpdate | The fields of the room that should be changed. Nested objects and arrays can only be replaced as a whole, not partially.
$authorization = 'authorization_example'; // string | A valid access token (can be obtained by authenticating).

try {
    $apiInstance->updateRoom($id, $room_update, $authorization);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->updateRoom: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the room to update. | |
| **room_update** | [**\Alfaview\Client\Model\RoomUpdate**](../Model/RoomUpdate.md)| The fields of the room that should be changed. Nested objects and arrays can only be replaced as a whole, not partially. | |
| **authorization** | **string**| A valid access token (can be obtained by authenticating). | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateRoomFeatures()`

```php
updateRoomFeatures($room_id, $room_features_edit, $authorization)
```

Update Room Features

Updates the room features of a room.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alfaview\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$room_id = 00000000-0000-0000-0000-000000000000; // string | The room ID of the features.
$room_features_edit = new \Alfaview\Client\Model\RoomFeaturesEdit(); // \Alfaview\Client\Model\RoomFeaturesEdit | The room features that should be changed.
$authorization = 'authorization_example'; // string | A valid access token (can be obtained by authenticating).

try {
    $apiInstance->updateRoomFeatures($room_id, $room_features_edit, $authorization);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->updateRoomFeatures: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **room_id** | **string**| The room ID of the features. | |
| **room_features_edit** | [**\Alfaview\Client\Model\RoomFeaturesEdit**](../Model/RoomFeaturesEdit.md)| The room features that should be changed. | |
| **authorization** | **string**| A valid access token (can be obtained by authenticating). | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSubroom()`

```php
updateSubroom($room_id, $subroom_id, $subroom_edit, $authorization)
```

Update Subroom

Updates a subroom.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alfaview\Client\Api\RoomsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$room_id = 00000000-0000-0000-0000-000000000000; // string | The ID of the room the subroom is assigned to.
$subroom_id = 00000000-0000-0000-0000-000000000000; // string | The ID of the subroom to update.
$subroom_edit = new \Alfaview\Client\Model\SubroomEdit(); // \Alfaview\Client\Model\SubroomEdit | The fields of the subroom that should be changed.
$authorization = 'authorization_example'; // string | A valid access token (can be obtained by authenticating).

try {
    $apiInstance->updateSubroom($room_id, $subroom_id, $subroom_edit, $authorization);
} catch (Exception $e) {
    echo 'Exception when calling RoomsApi->updateSubroom: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **room_id** | **string**| The ID of the room the subroom is assigned to. | |
| **subroom_id** | **string**| The ID of the subroom to update. | |
| **subroom_edit** | [**\Alfaview\Client\Model\SubroomEdit**](../Model/SubroomEdit.md)| The fields of the subroom that should be changed. | |
| **authorization** | **string**| A valid access token (can be obtained by authenticating). | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
