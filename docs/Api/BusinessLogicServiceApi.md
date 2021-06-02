# Alfaview\BusinessLogicServiceApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**companyDestroy**](BusinessLogicServiceApi.md#companyDestroy) | **POST** /companies/destroy | 
[**companySignup**](BusinessLogicServiceApi.md#companySignup) | **POST** /companies/signup | 
[**createCompany**](BusinessLogicServiceApi.md#createCompany) | **POST** /companies/create | 
[**externalMembersInvite**](BusinessLogicServiceApi.md#externalMembersInvite) | **POST** /inviteExternalMembers | 
[**favoritesList**](BusinessLogicServiceApi.md#favoritesList) | **POST** /favorites/list | 
[**favoritesUpdate**](BusinessLogicServiceApi.md#favoritesUpdate) | **POST** /favorites/update | 
[**inviteUsers**](BusinessLogicServiceApi.md#inviteUsers) | **POST** /inviteUsers | 
[**permissionGroupsList**](BusinessLogicServiceApi.md#permissionGroupsList) | **POST** /permissionGroups/list | 
[**permissionGroupsUpdate**](BusinessLogicServiceApi.md#permissionGroupsUpdate) | **POST** /permissionGroups/update | 
[**sendEmail**](BusinessLogicServiceApi.md#sendEmail) | **POST** /sendEmail | 
[**streamTaskProgress**](BusinessLogicServiceApi.md#streamTaskProgress) | **POST** /streamTaskProgress | 


# **companyDestroy**
> \Alfaview\Model\BusinessLogicServiceCompanyDestroyReply companyDestroy($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Alfaview\Api\BusinessLogicServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Alfaview\Model\BusinessLogicServiceCompanyDestroyRequest(); // \Alfaview\Model\BusinessLogicServiceCompanyDestroyRequest | 

try {
    $result = $apiInstance->companyDestroy($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessLogicServiceApi->companyDestroy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Alfaview\Model\BusinessLogicServiceCompanyDestroyRequest**](../Model/BusinessLogicServiceCompanyDestroyRequest.md)|  |

### Return type

[**\Alfaview\Model\BusinessLogicServiceCompanyDestroyReply**](../Model/BusinessLogicServiceCompanyDestroyReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companySignup**
> \Alfaview\Model\BusinessLogicServiceCompanySignupReply companySignup($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Alfaview\Api\BusinessLogicServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Alfaview\Model\BusinessLogicServiceCompanySignupRequest(); // \Alfaview\Model\BusinessLogicServiceCompanySignupRequest | 

try {
    $result = $apiInstance->companySignup($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessLogicServiceApi->companySignup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Alfaview\Model\BusinessLogicServiceCompanySignupRequest**](../Model/BusinessLogicServiceCompanySignupRequest.md)|  |

### Return type

[**\Alfaview\Model\BusinessLogicServiceCompanySignupReply**](../Model/BusinessLogicServiceCompanySignupReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createCompany**
> \Alfaview\Model\BusinessLogicServiceCompanyCreateReply createCompany($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Alfaview\Api\BusinessLogicServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Alfaview\Model\BusinessLogicServiceCompanyCreateRequest(); // \Alfaview\Model\BusinessLogicServiceCompanyCreateRequest | 

try {
    $result = $apiInstance->createCompany($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessLogicServiceApi->createCompany: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Alfaview\Model\BusinessLogicServiceCompanyCreateRequest**](../Model/BusinessLogicServiceCompanyCreateRequest.md)|  |

### Return type

[**\Alfaview\Model\BusinessLogicServiceCompanyCreateReply**](../Model/BusinessLogicServiceCompanyCreateReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **externalMembersInvite**
> \Alfaview\Model\BusinessLogicServiceInviteExternalMembersReply externalMembersInvite($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Alfaview\Api\BusinessLogicServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Alfaview\Model\BusinessLogicServiceInviteExternalMembersRequest(); // \Alfaview\Model\BusinessLogicServiceInviteExternalMembersRequest | 

try {
    $result = $apiInstance->externalMembersInvite($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessLogicServiceApi->externalMembersInvite: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Alfaview\Model\BusinessLogicServiceInviteExternalMembersRequest**](../Model/BusinessLogicServiceInviteExternalMembersRequest.md)|  |

### Return type

[**\Alfaview\Model\BusinessLogicServiceInviteExternalMembersReply**](../Model/BusinessLogicServiceInviteExternalMembersReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **favoritesList**
> \Alfaview\Model\BusinessLogicServiceFavoritesListReply favoritesList($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Alfaview\Api\BusinessLogicServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Alfaview\Model\BusinessLogicServiceFavoritesListRequest(); // \Alfaview\Model\BusinessLogicServiceFavoritesListRequest | 

try {
    $result = $apiInstance->favoritesList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessLogicServiceApi->favoritesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Alfaview\Model\BusinessLogicServiceFavoritesListRequest**](../Model/BusinessLogicServiceFavoritesListRequest.md)|  |

### Return type

[**\Alfaview\Model\BusinessLogicServiceFavoritesListReply**](../Model/BusinessLogicServiceFavoritesListReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **favoritesUpdate**
> \Alfaview\Model\BusinessLogicServiceFavoritesUpdateReply favoritesUpdate($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Alfaview\Api\BusinessLogicServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Alfaview\Model\BusinessLogicServiceFavoritesUpdateRequest(); // \Alfaview\Model\BusinessLogicServiceFavoritesUpdateRequest | 

try {
    $result = $apiInstance->favoritesUpdate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessLogicServiceApi->favoritesUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Alfaview\Model\BusinessLogicServiceFavoritesUpdateRequest**](../Model/BusinessLogicServiceFavoritesUpdateRequest.md)|  |

### Return type

[**\Alfaview\Model\BusinessLogicServiceFavoritesUpdateReply**](../Model/BusinessLogicServiceFavoritesUpdateReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inviteUsers**
> \Alfaview\Model\BusinessLogicServiceInviteUsersReply inviteUsers($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Alfaview\Api\BusinessLogicServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Alfaview\Model\BusinessLogicServiceInviteUsersRequest(); // \Alfaview\Model\BusinessLogicServiceInviteUsersRequest | 

try {
    $result = $apiInstance->inviteUsers($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessLogicServiceApi->inviteUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Alfaview\Model\BusinessLogicServiceInviteUsersRequest**](../Model/BusinessLogicServiceInviteUsersRequest.md)|  |

### Return type

[**\Alfaview\Model\BusinessLogicServiceInviteUsersReply**](../Model/BusinessLogicServiceInviteUsersReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **permissionGroupsList**
> \Alfaview\Model\BusinessLogicServiceCompanyPermissionGroupsListReply permissionGroupsList($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Alfaview\Api\BusinessLogicServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Alfaview\Model\BusinessLogicServiceCompanyPermissionGroupsListRequest(); // \Alfaview\Model\BusinessLogicServiceCompanyPermissionGroupsListRequest | 

try {
    $result = $apiInstance->permissionGroupsList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessLogicServiceApi->permissionGroupsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Alfaview\Model\BusinessLogicServiceCompanyPermissionGroupsListRequest**](../Model/BusinessLogicServiceCompanyPermissionGroupsListRequest.md)|  |

### Return type

[**\Alfaview\Model\BusinessLogicServiceCompanyPermissionGroupsListReply**](../Model/BusinessLogicServiceCompanyPermissionGroupsListReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **permissionGroupsUpdate**
> \Alfaview\Model\BusinessLogicServiceCompanyPermissionGroupsUpdateReply permissionGroupsUpdate($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Alfaview\Api\BusinessLogicServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Alfaview\Model\BusinessLogicServiceCompanyPermissionGroupsUpdateRequest(); // \Alfaview\Model\BusinessLogicServiceCompanyPermissionGroupsUpdateRequest | 

try {
    $result = $apiInstance->permissionGroupsUpdate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessLogicServiceApi->permissionGroupsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Alfaview\Model\BusinessLogicServiceCompanyPermissionGroupsUpdateRequest**](../Model/BusinessLogicServiceCompanyPermissionGroupsUpdateRequest.md)|  |

### Return type

[**\Alfaview\Model\BusinessLogicServiceCompanyPermissionGroupsUpdateReply**](../Model/BusinessLogicServiceCompanyPermissionGroupsUpdateReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendEmail**
> \Alfaview\Model\BusinessLogicServiceSendEmailReply sendEmail($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Alfaview\Api\BusinessLogicServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Alfaview\Model\BusinessLogicServiceSendEmailRequest(); // \Alfaview\Model\BusinessLogicServiceSendEmailRequest | 

try {
    $result = $apiInstance->sendEmail($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessLogicServiceApi->sendEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Alfaview\Model\BusinessLogicServiceSendEmailRequest**](../Model/BusinessLogicServiceSendEmailRequest.md)|  |

### Return type

[**\Alfaview\Model\BusinessLogicServiceSendEmailReply**](../Model/BusinessLogicServiceSendEmailReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **streamTaskProgress**
> \Alfaview\Model\StreamResultOfBusinessLogicServiceTaskProgressReply streamTaskProgress($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Alfaview\Api\BusinessLogicServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Alfaview\Model\BusinessLogicServiceTaskProgressRequest(); // \Alfaview\Model\BusinessLogicServiceTaskProgressRequest | 

try {
    $result = $apiInstance->streamTaskProgress($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessLogicServiceApi->streamTaskProgress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Alfaview\Model\BusinessLogicServiceTaskProgressRequest**](../Model/BusinessLogicServiceTaskProgressRequest.md)|  |

### Return type

[**\Alfaview\Model\StreamResultOfBusinessLogicServiceTaskProgressReply**](../Model/StreamResultOfBusinessLogicServiceTaskProgressReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

