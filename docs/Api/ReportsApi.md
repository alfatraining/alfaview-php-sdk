# Alfaview\Client\ReportsApi

Report endpoints

All URIs are relative to https://apis.alfaview.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listAttendances()**](ReportsApi.md#listAttendances) | **GET** /v2/rooms/{roomId}/attendances | List Attendances |
| [**listStatistics()**](ReportsApi.md#listStatistics) | **GET** /v2/stats | List Statistics |


## `listAttendances()`

```php
listAttendances($room_id, $from, $to): \Alfaview\Client\Model\UserAttendances[]
```

List Attendances

Lists attendances at a room during a time period.  **Required permissions:** - normal room: one of user permission `roomAdmin` or room permission `promote` or `admin` in the room - meeting room: the caller must be the meeting's creator

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (opaque) authorization: accessToken
$config = Alfaview\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alfaview\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$room_id = 'room_id_example'; // string | The room ID.
$from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | The start time of the time period to consider in the report. A session is kept for 62 days after it ends.
$to = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | The end time of the time period to consider in the report.

try {
    $result = $apiInstance->listAttendances($room_id, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->listAttendances: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **room_id** | **string**| The room ID. | |
| **from** | **\DateTime**| The start time of the time period to consider in the report. A session is kept for 62 days after it ends. | |
| **to** | **\DateTime**| The end time of the time period to consider in the report. | |

### Return type

[**\Alfaview\Client\Model\UserAttendances[]**](../Model/UserAttendances.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listStatistics()`

```php
listStatistics($from, $to, $step_duration_hours): \Alfaview\Client\Model\StatsPeriod[]
```

List Statistics

Lists statistics for provided filters grouped by time periods depending on the corresponding query parameter.  **Required permissions:** - user permission `manageCompany`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (opaque) authorization: accessToken
$config = Alfaview\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alfaview\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | The start time of the time period to consider in the report. The earliest start time can be exactly 62 days in the past.
$to = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | The end time of the time period to consider in the report.
$step_duration_hours = 56; // int | The duration of the time periods to group the report results in hours.

try {
    $result = $apiInstance->listStatistics($from, $to, $step_duration_hours);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->listStatistics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **from** | **\DateTime**| The start time of the time period to consider in the report. The earliest start time can be exactly 62 days in the past. | |
| **to** | **\DateTime**| The end time of the time period to consider in the report. | |
| **step_duration_hours** | **int**| The duration of the time periods to group the report results in hours. | |

### Return type

[**\Alfaview\Client\Model\StatsPeriod[]**](../Model/StatsPeriod.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
