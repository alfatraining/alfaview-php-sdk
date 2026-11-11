# Alfaview\Client\PermissionsApi

Permission endpoints

All URIs are relative to https://apis.alfaview.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createPermissions()**](PermissionsApi.md#createPermissions) | **POST** /v2/rooms/{roomId}/permissions | Create Room Permissions |
| [**deletePermissions()**](PermissionsApi.md#deletePermissions) | **DELETE** /v2/rooms/{roomId}/permissions/{userId} | Delete Room Permissions |
| [**listPermissionGroups()**](PermissionsApi.md#listPermissionGroups) | **GET** /v2/permission-groups | List Permission Groups |
| [**listPermissions()**](PermissionsApi.md#listPermissions) | **GET** /v2/rooms/{roomId}/permissions | List Room Permissions |
| [**updatePermissions()**](PermissionsApi.md#updatePermissions) | **PATCH** /v2/rooms/{roomId}/permissions/{userId} | Update Room Permissions |


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


$apiInstance = new Alfaview\Client\Api\PermissionsApi(
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
    echo 'Exception when calling PermissionsApi->createPermissions: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Alfaview\Client\Api\PermissionsApi(
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
    echo 'Exception when calling PermissionsApi->deletePermissions: ', $e->getMessage(), PHP_EOL;
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

## `listPermissionGroups()`

```php
listPermissionGroups(): \Alfaview\Client\Model\PermissionGroup[]
```

List Permission Groups

Lists permission groups. Permission groups are predefined permissions that can be applied to users (e.g., Admin, Guest, etc.).  **Required permissions:** - none beyond the access token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (opaque) authorization: accessToken
$config = Alfaview\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alfaview\Client\Api\PermissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listPermissionGroups();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PermissionsApi->listPermissionGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Alfaview\Client\Model\PermissionGroup[]**](../Model/PermissionGroup.md)

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


$apiInstance = new Alfaview\Client\Api\PermissionsApi(
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
    echo 'Exception when calling PermissionsApi->listPermissions: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Alfaview\Client\Api\PermissionsApi(
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
    echo 'Exception when calling PermissionsApi->updatePermissions: ', $e->getMessage(), PHP_EOL;
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
