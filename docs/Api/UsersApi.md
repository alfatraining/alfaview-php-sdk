# Alfaview\Client\UsersApi

All URIs are relative to https://apis.alfaview.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**inviteUser()**](UsersApi.md#inviteUser) | **POST** /v2/users/invitation | Invite User |
| [**listUsers()**](UsersApi.md#listUsers) | **GET** /v2/users | List users |


## `inviteUser()`

```php
inviteUser($user_invitation, $authorization)
```

Invite User

Invites a user to the company of the requester.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alfaview\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_invitation = new \Alfaview\Client\Model\UserInvitation(); // \Alfaview\Client\Model\UserInvitation | The user to invite.
$authorization = 'authorization_example'; // string | A valid access token (can be obtained by authenticating).

try {
    $apiInstance->inviteUser($user_invitation, $authorization);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->inviteUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_invitation** | [**\Alfaview\Client\Model\UserInvitation**](../Model/UserInvitation.md)| The user to invite. | |
| **authorization** | **string**| A valid access token (can be obtained by authenticating). | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listUsers()`

```php
listUsers($authorization, $email_address): \Alfaview\Client\Model\User[]
```

List users

Lists all users in the company.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alfaview\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string | A valid access token (can be obtained by authenticating).
$email_address = user@provider.com; // string | The email address of the user.

try {
    $result = $apiInstance->listUsers($authorization, $email_address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->listUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| A valid access token (can be obtained by authenticating). | [optional] |
| **email_address** | **string**| The email address of the user. | [optional] |

### Return type

[**\Alfaview\Client\Model\User[]**](../Model/User.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
