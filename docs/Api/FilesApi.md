# Alfaview\Client\FilesApi

File endpoints

All URIs are relative to https://apis.alfaview.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getRoomFileShareLimits()**](FilesApi.md#getRoomFileShareLimits) | **GET** /v2/rooms/{roomId}/file-share-limits | Get File Share Limits |
| [**getRoomFileShareSettings()**](FilesApi.md#getRoomFileShareSettings) | **GET** /v2/rooms/{roomId}/file-share-settings | Get File Share Settings |
| [**updateRoomFileShareSettings()**](FilesApi.md#updateRoomFileShareSettings) | **PATCH** /v2/rooms/{roomId}/file-share-settings | Update File Share Settings |


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


$apiInstance = new Alfaview\Client\Api\FilesApi(
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
    echo 'Exception when calling FilesApi->getRoomFileShareLimits: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Alfaview\Client\Api\FilesApi(
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
    echo 'Exception when calling FilesApi->getRoomFileShareSettings: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Alfaview\Client\Api\FilesApi(
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
    echo 'Exception when calling FilesApi->updateRoomFileShareSettings: ', $e->getMessage(), PHP_EOL;
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
