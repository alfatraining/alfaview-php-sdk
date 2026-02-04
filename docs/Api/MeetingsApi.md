# Alfaview\Client\MeetingsApi

All URIs are relative to https://apis.alfaview.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cancelMeeting()**](MeetingsApi.md#cancelMeeting) | **POST** /v2/meetings/{id}/cancellation | Cancel Meeting |
| [**createMeeting()**](MeetingsApi.md#createMeeting) | **POST** /v2/meetings | Create Meeting |
| [**getOwnMeeting()**](MeetingsApi.md#getOwnMeeting) | **GET** /v2/meetings/{id} | Get own Meeting |
| [**listOwnMeetings()**](MeetingsApi.md#listOwnMeetings) | **GET** /v2/meetings | List own Meetings |
| [**updateMeeting()**](MeetingsApi.md#updateMeeting) | **PATCH** /v2/meetings/{id} | Update Meeting |


## `cancelMeeting()`

```php
cancelMeeting($id, $meeting_cancellation, $authorization)
```

Cancel Meeting

Cancels a meeting. Optionally, a notification email is sent to the creator and all invitees.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alfaview\Client\Api\MeetingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 00000000-0000-0000-0000-000000000000; // string | The ID of the meeting to cancel.
$meeting_cancellation = new \Alfaview\Client\Model\MeetingCancellation(); // \Alfaview\Client\Model\MeetingCancellation | Additional data needed for the cancellation.
$authorization = 'authorization_example'; // string | A valid access token (can be obtained by authenticating).

try {
    $apiInstance->cancelMeeting($id, $meeting_cancellation, $authorization);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->cancelMeeting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the meeting to cancel. | |
| **meeting_cancellation** | [**\Alfaview\Client\Model\MeetingCancellation**](../Model/MeetingCancellation.md)| Additional data needed for the cancellation. | |
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

## `createMeeting()`

```php
createMeeting($meeting_create, $authorization): \Alfaview\Client\Model\ID
```

Create Meeting

Creates a meeting.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alfaview\Client\Api\MeetingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$meeting_create = new \Alfaview\Client\Model\MeetingCreate(); // \Alfaview\Client\Model\MeetingCreate | The meeting to create.
$authorization = 'authorization_example'; // string | A valid access token (can be obtained by authenticating).

try {
    $result = $apiInstance->createMeeting($meeting_create, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->createMeeting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **meeting_create** | [**\Alfaview\Client\Model\MeetingCreate**](../Model/MeetingCreate.md)| The meeting to create. | |
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

## `getOwnMeeting()`

```php
getOwnMeeting($id, $authorization): \Alfaview\Client\Model\Meeting
```

Get own Meeting

Gets a meeting created by the user authenticated via the access token in the Authorization header.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alfaview\Client\Api\MeetingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 00000000-0000-0000-0000-000000000000; // string | The ID of the meeting to get.
$authorization = 'authorization_example'; // string | A valid access token (can be obtained by authenticating).

try {
    $result = $apiInstance->getOwnMeeting($id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->getOwnMeeting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the meeting to get. | |
| **authorization** | **string**| A valid access token (can be obtained by authenticating). | [optional] |

### Return type

[**\Alfaview\Client\Model\Meeting**](../Model/Meeting.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listOwnMeetings()`

```php
listOwnMeetings($authorization, $from, $to): \Alfaview\Client\Model\Meeting[]
```

List own Meetings

Lists meetings created by the user authenticated via the access token in the Authorization header.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alfaview\Client\Api\MeetingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string | A valid access token (can be obtained by authenticating).
$from = 2024-09-22T11:00:00Z; // \DateTime | The earliest time at which the meeting is scheduled to be ongoing.
$to = 2024-09-22T12:00:00Z; // \DateTime | The latest time at which the meeting is scheduled to be ongoing.

try {
    $result = $apiInstance->listOwnMeetings($authorization, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->listOwnMeetings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| A valid access token (can be obtained by authenticating). | [optional] |
| **from** | **\DateTime**| The earliest time at which the meeting is scheduled to be ongoing. | [optional] |
| **to** | **\DateTime**| The latest time at which the meeting is scheduled to be ongoing. | [optional] |

### Return type

[**\Alfaview\Client\Model\Meeting[]**](../Model/Meeting.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateMeeting()`

```php
updateMeeting($id, $meeting_update, $authorization)
```

Update Meeting

Updates a meeting.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alfaview\Client\Api\MeetingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 00000000-0000-0000-0000-000000000000; // string | The ID of the meeting to update.
$meeting_update = new \Alfaview\Client\Model\MeetingUpdate(); // \Alfaview\Client\Model\MeetingUpdate | The updated meeting data.
$authorization = 'authorization_example'; // string | A valid access token (can be obtained by authenticating).

try {
    $apiInstance->updateMeeting($id, $meeting_update, $authorization);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->updateMeeting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the meeting to update. | |
| **meeting_update** | [**\Alfaview\Client\Model\MeetingUpdate**](../Model/MeetingUpdate.md)| The updated meeting data. | |
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
