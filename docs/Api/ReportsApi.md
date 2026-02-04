# Alfaview\Client\ReportsApi

All URIs are relative to https://apis.alfaview.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listAttendances()**](ReportsApi.md#listAttendances) | **GET** /v2/rooms/{roomId}/attendances | List Attendances |
| [**listStatistics()**](ReportsApi.md#listStatistics) | **GET** /v2/stats | List Statistics |


## `listAttendances()`

```php
listAttendances($room_id, $from, $to, $authorization): \Alfaview\Client\Model\UserAttendances[]
```

List Attendances

Lists attendances at a room during a time period.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alfaview\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$room_id = 00000000-0000-0000-0000-000000000000; // string | The room ID for the attendances.
$from = 2024-09-22T11:00:00Z; // \DateTime | The start time of the time period to consider in the report.
$to = 2024-09-22T12:00:00Z; // \DateTime | The end time of the time period to consider in the report.
$authorization = 'authorization_example'; // string | A valid access token (can be obtained by authenticating).

try {
    $result = $apiInstance->listAttendances($room_id, $from, $to, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->listAttendances: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **room_id** | **string**| The room ID for the attendances. | |
| **from** | **\DateTime**| The start time of the time period to consider in the report. | |
| **to** | **\DateTime**| The end time of the time period to consider in the report. | |
| **authorization** | **string**| A valid access token (can be obtained by authenticating). | [optional] |

### Return type

[**\Alfaview\Client\Model\UserAttendances[]**](../Model/UserAttendances.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listStatistics()`

```php
listStatistics($from, $to, $step_duration_hours, $authorization): \Alfaview\Client\Model\StatsPeriod[]
```

List Statistics

Lists statistics for provided filters grouped by time periods depending on the corresponding query parameter.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alfaview\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$from = 2024-09-22T11:00:00Z; // \DateTime | The start time of the time period to consider in the report. The earliest start time can be exactly 62 days in the past.
$to = 2024-09-22T12:00:00Z; // \DateTime | The end time of the time period to consider in the report.
$step_duration_hours = 56; // int | The duration of the time periods to group the report results in hours.
$authorization = 'authorization_example'; // string | A valid access token (can be obtained by authenticating).

try {
    $result = $apiInstance->listStatistics($from, $to, $step_duration_hours, $authorization);
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
| **authorization** | **string**| A valid access token (can be obtained by authenticating). | [optional] |

### Return type

[**\Alfaview\Client\Model\StatsPeriod[]**](../Model/StatsPeriod.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
