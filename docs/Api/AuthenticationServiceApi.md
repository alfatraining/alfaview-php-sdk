# Alfaview\AuthenticationServiceApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**authenticate**](AuthenticationServiceApi.md#authenticate) | **POST** /authenticate | 
[**authenticationCreate**](AuthenticationServiceApi.md#authenticationCreate) | **POST** /authenticationCreate | 
[**authenticationInformation**](AuthenticationServiceApi.md#authenticationInformation) | **POST** /authenticationInformation | 
[**authenticationUpdate**](AuthenticationServiceApi.md#authenticationUpdate) | **POST** /authenticationUpdate | 
[**isAuthenticated**](AuthenticationServiceApi.md#isAuthenticated) | **POST** /isAuthenticated | 
[**listAuthentications**](AuthenticationServiceApi.md#listAuthentications) | **POST** /listAuthentications | 
[**requestPasswordReset**](AuthenticationServiceApi.md#requestPasswordReset) | **POST** /requestPasswordReset | 
[**signAccessToken**](AuthenticationServiceApi.md#signAccessToken) | **POST** /signAccessToken | 


# **authenticate**
> \Alfaview\Model\AuthenticationAuthenticationReply authenticate($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Alfaview\Api\AuthenticationServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Alfaview\Model\AuthenticationAuthenticationRequest(); // \Alfaview\Model\AuthenticationAuthenticationRequest | 

try {
    $result = $apiInstance->authenticate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationServiceApi->authenticate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Alfaview\Model\AuthenticationAuthenticationRequest**](../Model/AuthenticationAuthenticationRequest.md)|  |

### Return type

[**\Alfaview\Model\AuthenticationAuthenticationReply**](../Model/AuthenticationAuthenticationReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **authenticationCreate**
> \Alfaview\Model\AuthenticationAuthenticationCreateReply authenticationCreate($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Alfaview\Api\AuthenticationServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Alfaview\Model\AuthenticationAuthenticationCreateRequest(); // \Alfaview\Model\AuthenticationAuthenticationCreateRequest | 

try {
    $result = $apiInstance->authenticationCreate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationServiceApi->authenticationCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Alfaview\Model\AuthenticationAuthenticationCreateRequest**](../Model/AuthenticationAuthenticationCreateRequest.md)|  |

### Return type

[**\Alfaview\Model\AuthenticationAuthenticationCreateReply**](../Model/AuthenticationAuthenticationCreateReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **authenticationInformation**
> \Alfaview\Model\AuthenticationAuthenticationInformationReply authenticationInformation($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Alfaview\Api\AuthenticationServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Alfaview\Model\AuthenticationAuthenticationInformationRequest(); // \Alfaview\Model\AuthenticationAuthenticationInformationRequest | 

try {
    $result = $apiInstance->authenticationInformation($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationServiceApi->authenticationInformation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Alfaview\Model\AuthenticationAuthenticationInformationRequest**](../Model/AuthenticationAuthenticationInformationRequest.md)|  |

### Return type

[**\Alfaview\Model\AuthenticationAuthenticationInformationReply**](../Model/AuthenticationAuthenticationInformationReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **authenticationUpdate**
> \Alfaview\Model\CommonReplyInfo authenticationUpdate($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Alfaview\Api\AuthenticationServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Alfaview\Model\AuthenticationAuthenticationUpdateRequest(); // \Alfaview\Model\AuthenticationAuthenticationUpdateRequest | 

try {
    $result = $apiInstance->authenticationUpdate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationServiceApi->authenticationUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Alfaview\Model\AuthenticationAuthenticationUpdateRequest**](../Model/AuthenticationAuthenticationUpdateRequest.md)|  |

### Return type

[**\Alfaview\Model\CommonReplyInfo**](../Model/CommonReplyInfo.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **isAuthenticated**
> \Alfaview\Model\CommonReplyInfo isAuthenticated($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Alfaview\Api\AuthenticationServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Alfaview\Model\CommonAccessInfo(); // \Alfaview\Model\CommonAccessInfo | 

try {
    $result = $apiInstance->isAuthenticated($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationServiceApi->isAuthenticated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Alfaview\Model\CommonAccessInfo**](../Model/CommonAccessInfo.md)|  |

### Return type

[**\Alfaview\Model\CommonReplyInfo**](../Model/CommonReplyInfo.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listAuthentications**
> \Alfaview\Model\AuthenticationListAuthenticationsReply listAuthentications($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Alfaview\Api\AuthenticationServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Alfaview\Model\AuthenticationListAuthenticationsRequest(); // \Alfaview\Model\AuthenticationListAuthenticationsRequest | 

try {
    $result = $apiInstance->listAuthentications($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationServiceApi->listAuthentications: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Alfaview\Model\AuthenticationListAuthenticationsRequest**](../Model/AuthenticationListAuthenticationsRequest.md)|  |

### Return type

[**\Alfaview\Model\AuthenticationListAuthenticationsReply**](../Model/AuthenticationListAuthenticationsReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **requestPasswordReset**
> \Alfaview\Model\AuthenticationPasswordResetReply requestPasswordReset($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Alfaview\Api\AuthenticationServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Alfaview\Model\AuthenticationPasswordResetRequest(); // \Alfaview\Model\AuthenticationPasswordResetRequest | 

try {
    $result = $apiInstance->requestPasswordReset($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationServiceApi->requestPasswordReset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Alfaview\Model\AuthenticationPasswordResetRequest**](../Model/AuthenticationPasswordResetRequest.md)|  |

### Return type

[**\Alfaview\Model\AuthenticationPasswordResetReply**](../Model/AuthenticationPasswordResetReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **signAccessToken**
> \Alfaview\Model\AuthenticationAuthenticationReply signAccessToken($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Alfaview\Api\AuthenticationServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Alfaview\Model\AuthenticationSignAccessTokenRequest(); // \Alfaview\Model\AuthenticationSignAccessTokenRequest | 

try {
    $result = $apiInstance->signAccessToken($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationServiceApi->signAccessToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Alfaview\Model\AuthenticationSignAccessTokenRequest**](../Model/AuthenticationSignAccessTokenRequest.md)|  |

### Return type

[**\Alfaview\Model\AuthenticationAuthenticationReply**](../Model/AuthenticationAuthenticationReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

