# # GuestAuthInfo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**schema** | **string** | A URL to the JSON Schema for this object. | [optional] [readonly]
**access_token** | **string** | Access tokens are returned after successful authentication as a base64-encoded string. Use the token in the &#39;Authorization&#39; header in order to access the API. Note: Can be empty if the guest link is not yet / no longer valid. | [optional]
**display_name** | **string** | The name of the guest that is displayed in UIs. |
**participant_id** | **string** | The ID of the corresponding guest / group link. Note: Can be empty if the guest link is not yet / no longer valid. | [optional]
**token_expires_at** | **\DateTime** | Time at which the access token expires. Note: Can be empty if the guest link is not yet / no longer valid. | [optional]
**type** | **string** | The type of the link (guest link or group link). |
**valid_from** | **\DateTime** | Time at which this guest / group link becomes valid, i.e., authentication becomes possible. |
**valid_until** | **\DateTime** | Time at which this guest / group link becomes invalid, i.e., authentication is not possible anymore. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
