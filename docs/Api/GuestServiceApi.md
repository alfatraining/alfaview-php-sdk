# Alfaview\GuestServiceApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**authenticate**](GuestServiceApi.md#authenticate) | **POST** /authenticate | 
[**createGroupLinks**](GuestServiceApi.md#createGroupLinks) | **POST** /createGroupLinks | 
[**createGuestLinks**](GuestServiceApi.md#createGuestLinks) | **POST** /createGuestLinks | 
[**deleteLink**](GuestServiceApi.md#deleteLink) | **POST** /deleteLink | 
[**getGroupLink**](GuestServiceApi.md#getGroupLink) | **POST** /getGroupLink | 
[**getGuestLink**](GuestServiceApi.md#getGuestLink) | **POST** /getGuestLink | 
[**getLink**](GuestServiceApi.md#getLink) | **POST** /getLink | 
[**listGroupLinks**](GuestServiceApi.md#listGroupLinks) | **POST** /listGroupLinks | 
[**listGuestLinks**](GuestServiceApi.md#listGuestLinks) | **POST** /listGuestLinks | 
[**resendGuestLinkEmail**](GuestServiceApi.md#resendGuestLinkEmail) | **POST** /resendGuestLinkEmail | 
[**streamTaskProgress**](GuestServiceApi.md#streamTaskProgress) | **POST** /streamTaskProgress | 
[**updateGroupLink**](GuestServiceApi.md#updateGroupLink) | **POST** /updateGroupLink | 
[**updateGuestLink**](GuestServiceApi.md#updateGuestLink) | **POST** /updateGuestLink | 


# **authenticate**
> \Alfaview\Model\GuestServiceV2AuthenticateReply authenticate($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Alfaview\Api\GuestServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Alfaview\Model\GuestServiceV2AuthenticateRequest(); // \Alfaview\Model\GuestServiceV2AuthenticateRequest | 

try {
    $result = $apiInstance->authenticate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuestServiceApi->authenticate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Alfaview\Model\GuestServiceV2AuthenticateRequest**](../Model/GuestServiceV2AuthenticateRequest.md)|  |

### Return type

[**\Alfaview\Model\GuestServiceV2AuthenticateReply**](../Model/GuestServiceV2AuthenticateReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createGroupLinks**
> \Alfaview\Model\GuestServiceV2CreateGroupLinksReply createGroupLinks($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Alfaview\Api\GuestServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Alfaview\Model\GuestServiceV2CreateGroupLinksRequest(); // \Alfaview\Model\GuestServiceV2CreateGroupLinksRequest | 

try {
    $result = $apiInstance->createGroupLinks($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuestServiceApi->createGroupLinks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Alfaview\Model\GuestServiceV2CreateGroupLinksRequest**](../Model/GuestServiceV2CreateGroupLinksRequest.md)|  |

### Return type

[**\Alfaview\Model\GuestServiceV2CreateGroupLinksReply**](../Model/GuestServiceV2CreateGroupLinksReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createGuestLinks**
> \Alfaview\Model\GuestServiceV2CreateGuestLinksReply createGuestLinks($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Alfaview\Api\GuestServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Alfaview\Model\GuestServiceV2CreateGuestLinksRequest(); // \Alfaview\Model\GuestServiceV2CreateGuestLinksRequest | 

try {
    $result = $apiInstance->createGuestLinks($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuestServiceApi->createGuestLinks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Alfaview\Model\GuestServiceV2CreateGuestLinksRequest**](../Model/GuestServiceV2CreateGuestLinksRequest.md)|  |

### Return type

[**\Alfaview\Model\GuestServiceV2CreateGuestLinksReply**](../Model/GuestServiceV2CreateGuestLinksReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteLink**
> \Alfaview\Model\GuestServiceV2DeleteLinkReply deleteLink($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Alfaview\Api\GuestServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Alfaview\Model\GuestServiceV2DeleteLinkRequest(); // \Alfaview\Model\GuestServiceV2DeleteLinkRequest | 

try {
    $result = $apiInstance->deleteLink($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuestServiceApi->deleteLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Alfaview\Model\GuestServiceV2DeleteLinkRequest**](../Model/GuestServiceV2DeleteLinkRequest.md)|  |

### Return type

[**\Alfaview\Model\GuestServiceV2DeleteLinkReply**](../Model/GuestServiceV2DeleteLinkReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGroupLink**
> \Alfaview\Model\GuestServiceV2GetGroupLinkReply getGroupLink($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Alfaview\Api\GuestServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Alfaview\Model\GuestServiceV2GetGroupLinkRequest(); // \Alfaview\Model\GuestServiceV2GetGroupLinkRequest | 

try {
    $result = $apiInstance->getGroupLink($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuestServiceApi->getGroupLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Alfaview\Model\GuestServiceV2GetGroupLinkRequest**](../Model/GuestServiceV2GetGroupLinkRequest.md)|  |

### Return type

[**\Alfaview\Model\GuestServiceV2GetGroupLinkReply**](../Model/GuestServiceV2GetGroupLinkReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGuestLink**
> \Alfaview\Model\GuestServiceV2GetGuestLinkReply getGuestLink($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Alfaview\Api\GuestServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Alfaview\Model\GuestServiceV2GetGuestLinkRequest(); // \Alfaview\Model\GuestServiceV2GetGuestLinkRequest | 

try {
    $result = $apiInstance->getGuestLink($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuestServiceApi->getGuestLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Alfaview\Model\GuestServiceV2GetGuestLinkRequest**](../Model/GuestServiceV2GetGuestLinkRequest.md)|  |

### Return type

[**\Alfaview\Model\GuestServiceV2GetGuestLinkReply**](../Model/GuestServiceV2GetGuestLinkReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLink**
> \Alfaview\Model\GuestServiceV2GetLinkReply getLink($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Alfaview\Api\GuestServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Alfaview\Model\GuestServiceV2GetLinkRequest(); // \Alfaview\Model\GuestServiceV2GetLinkRequest | 

try {
    $result = $apiInstance->getLink($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuestServiceApi->getLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Alfaview\Model\GuestServiceV2GetLinkRequest**](../Model/GuestServiceV2GetLinkRequest.md)|  |

### Return type

[**\Alfaview\Model\GuestServiceV2GetLinkReply**](../Model/GuestServiceV2GetLinkReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listGroupLinks**
> \Alfaview\Model\GuestServiceV2ListGroupLinksReply listGroupLinks($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Alfaview\Api\GuestServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Alfaview\Model\GuestServiceV2ListGroupLinksRequest(); // \Alfaview\Model\GuestServiceV2ListGroupLinksRequest | 

try {
    $result = $apiInstance->listGroupLinks($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuestServiceApi->listGroupLinks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Alfaview\Model\GuestServiceV2ListGroupLinksRequest**](../Model/GuestServiceV2ListGroupLinksRequest.md)|  |

### Return type

[**\Alfaview\Model\GuestServiceV2ListGroupLinksReply**](../Model/GuestServiceV2ListGroupLinksReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listGuestLinks**
> \Alfaview\Model\GuestServiceV2ListGuestLinksReply listGuestLinks($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Alfaview\Api\GuestServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Alfaview\Model\GuestServiceV2ListGuestLinksRequest(); // \Alfaview\Model\GuestServiceV2ListGuestLinksRequest | 

try {
    $result = $apiInstance->listGuestLinks($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuestServiceApi->listGuestLinks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Alfaview\Model\GuestServiceV2ListGuestLinksRequest**](../Model/GuestServiceV2ListGuestLinksRequest.md)|  |

### Return type

[**\Alfaview\Model\GuestServiceV2ListGuestLinksReply**](../Model/GuestServiceV2ListGuestLinksReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resendGuestLinkEmail**
> \Alfaview\Model\GuestServiceV2ResendGuestLinkEmailReply resendGuestLinkEmail($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Alfaview\Api\GuestServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Alfaview\Model\GuestServiceV2ResendGuestLinkEmailRequest(); // \Alfaview\Model\GuestServiceV2ResendGuestLinkEmailRequest | 

try {
    $result = $apiInstance->resendGuestLinkEmail($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuestServiceApi->resendGuestLinkEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Alfaview\Model\GuestServiceV2ResendGuestLinkEmailRequest**](../Model/GuestServiceV2ResendGuestLinkEmailRequest.md)|  |

### Return type

[**\Alfaview\Model\GuestServiceV2ResendGuestLinkEmailReply**](../Model/GuestServiceV2ResendGuestLinkEmailReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **streamTaskProgress**
> \Alfaview\Model\StreamResultOfGuestServiceV2TaskProgressReply streamTaskProgress($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Alfaview\Api\GuestServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Alfaview\Model\GuestServiceV2TaskProgressRequest(); // \Alfaview\Model\GuestServiceV2TaskProgressRequest | 

try {
    $result = $apiInstance->streamTaskProgress($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuestServiceApi->streamTaskProgress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Alfaview\Model\GuestServiceV2TaskProgressRequest**](../Model/GuestServiceV2TaskProgressRequest.md)|  |

### Return type

[**\Alfaview\Model\StreamResultOfGuestServiceV2TaskProgressReply**](../Model/StreamResultOfGuestServiceV2TaskProgressReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateGroupLink**
> \Alfaview\Model\GuestServiceV2UpdateGroupLinkReply updateGroupLink($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Alfaview\Api\GuestServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Alfaview\Model\GuestServiceV2UpdateGroupLinkRequest(); // \Alfaview\Model\GuestServiceV2UpdateGroupLinkRequest | 

try {
    $result = $apiInstance->updateGroupLink($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuestServiceApi->updateGroupLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Alfaview\Model\GuestServiceV2UpdateGroupLinkRequest**](../Model/GuestServiceV2UpdateGroupLinkRequest.md)|  |

### Return type

[**\Alfaview\Model\GuestServiceV2UpdateGroupLinkReply**](../Model/GuestServiceV2UpdateGroupLinkReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateGuestLink**
> \Alfaview\Model\GuestServiceV2UpdateGuestLinkReply updateGuestLink($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Alfaview\Api\GuestServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Alfaview\Model\GuestServiceV2UpdateGuestLinkRequest(); // \Alfaview\Model\GuestServiceV2UpdateGuestLinkRequest | 

try {
    $result = $apiInstance->updateGuestLink($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuestServiceApi->updateGuestLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Alfaview\Model\GuestServiceV2UpdateGuestLinkRequest**](../Model/GuestServiceV2UpdateGuestLinkRequest.md)|  |

### Return type

[**\Alfaview\Model\GuestServiceV2UpdateGuestLinkReply**](../Model/GuestServiceV2UpdateGuestLinkReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

