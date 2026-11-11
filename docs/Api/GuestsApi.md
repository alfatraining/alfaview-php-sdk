# Alfaview\Client\GuestsApi

Guest endpoints

All URIs are relative to https://apis.alfaview.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**authenticateGroupLink()**](GuestsApi.md#authenticateGroupLink) | **POST** /v2/auth/group-link | Authenticate a Guest (Group Link) |
| [**authenticateGuestLink()**](GuestsApi.md#authenticateGuestLink) | **POST** /v2/auth/guest-link | Authenticate a Guest (Guest Link) |
| [**createGroupLink()**](GuestsApi.md#createGroupLink) | **POST** /v2/rooms/{roomId}/group-links | Create Group Links |
| [**createGuestLinks()**](GuestsApi.md#createGuestLinks) | **POST** /v2/rooms/{roomId}/guest-links | Create Guest Links |
| [**deleteGroupLink()**](GuestsApi.md#deleteGroupLink) | **DELETE** /v2/rooms/{roomId}/group-links/{id} | Delete Group Link |
| [**deleteGuestLink()**](GuestsApi.md#deleteGuestLink) | **DELETE** /v2/rooms/{roomId}/guest-links/{id} | Delete Guest Link |
| [**getGroupLink()**](GuestsApi.md#getGroupLink) | **GET** /v2/group-links/{id} | Get Group Link |
| [**getGuestLink()**](GuestsApi.md#getGuestLink) | **GET** /v2/guest-links/{id} | Get Guest Link |
| [**listGroupLinks()**](GuestsApi.md#listGroupLinks) | **GET** /v2/group-links | List Group Links |
| [**listGroupLinksForRoom()**](GuestsApi.md#listGroupLinksForRoom) | **GET** /v2/rooms/{roomId}/group-links | List Group Links for Room |
| [**listGuestLinks()**](GuestsApi.md#listGuestLinks) | **GET** /v2/guest-links | List Guest Links |
| [**listGuestLinksForRoom()**](GuestsApi.md#listGuestLinksForRoom) | **GET** /v2/rooms/{roomId}/guest-links | List Guest Links for a Room |
| [**updateGroupLink()**](GuestsApi.md#updateGroupLink) | **PATCH** /v2/group-links/{id} | Update Group Link |
| [**updateGuestLink()**](GuestsApi.md#updateGuestLink) | **PATCH** /v2/guest-links/{id} | Update Guest Link |


## `authenticateGroupLink()`

```php
authenticateGroupLink($authenticate_group_link_request_body): \Alfaview\Client\Model\GroupLinkAuthenticationInfo
```

Authenticate a Guest (Group Link)

Tries to authenticate a group link guest via access key. If the access key exists, information about the guest's authentication are returned. If the access key is also valid at the time of the request, the response additionally includes an access token and a token expiry time.  **Required permissions:** - none

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alfaview\Client\Api\GuestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authenticate_group_link_request_body = new \Alfaview\Client\Model\AuthenticateGroupLinkRequestBody(); // \Alfaview\Client\Model\AuthenticateGroupLinkRequestBody | The authentication information for the guest.

try {
    $result = $apiInstance->authenticateGroupLink($authenticate_group_link_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuestsApi->authenticateGroupLink: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `authenticateGuestLink()`

```php
authenticateGuestLink($authenticate_guest_link_request_body): \Alfaview\Client\Model\GuestLinkAuthenticationInfo
```

Authenticate a Guest (Guest Link)

Tries to authenticate a guest link guest via access key. If the access key exists, information about the guest's authentication are returned. If the access key is also valid at the time of the request, the response additionally includes an access token and a token expiry time.  **Required permissions:** - none

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alfaview\Client\Api\GuestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authenticate_guest_link_request_body = new \Alfaview\Client\Model\AuthenticateGuestLinkRequestBody(); // \Alfaview\Client\Model\AuthenticateGuestLinkRequestBody | The authentication information for the guest.

try {
    $result = $apiInstance->authenticateGuestLink($authenticate_guest_link_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuestsApi->authenticateGuestLink: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createGroupLink()`

```php
createGroupLink($room_id, $create_group_links_request_body): \Alfaview\Client\Model\ID[]
```

Create Group Links

Creates group links for a room.  **Required permissions:** - normal room: one of user permission `roomAdmin` or room permission `admin` in the room - meeting room: the caller must be the meeting's creator

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (opaque) authorization: accessToken
$config = Alfaview\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alfaview\Client\Api\GuestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$room_id = 'room_id_example'; // string | The room ID.
$create_group_links_request_body = new \Alfaview\Client\Model\CreateGroupLinksRequestBody(); // \Alfaview\Client\Model\CreateGroupLinksRequestBody | The group links to create.

try {
    $result = $apiInstance->createGroupLink($room_id, $create_group_links_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuestsApi->createGroupLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **room_id** | **string**| The room ID. | |
| **create_group_links_request_body** | [**\Alfaview\Client\Model\CreateGroupLinksRequestBody**](../Model/CreateGroupLinksRequestBody.md)| The group links to create. | |

### Return type

[**\Alfaview\Client\Model\ID[]**](../Model/ID.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createGuestLinks()`

```php
createGuestLinks($room_id, $create_guest_links_request_body): \Alfaview\Client\Model\GuestLink[]
```

Create Guest Links

Creates guest links for a room.  **Required permissions:** - normal room: one of user permission `roomAdmin` or room permission `admin` in the room - meeting room: the caller must be the meeting's creator

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (opaque) authorization: accessToken
$config = Alfaview\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alfaview\Client\Api\GuestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$room_id = 'room_id_example'; // string | The room ID.
$create_guest_links_request_body = new \Alfaview\Client\Model\CreateGuestLinksRequestBody(); // \Alfaview\Client\Model\CreateGuestLinksRequestBody | The guest links to create.

try {
    $result = $apiInstance->createGuestLinks($room_id, $create_guest_links_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuestsApi->createGuestLinks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **room_id** | **string**| The room ID. | |
| **create_guest_links_request_body** | [**\Alfaview\Client\Model\CreateGuestLinksRequestBody**](../Model/CreateGuestLinksRequestBody.md)| The guest links to create. | |

### Return type

[**\Alfaview\Client\Model\GuestLink[]**](../Model/GuestLink.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteGroupLink()`

```php
deleteGroupLink($id, $room_id)
```

Delete Group Link

Deletes a group link.  **Required permissions:** - normal room: one of user permission `roomAdmin` or room permission `admin` in the room - meeting room: the caller must be the meeting's creator.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (opaque) authorization: accessToken
$config = Alfaview\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alfaview\Client\Api\GuestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The group link ID.
$room_id = 'room_id_example'; // string | The room ID.

try {
    $apiInstance->deleteGroupLink($id, $room_id);
} catch (Exception $e) {
    echo 'Exception when calling GuestsApi->deleteGroupLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The group link ID. | |
| **room_id** | **string**| The room ID. | |

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

## `deleteGuestLink()`

```php
deleteGuestLink($id, $room_id)
```

Delete Guest Link

Deletes a guest link.  **Required permissions:** - normal room: one of user permission `roomAdmin` or room permission `admin` in the room - meeting room: the caller must be the meeting's creator.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (opaque) authorization: accessToken
$config = Alfaview\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alfaview\Client\Api\GuestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The guest link ID.
$room_id = 'room_id_example'; // string | The room ID.

try {
    $apiInstance->deleteGuestLink($id, $room_id);
} catch (Exception $e) {
    echo 'Exception when calling GuestsApi->deleteGuestLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The guest link ID. | |
| **room_id** | **string**| The room ID. | |

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

## `getGroupLink()`

```php
getGroupLink($id): \Alfaview\Client\Model\GroupLink
```

Get Group Link

Gets a single group link.  **Required permissions:** - normal room: one of user permission `roomAdmin` or room permission `admin` in the room - meeting room: the caller must be the meeting's creator

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (opaque) authorization: accessToken
$config = Alfaview\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alfaview\Client\Api\GuestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The group link ID.

try {
    $result = $apiInstance->getGroupLink($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuestsApi->getGroupLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The group link ID. | |

### Return type

[**\Alfaview\Client\Model\GroupLink**](../Model/GroupLink.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGuestLink()`

```php
getGuestLink($id): \Alfaview\Client\Model\GuestLink
```

Get Guest Link

Gets a single guest link.  **Required permissions:** - normal room: one of user permission `roomAdmin` or room permission `admin` in the room - meeting room: the caller must be the meeting's creator

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (opaque) authorization: accessToken
$config = Alfaview\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alfaview\Client\Api\GuestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The guest link ID.

try {
    $result = $apiInstance->getGuestLink($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuestsApi->getGuestLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The guest link ID. | |

### Return type

[**\Alfaview\Client\Model\GuestLink**](../Model/GuestLink.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listGroupLinks()`

```php
listGroupLinks($page_token, $limit): \Alfaview\Client\Model\PaginatedBodyListGroupLink
```

List Group Links

Lists group links.  **Required permissions** (all of): - user permission `roomList` - user permission `roomAdmin`  **Result:** - all group links of the company, except the links of meetings that the caller did not create

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (opaque) authorization: accessToken
$config = Alfaview\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alfaview\Client\Api\GuestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_token = 'page_token_example'; // string | For pagination: Pass the nextPageToken from the last successful request to obtain the next page. Omit on first request.
$limit = 100; // int | For pagination: Limit the number of returned group links.

try {
    $result = $apiInstance->listGroupLinks($page_token, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuestsApi->listGroupLinks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_token** | **string**| For pagination: Pass the nextPageToken from the last successful request to obtain the next page. Omit on first request. | [optional] |
| **limit** | **int**| For pagination: Limit the number of returned group links. | [optional] [default to 100] |

### Return type

[**\Alfaview\Client\Model\PaginatedBodyListGroupLink**](../Model/PaginatedBodyListGroupLink.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listGroupLinksForRoom()`

```php
listGroupLinksForRoom($room_id, $page_token, $limit): \Alfaview\Client\Model\PaginatedBodyListGroupLink
```

List Group Links for Room

Lists group links for a room.  **Required permissions:** - normal room: one of user permission `roomAdmin` or room permission `admin` in the room - meeting room: the caller must be the meeting's creator

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (opaque) authorization: accessToken
$config = Alfaview\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alfaview\Client\Api\GuestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$room_id = 'room_id_example'; // string | The room ID.
$page_token = 'page_token_example'; // string | For pagination: Pass the nextPageToken from the last successful request to obtain the next page. Omit on first request.
$limit = 100; // int | For pagination: Limit the number of returned group links.

try {
    $result = $apiInstance->listGroupLinksForRoom($room_id, $page_token, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuestsApi->listGroupLinksForRoom: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **room_id** | **string**| The room ID. | |
| **page_token** | **string**| For pagination: Pass the nextPageToken from the last successful request to obtain the next page. Omit on first request. | [optional] |
| **limit** | **int**| For pagination: Limit the number of returned group links. | [optional] [default to 100] |

### Return type

[**\Alfaview\Client\Model\PaginatedBodyListGroupLink**](../Model/PaginatedBodyListGroupLink.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listGuestLinks()`

```php
listGuestLinks($page_token, $limit): \Alfaview\Client\Model\PaginatedBodyListGuestLink
```

List Guest Links

Lists guest links.  **Required permissions** (all of): - user permission `roomList` - user permission `roomAdmin`  **Result:** - all guest links of the company, except the links of meetings that the caller did not create

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (opaque) authorization: accessToken
$config = Alfaview\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alfaview\Client\Api\GuestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_token = 'page_token_example'; // string | For pagination: Pass the nextPageToken from the last successful request to obtain the next page. Omit on first request.
$limit = 100; // int | For pagination: Limit the number of returned guest links.

try {
    $result = $apiInstance->listGuestLinks($page_token, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuestsApi->listGuestLinks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_token** | **string**| For pagination: Pass the nextPageToken from the last successful request to obtain the next page. Omit on first request. | [optional] |
| **limit** | **int**| For pagination: Limit the number of returned guest links. | [optional] [default to 100] |

### Return type

[**\Alfaview\Client\Model\PaginatedBodyListGuestLink**](../Model/PaginatedBodyListGuestLink.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listGuestLinksForRoom()`

```php
listGuestLinksForRoom($room_id, $page_token, $limit): \Alfaview\Client\Model\PaginatedBodyListGuestLink
```

List Guest Links for a Room

Lists guest links for a room.  **Required permissions:** - normal room: one of user permission `roomAdmin` or room permission `admin` in the room - meeting room: the caller must be the meeting's creator

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (opaque) authorization: accessToken
$config = Alfaview\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alfaview\Client\Api\GuestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$room_id = 'room_id_example'; // string | The room ID.
$page_token = 'page_token_example'; // string | For pagination: Pass the nextPageToken from the last successful request to obtain the next page. Omit on first request.
$limit = 100; // int | For pagination: Limit the number of returned guest links.

try {
    $result = $apiInstance->listGuestLinksForRoom($room_id, $page_token, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuestsApi->listGuestLinksForRoom: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **room_id** | **string**| The room ID. | |
| **page_token** | **string**| For pagination: Pass the nextPageToken from the last successful request to obtain the next page. Omit on first request. | [optional] |
| **limit** | **int**| For pagination: Limit the number of returned guest links. | [optional] [default to 100] |

### Return type

[**\Alfaview\Client\Model\PaginatedBodyListGuestLink**](../Model/PaginatedBodyListGuestLink.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateGroupLink()`

```php
updateGroupLink($id, $group_link_update)
```

Update Group Link

Updates a group link.  **Required permissions:** - normal room: one of user permission `roomAdmin` or room permission `admin` in the room - meeting room: the caller must be the meeting's creator

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (opaque) authorization: accessToken
$config = Alfaview\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alfaview\Client\Api\GuestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The group link ID.
$group_link_update = new \Alfaview\Client\Model\GroupLinkUpdate(); // \Alfaview\Client\Model\GroupLinkUpdate | The updated group link.

try {
    $apiInstance->updateGroupLink($id, $group_link_update);
} catch (Exception $e) {
    echo 'Exception when calling GuestsApi->updateGroupLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The group link ID. | |
| **group_link_update** | [**\Alfaview\Client\Model\GroupLinkUpdate**](../Model/GroupLinkUpdate.md)| The updated group link. | |

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

## `updateGuestLink()`

```php
updateGuestLink($id, $guest_link_update)
```

Update Guest Link

Updates a guest link.  **Required permissions:** - normal room: one of user permission `roomAdmin` or room permission `admin` in the room - meeting room: the caller must be the meeting's creator

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (opaque) authorization: accessToken
$config = Alfaview\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Alfaview\Client\Api\GuestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The guest link ID.
$guest_link_update = new \Alfaview\Client\Model\GuestLinkUpdate(); // \Alfaview\Client\Model\GuestLinkUpdate | The updated guest link.

try {
    $apiInstance->updateGuestLink($id, $guest_link_update);
} catch (Exception $e) {
    echo 'Exception when calling GuestsApi->updateGuestLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The guest link ID. | |
| **guest_link_update** | [**\Alfaview\Client\Model\GuestLinkUpdate**](../Model/GuestLinkUpdate.md)| The updated guest link. | |

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
