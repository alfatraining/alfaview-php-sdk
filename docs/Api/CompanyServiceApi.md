# Alfaview\CompanyServiceApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**billingInformationUpdate**](CompanyServiceApi.md#billingInformationUpdate) | **POST** /billingInformationUpdate | 
[**companyCreate**](CompanyServiceApi.md#companyCreate) | **POST** /create | 
[**companyDestroy**](CompanyServiceApi.md#companyDestroy) | **POST** /destroy | 
[**companyList**](CompanyServiceApi.md#companyList) | **POST** /list | 
[**companySearch**](CompanyServiceApi.md#companySearch) | **POST** /search | 
[**companyUpdate**](CompanyServiceApi.md#companyUpdate) | **POST** /update | 


# **billingInformationUpdate**
> \Alfaview\Model\CompanyServiceBillingInformationUpdateReply billingInformationUpdate($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Alfaview\Api\CompanyServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Alfaview\Model\CompanyServiceBillingInformationUpdateRequest(); // \Alfaview\Model\CompanyServiceBillingInformationUpdateRequest | 

try {
    $result = $apiInstance->billingInformationUpdate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyServiceApi->billingInformationUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Alfaview\Model\CompanyServiceBillingInformationUpdateRequest**](../Model/CompanyServiceBillingInformationUpdateRequest.md)|  |

### Return type

[**\Alfaview\Model\CompanyServiceBillingInformationUpdateReply**](../Model/CompanyServiceBillingInformationUpdateReply.md)

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
> \Alfaview\Model\CompanyServiceCompanyDestroyReply companyDestroy($body)



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

[**\Alfaview\Model\CompanyServiceCompanyDestroyReply**](../Model/CompanyServiceCompanyDestroyReply.md)

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

# **companySearch**
> \Alfaview\Model\CompanyServiceCompanySearchReply companySearch($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Alfaview\Api\CompanyServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Alfaview\Model\CompanyServiceCompanySearchRequest(); // \Alfaview\Model\CompanyServiceCompanySearchRequest | 

try {
    $result = $apiInstance->companySearch($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyServiceApi->companySearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Alfaview\Model\CompanyServiceCompanySearchRequest**](../Model/CompanyServiceCompanySearchRequest.md)|  |

### Return type

[**\Alfaview\Model\CompanyServiceCompanySearchReply**](../Model/CompanyServiceCompanySearchReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyUpdate**
> \Alfaview\Model\CompanyServiceCompanyUpdateReply companyUpdate($body)



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

[**\Alfaview\Model\CompanyServiceCompanyUpdateReply**](../Model/CompanyServiceCompanyUpdateReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

