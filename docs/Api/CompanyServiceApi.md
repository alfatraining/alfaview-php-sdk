# Alfaview\CompanyServiceApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**companyAvailable**](CompanyServiceApi.md#companyAvailable) | **POST** /available | 
[**companyCreate**](CompanyServiceApi.md#companyCreate) | **POST** /create | 
[**companyDestroy**](CompanyServiceApi.md#companyDestroy) | **POST** /destroy | 
[**companyList**](CompanyServiceApi.md#companyList) | **POST** /list | 
[**companyUpdate**](CompanyServiceApi.md#companyUpdate) | **POST** /update | 


# **companyAvailable**
> \Alfaview\Model\CompanyServiceCompanyAvailableReply companyAvailable($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Alfaview\Api\CompanyServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Alfaview\Model\CompanyServiceCompanyAvailableRequest(); // \Alfaview\Model\CompanyServiceCompanyAvailableRequest | 

try {
    $result = $apiInstance->companyAvailable($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyServiceApi->companyAvailable: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Alfaview\Model\CompanyServiceCompanyAvailableRequest**](../Model/CompanyServiceCompanyAvailableRequest.md)|  |

### Return type

[**\Alfaview\Model\CompanyServiceCompanyAvailableReply**](../Model/CompanyServiceCompanyAvailableReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyCreate**
> \Alfaview\Model\CompanyServiceCompanyCreateReply companyCreate($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Alfaview\Api\CompanyServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Alfaview\Model\CompanyServiceCompanyCreateRequest(); // \Alfaview\Model\CompanyServiceCompanyCreateRequest | 

try {
    $result = $apiInstance->companyCreate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyServiceApi->companyCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Alfaview\Model\CompanyServiceCompanyCreateRequest**](../Model/CompanyServiceCompanyCreateRequest.md)|  |

### Return type

[**\Alfaview\Model\CompanyServiceCompanyCreateReply**](../Model/CompanyServiceCompanyCreateReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyDestroy**
> \Alfaview\Model\CommonReplyInfo companyDestroy($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Alfaview\Api\CompanyServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Alfaview\Model\CompanyServiceCompanyDestroyRequest(); // \Alfaview\Model\CompanyServiceCompanyDestroyRequest | 

try {
    $result = $apiInstance->companyDestroy($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyServiceApi->companyDestroy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Alfaview\Model\CompanyServiceCompanyDestroyRequest**](../Model/CompanyServiceCompanyDestroyRequest.md)|  |

### Return type

[**\Alfaview\Model\CommonReplyInfo**](../Model/CommonReplyInfo.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyList**
> \Alfaview\Model\CompanyServiceCompanyListReply companyList($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Alfaview\Api\CompanyServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Alfaview\Model\CompanyServiceCompanyListRequest(); // \Alfaview\Model\CompanyServiceCompanyListRequest | 

try {
    $result = $apiInstance->companyList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyServiceApi->companyList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Alfaview\Model\CompanyServiceCompanyListRequest**](../Model/CompanyServiceCompanyListRequest.md)|  |

### Return type

[**\Alfaview\Model\CompanyServiceCompanyListReply**](../Model/CompanyServiceCompanyListReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyUpdate**
> \Alfaview\Model\CommonReplyInfo companyUpdate($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Alfaview\Api\CompanyServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Alfaview\Model\CompanyServiceCompanyUpdateRequest(); // \Alfaview\Model\CompanyServiceCompanyUpdateRequest | 

try {
    $result = $apiInstance->companyUpdate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyServiceApi->companyUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Alfaview\Model\CompanyServiceCompanyUpdateRequest**](../Model/CompanyServiceCompanyUpdateRequest.md)|  |

### Return type

[**\Alfaview\Model\CommonReplyInfo**](../Model/CommonReplyInfo.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

