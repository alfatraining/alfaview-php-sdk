# Alfaview\AuthenticationServiceApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accessTokenInformation**](AuthenticationServiceApi.md#accessTokenInformation) | **POST** /accessTokenInformation | 
[**authenticate**](AuthenticationServiceApi.md#authenticate) | **POST** /authenticate | 
[**authenticationCreate**](AuthenticationServiceApi.md#authenticationCreate) | **POST** /authenticationCreate | 
[**authenticationInformation**](AuthenticationServiceApi.md#authenticationInformation) | **POST** /authenticationInformation | 
[**authenticationUpdate**](AuthenticationServiceApi.md#authenticationUpdate) | **POST** /authenticationUpdate | 
[**createMagicToken**](AuthenticationServiceApi.md#createMagicToken) | **POST** /createMagicToken | 
[**isAuthenticated**](AuthenticationServiceApi.md#isAuthenticated) | **POST** /isAuthenticated | 
[**listAuthentications**](AuthenticationServiceApi.md#listAuthentications) | **POST** /listAuthentications | 
[**listIdentityProviders**](AuthenticationServiceApi.md#listIdentityProviders) | **POST** /listIdentityProviders | 
[**migrateGuests**](AuthenticationServiceApi.md#migrateGuests) | **POST** /migrateGuests | 
[**requestPasswordReset**](AuthenticationServiceApi.md#requestPasswordReset) | **POST** /requestPasswordReset | 
[**sendCompanyDeletionEmail**](AuthenticationServiceApi.md#sendCompanyDeletionEmail) | **POST** /sendCompanyDeletionEmail | 
[**signAccessToken**](AuthenticationServiceApi.md#signAccessToken) | **POST** /signAccessToken | 


# **accessTokenInformation**
> \Alfaview\Model\AuthenticationAuthenticationReply accessTokenInformation($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Alfaview\Api\AuthenticationServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Alfaview\Model\AuthenticationAccessTokenInformationRequest(); // \Alfaview\Model\AuthenticationAccessTokenInformationRequest | 

try {
    $result = $apiInstance->accessTokenInformation($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationServiceApi->accessTokenInformation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Alfaview\Model\AuthenticationAccessTokenInformationRequest**](../Model/AuthenticationAccessTokenInformationRequest.md)|  |

### Return type

[**\Alfaview\Model\AuthenticationAuthenticationReply**](../Model/AuthenticationAuthenticationReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

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
$body = new \Alfaview\Model\AuthenticationAuthenticationRequest(); // \Alfaview\Model\AuthenticationAuthenticationRequest | * AuthenticationRequest contains everything needed to authenticate a user on our platform.

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
 **body** | [**\Alfaview\Model\AuthenticationAuthenticationRequest**](../Model/AuthenticationAuthenticationRequest.md)| * AuthenticationRequest contains everything needed to authenticate a user on our platform. |

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
$body = new \Alfaview\Model\AuthenticationAuthenticationCreateRequest(); // \Alfaview\Model\AuthenticationAuthenticationCreateRequest | AuthenticationCreateRequest carries all the required information to create authentication methods for a user. This is only used if the user ID is not known and should be picked by the authentication service, otherwise use the AuthenticationUpdateRequest.

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
 **body** | [**\Alfaview\Model\AuthenticationAuthenticationCreateRequest**](../Model/AuthenticationAuthenticationCreateRequest.md)| AuthenticationCreateRequest carries all the required information to create authentication methods for a user. This is only used if the user ID is not known and should be picked by the authentication service, otherwise use the AuthenticationUpdateRequest. |

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
$body = new \Alfaview\Model\AuthenticationAuthenticationInformationRequest(); // \Alfaview\Model\AuthenticationAuthenticationInformationRequest | * Use AuthenticationInformationRequest to find out about a user's authentication methods and their permissions.

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
 **body** | [**\Alfaview\Model\AuthenticationAuthenticationInformationRequest**](../Model/AuthenticationAuthenticationInformationRequest.md)| * Use AuthenticationInformationRequest to find out about a user&#39;s authentication methods and their permissions. |

### Return type

[**\Alfaview\Model\AuthenticationAuthenticationInformationReply**](../Model/AuthenticationAuthenticationInformationReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **authenticationUpdate**
> \Alfaview\Model\AuthenticationAuthenticationUpdateReply authenticationUpdate($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Alfaview\Api\AuthenticationServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Alfaview\Model\AuthenticationAuthenticationUpdateRequest(); // \Alfaview\Model\AuthenticationAuthenticationUpdateRequest | AuthenticationUpdateRequest carries all the required information on how to update a user's authentication methods.

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
 **body** | [**\Alfaview\Model\AuthenticationAuthenticationUpdateRequest**](../Model/AuthenticationAuthenticationUpdateRequest.md)| AuthenticationUpdateRequest carries all the required information on how to update a user&#39;s authentication methods. |

### Return type

[**\Alfaview\Model\AuthenticationAuthenticationUpdateReply**](../Model/AuthenticationAuthenticationUpdateReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createMagicToken**
> \Alfaview\Model\AuthenticationCreateMagicTokenReply createMagicToken($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Alfaview\Api\AuthenticationServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Alfaview\Model\AuthenticationCreateMagicTokenRequest(); // \Alfaview\Model\AuthenticationCreateMagicTokenRequest | * CreateMagicTokenRequest is used to create a magic token from a given access token (and possibly even a refresh token, see the description of the `refreshToken` field). A magic token created via such a request will be valid for a very short amount of time (minutes) and is one-time use only.

try {
    $result = $apiInstance->createMagicToken($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationServiceApi->createMagicToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Alfaview\Model\AuthenticationCreateMagicTokenRequest**](../Model/AuthenticationCreateMagicTokenRequest.md)| * CreateMagicTokenRequest is used to create a magic token from a given access token (and possibly even a refresh token, see the description of the &#x60;refreshToken&#x60; field). A magic token created via such a request will be valid for a very short amount of time (minutes) and is one-time use only. |

### Return type

[**\Alfaview\Model\AuthenticationCreateMagicTokenReply**](../Model/AuthenticationCreateMagicTokenReply.md)

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
$body = new \Alfaview\Model\AuthenticationListAuthenticationsRequest(); // \Alfaview\Model\AuthenticationListAuthenticationsRequest | * ListAuthenticationsRequest is used to list authentication methods. You may list by a variety of different attributes – these are also combinable, i.e. requesting the authentication methods of a list of user IDs of a specific key type in a specific state (pending/activated/locked). Depending on your permissions, some of these will be invalid or disallowed. For normal users only their own authentication methods will be returned (matching the user ID in their token).

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
 **body** | [**\Alfaview\Model\AuthenticationListAuthenticationsRequest**](../Model/AuthenticationListAuthenticationsRequest.md)| * ListAuthenticationsRequest is used to list authentication methods. You may list by a variety of different attributes – these are also combinable, i.e. requesting the authentication methods of a list of user IDs of a specific key type in a specific state (pending/activated/locked). Depending on your permissions, some of these will be invalid or disallowed. For normal users only their own authentication methods will be returned (matching the user ID in their token). |

### Return type

[**\Alfaview\Model\AuthenticationListAuthenticationsReply**](../Model/AuthenticationListAuthenticationsReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listIdentityProviders**
> \Alfaview\Model\AuthenticationListIdentityProvidersReply listIdentityProviders($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Alfaview\Api\AuthenticationServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Alfaview\Model\AuthenticationListIdentityProvidersRequest(); // \Alfaview\Model\AuthenticationListIdentityProvidersRequest | * ListIdentityProvidersRequest is used to query for all registered identity providers.

try {
    $result = $apiInstance->listIdentityProviders($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationServiceApi->listIdentityProviders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Alfaview\Model\AuthenticationListIdentityProvidersRequest**](../Model/AuthenticationListIdentityProvidersRequest.md)| * ListIdentityProvidersRequest is used to query for all registered identity providers. |

### Return type

[**\Alfaview\Model\AuthenticationListIdentityProvidersReply**](../Model/AuthenticationListIdentityProvidersReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **migrateGuests**
> \Alfaview\Model\AuthenticationMigrateGuestsReply migrateGuests($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Alfaview\Api\AuthenticationServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Alfaview\Model\AuthenticationMigrateGuestsRequest(); // \Alfaview\Model\AuthenticationMigrateGuestsRequest | * MigrateGuestsRequest requests to migrate all existing v1 guest and group links to the guestServiceV2. The access token must be transported via the `alfaview.token` header key. The value must be base64-encoded. The token must be equipped with common.MANAGE_COMPANY permissions.

try {
    $result = $apiInstance->migrateGuests($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationServiceApi->migrateGuests: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Alfaview\Model\AuthenticationMigrateGuestsRequest**](../Model/AuthenticationMigrateGuestsRequest.md)| * MigrateGuestsRequest requests to migrate all existing v1 guest and group links to the guestServiceV2. The access token must be transported via the &#x60;alfaview.token&#x60; header key. The value must be base64-encoded. The token must be equipped with common.MANAGE_COMPANY permissions. |

### Return type

[**\Alfaview\Model\AuthenticationMigrateGuestsReply**](../Model/AuthenticationMigrateGuestsReply.md)

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
$body = new \Alfaview\Model\AuthenticationPasswordResetRequest(); // \Alfaview\Model\AuthenticationPasswordResetRequest | * PasswordResetRequest is used to reset a user's password. Although it is an implementation detail it is encouraged to only return the password reset token in the response if the user doing the resetting (i.e. an admin user) is part of the same company as the user whose password is being reset. Otherwise, the authentication service should handle emailing the password reset token itself.

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
 **body** | [**\Alfaview\Model\AuthenticationPasswordResetRequest**](../Model/AuthenticationPasswordResetRequest.md)| * PasswordResetRequest is used to reset a user&#39;s password. Although it is an implementation detail it is encouraged to only return the password reset token in the response if the user doing the resetting (i.e. an admin user) is part of the same company as the user whose password is being reset. Otherwise, the authentication service should handle emailing the password reset token itself. |

### Return type

[**\Alfaview\Model\AuthenticationPasswordResetReply**](../Model/AuthenticationPasswordResetReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendCompanyDeletionEmail**
> \Alfaview\Model\AuthenticationSendCompanyDeletionEmailReply sendCompanyDeletionEmail($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Alfaview\Api\AuthenticationServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Alfaview\Model\AuthenticationSendCompanyDeletionEmailRequest(); // \Alfaview\Model\AuthenticationSendCompanyDeletionEmailRequest | * SendCompanyDeletionEmailRequest requests sending an email to the company owner to delete their company. The email will contain a link to delete the company via the alfaview web app. The requesting user must be the company owner.

try {
    $result = $apiInstance->sendCompanyDeletionEmail($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationServiceApi->sendCompanyDeletionEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Alfaview\Model\AuthenticationSendCompanyDeletionEmailRequest**](../Model/AuthenticationSendCompanyDeletionEmailRequest.md)| * SendCompanyDeletionEmailRequest requests sending an email to the company owner to delete their company. The email will contain a link to delete the company via the alfaview web app. The requesting user must be the company owner. |

### Return type

[**\Alfaview\Model\AuthenticationSendCompanyDeletionEmailReply**](../Model/AuthenticationSendCompanyDeletionEmailReply.md)

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
$body = new \Alfaview\Model\AuthenticationSignAccessTokenRequest(); // \Alfaview\Model\AuthenticationSignAccessTokenRequest | * SignAccessTokenRequest is used to sign credentials without authenticating.

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
 **body** | [**\Alfaview\Model\AuthenticationSignAccessTokenRequest**](../Model/AuthenticationSignAccessTokenRequest.md)| * SignAccessTokenRequest is used to sign credentials without authenticating. |

### Return type

[**\Alfaview\Model\AuthenticationAuthenticationReply**](../Model/AuthenticationAuthenticationReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

