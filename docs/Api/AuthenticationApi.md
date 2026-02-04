# Alfaview\Client\AuthenticationApi

All URIs are relative to https://apis.alfaview.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**authenticateAPIKey()**](AuthenticationApi.md#authenticateAPIKey) | **POST** /v2/auth/api-key | Authenticate via API Key |
| [**authenticateGroupLink()**](AuthenticationApi.md#authenticateGroupLink) | **POST** /v2/auth/group-link | Authenticate a Guest (Group Link) |
| [**authenticateGuestLink()**](AuthenticationApi.md#authenticateGuestLink) | **POST** /v2/auth/guest-link | Authenticate a Guest (Guest Link) |
| [**authenticatePassword()**](AuthenticationApi.md#authenticatePassword) | **POST** /v2/auth/password | Authenticate via Password |
| [**getTokenInfo()**](AuthenticationApi.md#getTokenInfo) | **GET** /v2/auth/token-info | Get Access Token Information |


## `authenticateAPIKey()`

```php
authenticateAPIKey($api_credentials): \Alfaview\Client\Model\AccessToken
```

Authenticate via API Key

Authenticates via an API key. Refer to the [related support article](https://support.alfaview.com/en/developers/request-your-api-credentials/) to generate one.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alfaview\Client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_credentials = new \Alfaview\Client\Model\APICredentials(); // \Alfaview\Client\Model\APICredentials | The API credentials to authenticate.

try {
    $result = $apiInstance->authenticateAPIKey($api_credentials);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->authenticateAPIKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_credentials** | [**\Alfaview\Client\Model\APICredentials**](../Model/APICredentials.md)| The API credentials to authenticate. | |

### Return type

[**\Alfaview\Client\Model\AccessToken**](../Model/AccessToken.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `authenticateGroupLink()`

```php
authenticateGroupLink($authenticate_group_link_request_body): \Alfaview\Client\Model\GroupLinkAuthenticationInfo
```

Authenticate a Guest (Group Link)

Tries to authenticate a group-link guest via access key. If the access key exists, information about the guest's authentication are returned. If the access key is also valid at the time of the request, the response additionally includes an access token and a token expiry time.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alfaview\Client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authenticate_group_link_request_body = new \Alfaview\Client\Model\AuthenticateGroupLinkRequestBody(); // \Alfaview\Client\Model\AuthenticateGroupLinkRequestBody | The authentication information for the guest.

try {
    $result = $apiInstance->authenticateGroupLink($authenticate_group_link_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->authenticateGroupLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authenticate_group_link_request_body** | [**\Alfaview\Client\Model\AuthenticateGroupLinkRequestBody**](../Model/AuthenticateGroupLinkRequestBody.md)| The authentication information for the guest. | |

### Return type

[**\Alfaview\Client\Model\GroupLinkAuthenticationInfo**](../Model/GroupLinkAuthenticationInfo.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `authenticateGuestLink()`

```php
authenticateGuestLink($authenticate_guest_link_request_body): \Alfaview\Client\Model\GuestLinkAuthenticationInfo
```

Authenticate a Guest (Guest Link)

Tries to authenticate a guest-link guest via access key. If the access key exists, information about the guest's authentication are returned. If the access key is also valid at the time of the request, the response additionally includes an access token and a token expiry time.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alfaview\Client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authenticate_guest_link_request_body = new \Alfaview\Client\Model\AuthenticateGuestLinkRequestBody(); // \Alfaview\Client\Model\AuthenticateGuestLinkRequestBody | The authentication information for the guest.

try {
    $result = $apiInstance->authenticateGuestLink($authenticate_guest_link_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->authenticateGuestLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authenticate_guest_link_request_body** | [**\Alfaview\Client\Model\AuthenticateGuestLinkRequestBody**](../Model/AuthenticateGuestLinkRequestBody.md)| The authentication information for the guest. | |

### Return type

[**\Alfaview\Client\Model\GuestLinkAuthenticationInfo**](../Model/GuestLinkAuthenticationInfo.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `authenticatePassword()`

```php
authenticatePassword($password_credentials): \Alfaview\Client\Model\AccessToken
```

Authenticate via Password

Authenticates a user via username and password and returns an access token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alfaview\Client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$password_credentials = new \Alfaview\Client\Model\PasswordCredentials(); // \Alfaview\Client\Model\PasswordCredentials | The user credentials to authenticate.

try {
    $result = $apiInstance->authenticatePassword($password_credentials);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->authenticatePassword: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **password_credentials** | [**\Alfaview\Client\Model\PasswordCredentials**](../Model/PasswordCredentials.md)| The user credentials to authenticate. | |

### Return type

[**\Alfaview\Client\Model\AccessToken**](../Model/AccessToken.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTokenInfo()`

```php
getTokenInfo($authorization): \Alfaview\Client\Model\TokenInfo
```

Get Access Token Information

Retrieves details of the access token provided in the Authorization header.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alfaview\Client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string | A valid access token (can be obtained by authenticating).

try {
    $result = $apiInstance->getTokenInfo($authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->getTokenInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| A valid access token (can be obtained by authenticating). | [optional] |

### Return type

[**\Alfaview\Client\Model\TokenInfo**](../Model/TokenInfo.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
