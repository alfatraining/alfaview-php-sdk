# Alfaview\Client\UsersApi

User endpoints

All URIs are relative to https://apis.alfaview.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteUser()**](UsersApi.md#deleteUser) | **DELETE** /v2/users/{id} | Delete User |
| [**getOwnCompany()**](UsersApi.md#getOwnCompany) | **GET** /v2/users/me/company | Get own company |
| [**getOwnUser()**](UsersApi.md#getOwnUser) | **GET** /v2/users/me | Get Own User |
| [**inviteUser()**](UsersApi.md#inviteUser) | **POST** /v2/users/invitation | Invite User |
| [**listUsers()**](UsersApi.md#listUsers) | **GET** /v2/users | List Users |
| [**updateUser()**](UsersApi.md#updateUser) | **PATCH** /v2/users | Update Own User |


## `deleteUser()`

```php
deleteUser($id)
```

Delete User

Deletes a user. If the user is logged in at the time of the deletion, it can take up to an hour until the user is fully unable to access any part of the system.  **Required permissions:** - deleting the caller's own user: none beyond the access token - deleting another user: user permission `userAdmin`  **Restrictions:** - guest access token: rejected

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (opaque) authorization: accessToken
$config = Alfaview\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alfaview\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The user ID.

try {
    $apiInstance->deleteUser($id);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->deleteUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The user ID. | |

### Return type

void (empty response body)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOwnCompany()`

```php
getOwnCompany(): \Alfaview\Client\Model\Company
```

Get own company

Returns the company of the requester.  **Required permissions:** - none beyond the access token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (opaque) authorization: accessToken
$config = Alfaview\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alfaview\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getOwnCompany();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getOwnCompany: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Alfaview\Client\Model\Company**](../Model/Company.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOwnUser()`

```php
getOwnUser(): \Alfaview\Client\Model\UserProfile
```

Get Own User

Returns the profile of the requesting user.  **Required permissions:** - none beyond the access token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (opaque) authorization: accessToken
$config = Alfaview\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alfaview\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getOwnUser();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getOwnUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Alfaview\Client\Model\UserProfile**](../Model/UserProfile.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `inviteUser()`

```php
inviteUser($user_invitation)
```

Invite User

Invites a user to the company of the requester.  **Required permissions:** - user permission `userAdmin`  **Restrictions:** - invited user: only user permissions that the caller holds

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (opaque) authorization: accessToken
$config = Alfaview\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alfaview\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_invitation = new \Alfaview\Client\Model\UserInvitation(); // \Alfaview\Client\Model\UserInvitation | The user to invite.

try {
    $apiInstance->inviteUser($user_invitation);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->inviteUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_invitation** | [**\Alfaview\Client\Model\UserInvitation**](../Model/UserInvitation.md)| The user to invite. | |

### Return type

void (empty response body)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listUsers()`

```php
listUsers($email_address): \Alfaview\Client\Model\User[]
```

List Users

Lists all users in the company.  **Required permissions:** - none beyond the access token  **Result:** - without `emailAddress`, with the user permission `userList` or `userAdmin`: all users of the company - without `emailAddress`, otherwise: only the caller's own user - with `emailAddress`, with the user permission `userAdmin`: the user with this email address - with `emailAddress`, otherwise: no user other than the caller  **Restrictions:** - guest access token with `emailAddress`: rejected

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (opaque) authorization: accessToken
$config = Alfaview\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alfaview\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email_address = 'email_address_example'; // string | The email address.

try {
    $result = $apiInstance->listUsers($email_address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->listUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email_address** | **string**| The email address. | [optional] |

### Return type

[**\Alfaview\Client\Model\User[]**](../Model/User.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateUser()`

```php
updateUser($user_update)
```

Update Own User

Updates the requester's user information.  **Required permissions:** - none beyond the access token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (opaque) authorization: accessToken
$config = Alfaview\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alfaview\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_update = new \Alfaview\Client\Model\UserUpdate(); // \Alfaview\Client\Model\UserUpdate | The updated user information.

try {
    $apiInstance->updateUser($user_update);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->updateUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_update** | [**\Alfaview\Client\Model\UserUpdate**](../Model/UserUpdate.md)| The updated user information. | |

### Return type

void (empty response body)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
