# Alfaview\RoomServiceApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**availableTypes**](RoomServiceApi.md#availableTypes) | **POST** /availableTypes | 
[**callList**](RoomServiceApi.md#callList) | **POST** /list | 
[**create**](RoomServiceApi.md#create) | **POST** /create | 
[**createJoinLink**](RoomServiceApi.md#createJoinLink) | **POST** /createJoinLink | 
[**destroy**](RoomServiceApi.md#destroy) | **POST** /destroy | 
[**permissions**](RoomServiceApi.md#permissions) | **POST** /permissions | 
[**sort**](RoomServiceApi.md#sort) | **POST** /sort | 
[**status**](RoomServiceApi.md#status) | **POST** /status | 
[**update**](RoomServiceApi.md#update) | **POST** /update | 


# **availableTypes**
> \Alfaview\Model\RoomServiceAvailableTypesReply availableTypes($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Alfaview\Api\RoomServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Alfaview\Model\RoomServiceAvailableTypesRequest(); // \Alfaview\Model\RoomServiceAvailableTypesRequest | 

try {
    $result = $apiInstance->availableTypes($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomServiceApi->availableTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Alfaview\Model\RoomServiceAvailableTypesRequest**](../Model/RoomServiceAvailableTypesRequest.md)|  |

### Return type

[**\Alfaview\Model\RoomServiceAvailableTypesReply**](../Model/RoomServiceAvailableTypesReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **callList**
> \Alfaview\Model\RoomServiceRoomListReply callList($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Alfaview\Api\RoomServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Alfaview\Model\RoomServiceRoomListRequest(); // \Alfaview\Model\RoomServiceRoomListRequest | 

try {
    $result = $apiInstance->callList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomServiceApi->callList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Alfaview\Model\RoomServiceRoomListRequest**](../Model/RoomServiceRoomListRequest.md)|  |

### Return type

[**\Alfaview\Model\RoomServiceRoomListReply**](../Model/RoomServiceRoomListReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **create**
> \Alfaview\Model\RoomServiceRoomCreateReply create($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Alfaview\Api\RoomServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Alfaview\Model\RoomServiceRoomCreateRequest(); // \Alfaview\Model\RoomServiceRoomCreateRequest | 

try {
    $result = $apiInstance->create($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomServiceApi->create: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Alfaview\Model\RoomServiceRoomCreateRequest**](../Model/RoomServiceRoomCreateRequest.md)|  |

### Return type

[**\Alfaview\Model\RoomServiceRoomCreateReply**](../Model/RoomServiceRoomCreateReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createJoinLink**
> \Alfaview\Model\RoomServiceCreateJoinLinkReply createJoinLink($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Alfaview\Api\RoomServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Alfaview\Model\RoomServiceCreateJoinLinkRequest(); // \Alfaview\Model\RoomServiceCreateJoinLinkRequest | 

try {
    $result = $apiInstance->createJoinLink($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomServiceApi->createJoinLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Alfaview\Model\RoomServiceCreateJoinLinkRequest**](../Model/RoomServiceCreateJoinLinkRequest.md)|  |

### Return type

[**\Alfaview\Model\RoomServiceCreateJoinLinkReply**](../Model/RoomServiceCreateJoinLinkReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **destroy**
> \Alfaview\Model\RoomServiceRoomDestroyReply destroy($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Alfaview\Api\RoomServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Alfaview\Model\RoomServiceRoomDestroyRequest(); // \Alfaview\Model\RoomServiceRoomDestroyRequest | 

try {
    $result = $apiInstance->destroy($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomServiceApi->destroy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Alfaview\Model\RoomServiceRoomDestroyRequest**](../Model/RoomServiceRoomDestroyRequest.md)|  |

### Return type

[**\Alfaview\Model\RoomServiceRoomDestroyReply**](../Model/RoomServiceRoomDestroyReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **permissions**
> \Alfaview\Model\RoomServiceRoomPermissionsReply permissions($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Alfaview\Api\RoomServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Alfaview\Model\RoomServiceRoomPermissionsRequest(); // \Alfaview\Model\RoomServiceRoomPermissionsRequest | 

try {
    $result = $apiInstance->permissions($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomServiceApi->permissions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Alfaview\Model\RoomServiceRoomPermissionsRequest**](../Model/RoomServiceRoomPermissionsRequest.md)|  |

### Return type

[**\Alfaview\Model\RoomServiceRoomPermissionsReply**](../Model/RoomServiceRoomPermissionsReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sort**
> \Alfaview\Model\RoomServiceRoomSortReply sort($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Alfaview\Api\RoomServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Alfaview\Model\RoomServiceRoomSortRequest(); // \Alfaview\Model\RoomServiceRoomSortRequest | 

try {
    $result = $apiInstance->sort($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomServiceApi->sort: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Alfaview\Model\RoomServiceRoomSortRequest**](../Model/RoomServiceRoomSortRequest.md)|  |

### Return type

[**\Alfaview\Model\RoomServiceRoomSortReply**](../Model/RoomServiceRoomSortReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **status**
> \Alfaview\Model\RoomServiceRoomStatusReply status($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Alfaview\Api\RoomServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Alfaview\Model\RoomServiceRoomStatusRequest(); // \Alfaview\Model\RoomServiceRoomStatusRequest | 

try {
    $result = $apiInstance->status($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomServiceApi->status: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Alfaview\Model\RoomServiceRoomStatusRequest**](../Model/RoomServiceRoomStatusRequest.md)|  |

### Return type

[**\Alfaview\Model\RoomServiceRoomStatusReply**](../Model/RoomServiceRoomStatusReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **update**
> \Alfaview\Model\RoomServiceRoomUpdateReply update($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Alfaview\Api\RoomServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Alfaview\Model\RoomServiceRoomUpdateRequest(); // \Alfaview\Model\RoomServiceRoomUpdateRequest | 

try {
    $result = $apiInstance->update($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoomServiceApi->update: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Alfaview\Model\RoomServiceRoomUpdateRequest**](../Model/RoomServiceRoomUpdateRequest.md)|  |

### Return type

[**\Alfaview\Model\RoomServiceRoomUpdateReply**](../Model/RoomServiceRoomUpdateReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

