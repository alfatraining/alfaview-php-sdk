# Alfaview\Client\MeetingsApi

Meeting endpoints

All URIs are relative to https://apis.alfaview.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cancelMeeting()**](MeetingsApi.md#cancelMeeting) | **POST** /v2/meetings/{id}/cancellation | Cancel Meeting |
| [**createMeeting()**](MeetingsApi.md#createMeeting) | **POST** /v2/meetings | Create Meeting |
| [**getOwnMeeting()**](MeetingsApi.md#getOwnMeeting) | **GET** /v2/meetings/{id} | Get Own Meeting |
| [**listInvitedMeetings()**](MeetingsApi.md#listInvitedMeetings) | **GET** /v2/meetings/invitations | List Meeting Invitations |
| [**listOwnMeetings()**](MeetingsApi.md#listOwnMeetings) | **GET** /v2/meetings | List Own Meetings |
| [**updateMeeting()**](MeetingsApi.md#updateMeeting) | **PATCH** /v2/meetings/{id} | Update Meeting |


## `cancelMeeting()`

```php
cancelMeeting($id, $meeting_cancellation)
```

Cancel Meeting

Cancels a meeting. Optionally, a notification email is sent to the creator and all invitees.  **Required permissions:** - none beyond the access token  **Restrictions:** - guest access token: rejected - only the meeting's creator

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (opaque) authorization: accessToken
$config = Alfaview\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alfaview\Client\Api\MeetingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The meeting ID.
$meeting_cancellation = new \Alfaview\Client\Model\MeetingCancellation(); // \Alfaview\Client\Model\MeetingCancellation | Additional data needed for the cancellation.

try {
    $apiInstance->cancelMeeting($id, $meeting_cancellation);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->cancelMeeting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The meeting ID. | |
| **meeting_cancellation** | [**\Alfaview\Client\Model\MeetingCancellation**](../Model/MeetingCancellation.md)| Additional data needed for the cancellation. | |

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

## `createMeeting()`

```php
createMeeting($meeting_create): \Alfaview\Client\Model\ID
```

Create Meeting

Creates a meeting.  **Required permissions:** - none beyond the access token  **Restrictions:** - guest access token: rejected

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (opaque) authorization: accessToken
$config = Alfaview\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alfaview\Client\Api\MeetingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_create = new \Alfaview\Client\Model\MeetingCreate(); // \Alfaview\Client\Model\MeetingCreate | The meeting to create.

try {
    $result = $apiInstance->createMeeting($meeting_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->createMeeting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **meeting_create** | [**\Alfaview\Client\Model\MeetingCreate**](../Model/MeetingCreate.md)| The meeting to create. | |

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

## `getOwnMeeting()`

```php
getOwnMeeting($id): \Alfaview\Client\Model\Meeting
```

Get Own Meeting

Gets a meeting created by the user authenticated via the access token in the Authorization header.  **Required permissions:** - none beyond the access token  **Restrictions:** - guest access token: rejected - only the meeting's creator

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (opaque) authorization: accessToken
$config = Alfaview\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alfaview\Client\Api\MeetingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The meeting ID.

try {
    $result = $apiInstance->getOwnMeeting($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->getOwnMeeting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The meeting ID. | |

### Return type

[**\Alfaview\Client\Model\Meeting**](../Model/Meeting.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listInvitedMeetings()`

```php
listInvitedMeetings($from, $to): \Alfaview\Client\Model\MeetingInvitation[]
```

List Meeting Invitations

Lists the meetings that the user authenticated via the access token in the Authorization header is invited to. Every instance of a recurring meeting in the range is listed as its own entry with the same ID, starting with the ongoing or next instance. Past instances are not listed. Instances are only listed up to 90 days after the later of `from` and the time of the request, and not more than 5 years after the time of the request. Without `from` and `to`, the instances of the next 90 days are listed. Instances outside these limits are omitted.  **Required permissions:** - none beyond the access token  **Restrictions:** - guest access token: rejected

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (opaque) authorization: accessToken
$config = Alfaview\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alfaview\Client\Api\MeetingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | The earliest time at which the meeting is scheduled to be ongoing.
$to = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | The latest time at which the meeting is scheduled to be ongoing.

try {
    $result = $apiInstance->listInvitedMeetings($from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->listInvitedMeetings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **from** | **\DateTime**| The earliest time at which the meeting is scheduled to be ongoing. | [optional] |
| **to** | **\DateTime**| The latest time at which the meeting is scheduled to be ongoing. | [optional] |

### Return type

[**\Alfaview\Client\Model\MeetingInvitation[]**](../Model/MeetingInvitation.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listOwnMeetings()`

```php
listOwnMeetings($from, $to): \Alfaview\Client\Model\Meeting[]
```

List Own Meetings

Lists meetings created by the user authenticated via the access token in the Authorization header. Every instance of a recurring meeting in the range is listed as its own entry with the same ID, starting with the ongoing or next instance. Past instances are not listed. Instances are only listed up to 90 days after the later of `from` and the time of the request, and not more than 5 years after the time of the request. Without `from` and `to`, the instances of the next 90 days are listed. Instances outside these limits are omitted.  **Required permissions:** - none beyond the access token  **Restrictions:** - guest access token: rejected

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (opaque) authorization: accessToken
$config = Alfaview\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alfaview\Client\Api\MeetingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | The earliest time at which the meeting is scheduled to be ongoing.
$to = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | The latest time at which the meeting is scheduled to be ongoing.

try {
    $result = $apiInstance->listOwnMeetings($from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->listOwnMeetings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **from** | **\DateTime**| The earliest time at which the meeting is scheduled to be ongoing. | [optional] |
| **to** | **\DateTime**| The latest time at which the meeting is scheduled to be ongoing. | [optional] |

### Return type

[**\Alfaview\Client\Model\Meeting[]**](../Model/Meeting.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateMeeting()`

```php
updateMeeting($id, $meeting_update)
```

Update Meeting

Updates a meeting.  **Required permissions:** - none beyond the access token  **Restrictions:** - guest access token: rejected - only the meeting's creator

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (opaque) authorization: accessToken
$config = Alfaview\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alfaview\Client\Api\MeetingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The meeting ID.
$meeting_update = new \Alfaview\Client\Model\MeetingUpdate(); // \Alfaview\Client\Model\MeetingUpdate | The updated meeting.

try {
    $apiInstance->updateMeeting($id, $meeting_update);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->updateMeeting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The meeting ID. | |
| **meeting_update** | [**\Alfaview\Client\Model\MeetingUpdate**](../Model/MeetingUpdate.md)| The updated meeting. | |

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
