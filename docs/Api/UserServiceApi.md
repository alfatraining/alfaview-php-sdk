# Alfaview\UserServiceApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**userCreate**](UserServiceApi.md#userCreate) | **POST** /create | 
[**userDestroy**](UserServiceApi.md#userDestroy) | **POST** /destroy | 
[**userGetLocale**](UserServiceApi.md#userGetLocale) | **POST** /getLocale | 
[**userList**](UserServiceApi.md#userList) | **POST** /list | 
[**userProfileUpdate**](UserServiceApi.md#userProfileUpdate) | **POST** /updateProfile | 
[**userUpdate**](UserServiceApi.md#userUpdate) | **POST** /update | 


# **userCreate**
> \Alfaview\Model\UserUserCreateReply userCreate($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Alfaview\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Alfaview\Model\UserUserCreateRequest(); // \Alfaview\Model\UserUserCreateRequest | 

try {
    $result = $apiInstance->userCreate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->userCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Alfaview\Model\UserUserCreateRequest**](../Model/UserUserCreateRequest.md)|  |

### Return type

[**\Alfaview\Model\UserUserCreateReply**](../Model/UserUserCreateReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userDestroy**
> \Alfaview\Model\CommonReplyInfo userDestroy($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Alfaview\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Alfaview\Model\UserUserDestroyRequest(); // \Alfaview\Model\UserUserDestroyRequest | 

try {
    $result = $apiInstance->userDestroy($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->userDestroy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Alfaview\Model\UserUserDestroyRequest**](../Model/UserUserDestroyRequest.md)|  |

### Return type

[**\Alfaview\Model\CommonReplyInfo**](../Model/CommonReplyInfo.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userGetLocale**
> \Alfaview\Model\UserUserGetLocaleReply userGetLocale($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Alfaview\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Alfaview\Model\UserUserGetLocaleRequest(); // \Alfaview\Model\UserUserGetLocaleRequest | 

try {
    $result = $apiInstance->userGetLocale($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->userGetLocale: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Alfaview\Model\UserUserGetLocaleRequest**](../Model/UserUserGetLocaleRequest.md)|  |

### Return type

[**\Alfaview\Model\UserUserGetLocaleReply**](../Model/UserUserGetLocaleReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userList**
> \Alfaview\Model\UserUserListReply userList($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Alfaview\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Alfaview\Model\UserUserListRequest(); // \Alfaview\Model\UserUserListRequest | 

try {
    $result = $apiInstance->userList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->userList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Alfaview\Model\UserUserListRequest**](../Model/UserUserListRequest.md)|  |

### Return type

[**\Alfaview\Model\UserUserListReply**](../Model/UserUserListReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userProfileUpdate**
> \Alfaview\Model\CommonReplyInfo userProfileUpdate($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Alfaview\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Alfaview\Model\UserUserProfileUpdateRequest(); // \Alfaview\Model\UserUserProfileUpdateRequest | 

try {
    $result = $apiInstance->userProfileUpdate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->userProfileUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Alfaview\Model\UserUserProfileUpdateRequest**](../Model/UserUserProfileUpdateRequest.md)|  |

### Return type

[**\Alfaview\Model\CommonReplyInfo**](../Model/CommonReplyInfo.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userUpdate**
> \Alfaview\Model\CommonReplyInfo userUpdate($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Alfaview\Api\UserServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Alfaview\Model\UserUserUpdateRequest(); // \Alfaview\Model\UserUserUpdateRequest | 

try {
    $result = $apiInstance->userUpdate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserServiceApi->userUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Alfaview\Model\UserUserUpdateRequest**](../Model/UserUserUpdateRequest.md)|  |

### Return type

[**\Alfaview\Model\CommonReplyInfo**](../Model/CommonReplyInfo.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

