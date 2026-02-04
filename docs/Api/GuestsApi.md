# Alfaview\Client\GuestsApi

All URIs are relative to https://apis.alfaview.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
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


## `createGroupLink()`

```php
createGroupLink($room_id, $create_group_links_request_body, $authorization): \Alfaview\Client\Model\ID[]
```

Create Group Links

Creates group links for a room.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alfaview\Client\Api\GuestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$room_id = 00000000-0000-0000-0000-000000000000; // string | The room ID for the group links.
$create_group_links_request_body = new \Alfaview\Client\Model\CreateGroupLinksRequestBody(); // \Alfaview\Client\Model\CreateGroupLinksRequestBody
$authorization = 'authorization_example'; // string | A valid access token (can be obtained by authenticating).

try {
    $result = $apiInstance->createGroupLink($room_id, $create_group_links_request_body, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuestsApi->createGroupLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **room_id** | **string**| The room ID for the group links. | |
| **create_group_links_request_body** | [**\Alfaview\Client\Model\CreateGroupLinksRequestBody**](../Model/CreateGroupLinksRequestBody.md)|  | |
| **authorization** | **string**| A valid access token (can be obtained by authenticating). | [optional] |

### Return type

[**\Alfaview\Client\Model\ID[]**](../Model/ID.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createGuestLinks()`

```php
createGuestLinks($room_id, $create_guest_links_request_body, $authorization): \Alfaview\Client\Model\ID[]
```

Create Guest Links

Creates guest links for a room.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alfaview\Client\Api\GuestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$room_id = 00000000-0000-0000-0000-000000000000; // string | The room ID for the guest link.
$create_guest_links_request_body = new \Alfaview\Client\Model\CreateGuestLinksRequestBody(); // \Alfaview\Client\Model\CreateGuestLinksRequestBody
$authorization = 'authorization_example'; // string | A valid access token (can be obtained by authenticating).

try {
    $result = $apiInstance->createGuestLinks($room_id, $create_guest_links_request_body, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuestsApi->createGuestLinks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **room_id** | **string**| The room ID for the guest link. | |
| **create_guest_links_request_body** | [**\Alfaview\Client\Model\CreateGuestLinksRequestBody**](../Model/CreateGuestLinksRequestBody.md)|  | |
| **authorization** | **string**| A valid access token (can be obtained by authenticating). | [optional] |

### Return type

[**\Alfaview\Client\Model\ID[]**](../Model/ID.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteGroupLink()`

```php
deleteGroupLink($id, $room_id, $authorization)
```

Delete Group Link

Deletes a group link.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alfaview\Client\Api\GuestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 00000000-0000-0000-0000-000000000000; // string | The ID of the group link to delete.
$room_id = 00000000-0000-0000-0000-000000000000; // string | The ID of the room of the group link.
$authorization = 'authorization_example'; // string | A valid access token (can be obtained by authenticating).

try {
    $apiInstance->deleteGroupLink($id, $room_id, $authorization);
} catch (Exception $e) {
    echo 'Exception when calling GuestsApi->deleteGroupLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the group link to delete. | |
| **room_id** | **string**| The ID of the room of the group link. | |
| **authorization** | **string**| A valid access token (can be obtained by authenticating). | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteGuestLink()`

```php
deleteGuestLink($id, $room_id, $authorization)
```

Delete Guest Link

Deletes a guest link.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alfaview\Client\Api\GuestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 00000000-0000-0000-0000-000000000000; // string | The ID of the guest link to delete.
$room_id = 00000000-0000-0000-0000-000000000000; // string | The ID of the room of the guest link.
$authorization = 'authorization_example'; // string | A valid access token (can be obtained by authenticating).

try {
    $apiInstance->deleteGuestLink($id, $room_id, $authorization);
} catch (Exception $e) {
    echo 'Exception when calling GuestsApi->deleteGuestLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the guest link to delete. | |
| **room_id** | **string**| The ID of the room of the guest link. | |
| **authorization** | **string**| A valid access token (can be obtained by authenticating). | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroupLink()`

```php
getGroupLink($id, $authorization): \Alfaview\Client\Model\GroupLink
```

Get Group Link

Gets a single group link.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alfaview\Client\Api\GuestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 00000000-0000-0000-0000-000000000000; // string | The ID of the group link to get.
$authorization = 'authorization_example'; // string | A valid access token (can be obtained by authenticating).

try {
    $result = $apiInstance->getGroupLink($id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuestsApi->getGroupLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the group link to get. | |
| **authorization** | **string**| A valid access token (can be obtained by authenticating). | [optional] |

### Return type

[**\Alfaview\Client\Model\GroupLink**](../Model/GroupLink.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGuestLink()`

```php
getGuestLink($id, $authorization): \Alfaview\Client\Model\GuestLink
```

Get Guest Link

Gets a single guest link.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alfaview\Client\Api\GuestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 00000000-0000-0000-0000-000000000000; // string | The ID of the guest link to get.
$authorization = 'authorization_example'; // string | A valid access token (can be obtained by authenticating).

try {
    $result = $apiInstance->getGuestLink($id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuestsApi->getGuestLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the guest link to get. | |
| **authorization** | **string**| A valid access token (can be obtained by authenticating). | [optional] |

### Return type

[**\Alfaview\Client\Model\GuestLink**](../Model/GuestLink.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listGroupLinks()`

```php
listGroupLinks($authorization, $page_token, $limit): \Alfaview\Client\Model\PaginatedBodyListGroupLink
```

List Group Links

Lists group links.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alfaview\Client\Api\GuestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string | A valid access token (can be obtained by authenticating).
$page_token = 'page_token_example'; // string | For pagination: Pass the nextPageToken from the last successful request to obtain the next page. Omit on first request.
$limit = 100; // int | For pagination: Set a limit on the number of returned group links.

try {
    $result = $apiInstance->listGroupLinks($authorization, $page_token, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuestsApi->listGroupLinks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| A valid access token (can be obtained by authenticating). | [optional] |
| **page_token** | **string**| For pagination: Pass the nextPageToken from the last successful request to obtain the next page. Omit on first request. | [optional] |
| **limit** | **int**| For pagination: Set a limit on the number of returned group links. | [optional] [default to 100] |

### Return type

[**\Alfaview\Client\Model\PaginatedBodyListGroupLink**](../Model/PaginatedBodyListGroupLink.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listGroupLinksForRoom()`

```php
listGroupLinksForRoom($room_id, $authorization, $page_token, $limit): \Alfaview\Client\Model\PaginatedBodyListGroupLink
```

List Group Links for Room

Lists group links for a room. Returns an empty array if the room does not exist.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alfaview\Client\Api\GuestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$room_id = 00000000-0000-0000-0000-000000000000; // string | The room ID of the group links.
$authorization = 'authorization_example'; // string | A valid access token (can be obtained by authenticating).
$page_token = 'page_token_example'; // string | For pagination: Pass the nextPageToken from the last successful request to obtain the next page. Omit on first request.
$limit = 100; // int | For pagination: Set a limit on the number of returned group links.

try {
    $result = $apiInstance->listGroupLinksForRoom($room_id, $authorization, $page_token, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuestsApi->listGroupLinksForRoom: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **room_id** | **string**| The room ID of the group links. | |
| **authorization** | **string**| A valid access token (can be obtained by authenticating). | [optional] |
| **page_token** | **string**| For pagination: Pass the nextPageToken from the last successful request to obtain the next page. Omit on first request. | [optional] |
| **limit** | **int**| For pagination: Set a limit on the number of returned group links. | [optional] [default to 100] |

### Return type

[**\Alfaview\Client\Model\PaginatedBodyListGroupLink**](../Model/PaginatedBodyListGroupLink.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listGuestLinks()`

```php
listGuestLinks($authorization, $page_token, $limit): \Alfaview\Client\Model\PaginatedBodyListGuestLink
```

List Guest Links

Lists guest links.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alfaview\Client\Api\GuestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string | A valid access token (can be obtained by authenticating).
$page_token = 'page_token_example'; // string | For pagination: Pass the nextPageToken from the last successful request to obtain the next page. Omit on first request.
$limit = 100; // int | For pagination: Set a limit on the number of returned guest links.

try {
    $result = $apiInstance->listGuestLinks($authorization, $page_token, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuestsApi->listGuestLinks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| A valid access token (can be obtained by authenticating). | [optional] |
| **page_token** | **string**| For pagination: Pass the nextPageToken from the last successful request to obtain the next page. Omit on first request. | [optional] |
| **limit** | **int**| For pagination: Set a limit on the number of returned guest links. | [optional] [default to 100] |

### Return type

[**\Alfaview\Client\Model\PaginatedBodyListGuestLink**](../Model/PaginatedBodyListGuestLink.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listGuestLinksForRoom()`

```php
listGuestLinksForRoom($room_id, $authorization, $page_token, $limit): \Alfaview\Client\Model\PaginatedBodyListGuestLink
```

List Guest Links for a Room

Lists guest links for a room. Returns an empty array if the room does not exist.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alfaview\Client\Api\GuestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$room_id = 00000000-0000-0000-0000-000000000000; // string | The room ID for the guest link.
$authorization = 'authorization_example'; // string | A valid access token (can be obtained by authenticating).
$page_token = 'page_token_example'; // string | For pagination: Pass the nextPageToken from the last successful request to obtain the next page. Omit on first request.
$limit = 100; // int | For pagination: Set a limit on the number of returned guest links.

try {
    $result = $apiInstance->listGuestLinksForRoom($room_id, $authorization, $page_token, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuestsApi->listGuestLinksForRoom: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **room_id** | **string**| The room ID for the guest link. | |
| **authorization** | **string**| A valid access token (can be obtained by authenticating). | [optional] |
| **page_token** | **string**| For pagination: Pass the nextPageToken from the last successful request to obtain the next page. Omit on first request. | [optional] |
| **limit** | **int**| For pagination: Set a limit on the number of returned guest links. | [optional] [default to 100] |

### Return type

[**\Alfaview\Client\Model\PaginatedBodyListGuestLink**](../Model/PaginatedBodyListGuestLink.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateGroupLink()`

```php
updateGroupLink($id, $group_link_update, $authorization)
```

Update Group Link

Updates a group link.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alfaview\Client\Api\GuestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 00000000-0000-0000-0000-000000000000; // string | The ID of the group link to update.
$group_link_update = new \Alfaview\Client\Model\GroupLinkUpdate(); // \Alfaview\Client\Model\GroupLinkUpdate
$authorization = 'authorization_example'; // string | A valid access token (can be obtained by authenticating).

try {
    $apiInstance->updateGroupLink($id, $group_link_update, $authorization);
} catch (Exception $e) {
    echo 'Exception when calling GuestsApi->updateGroupLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the group link to update. | |
| **group_link_update** | [**\Alfaview\Client\Model\GroupLinkUpdate**](../Model/GroupLinkUpdate.md)|  | |
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

## `updateGuestLink()`

```php
updateGuestLink($id, $guest_link_update, $authorization)
```

Update Guest Link

Updates a guest link.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alfaview\Client\Api\GuestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 00000000-0000-0000-0000-000000000000; // string | The ID of the guest link to update.
$guest_link_update = new \Alfaview\Client\Model\GuestLinkUpdate(); // \Alfaview\Client\Model\GuestLinkUpdate
$authorization = 'authorization_example'; // string | A valid access token (can be obtained by authenticating).

try {
    $apiInstance->updateGuestLink($id, $guest_link_update, $authorization);
} catch (Exception $e) {
    echo 'Exception when calling GuestsApi->updateGuestLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the guest link to update. | |
| **guest_link_update** | [**\Alfaview\Client\Model\GuestLinkUpdate**](../Model/GuestLinkUpdate.md)|  | |
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
