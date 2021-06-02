# Alfaview\QuotaServiceApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**info**](QuotaServiceApi.md#info) | **POST** /info | 
[**stats**](QuotaServiceApi.md#stats) | **POST** /stats | 


# **info**
> \Alfaview\Model\QuotaServiceInfoReply info($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Alfaview\Api\QuotaServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Alfaview\Model\QuotaServiceInfoRequest(); // \Alfaview\Model\QuotaServiceInfoRequest | 

try {
    $result = $apiInstance->info($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotaServiceApi->info: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Alfaview\Model\QuotaServiceInfoRequest**](../Model/QuotaServiceInfoRequest.md)|  |

### Return type

[**\Alfaview\Model\QuotaServiceInfoReply**](../Model/QuotaServiceInfoReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stats**
> \Alfaview\Model\QuotaServiceStatsReply stats($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Alfaview\Api\QuotaServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Alfaview\Model\QuotaServiceStatsRequest(); // \Alfaview\Model\QuotaServiceStatsRequest | 

try {
    $result = $apiInstance->stats($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotaServiceApi->stats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Alfaview\Model\QuotaServiceStatsRequest**](../Model/QuotaServiceStatsRequest.md)|  |

### Return type

[**\Alfaview\Model\QuotaServiceStatsReply**](../Model/QuotaServiceStatsReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

