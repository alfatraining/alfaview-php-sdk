# # GroupLinkAuthenticationInfo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**access_token** | **string** | Access tokens are returned after successful authentication as a base64-encoded string. Use the token in the &#39;Authorization&#39; header in order to access the API. Note: Can be empty if the group link is not yet / no longer valid. | [optional]
**client_launch_url** | **string** | The URL to launch the client application. Note: Can be empty if the group link is not yet / no longer valid. | [optional]
**display_name** | **string** | The name of the guest that is displayed in UIs. |
**participant_id** | **string** | The ID of the corresponding group link. Note: Can be empty if the group link is not yet / no longer valid. | [optional]
**token_expires_at** | **\DateTime** | Time at which the access token expires. Note: Can be empty if the group link is not yet / no longer valid. | [optional]
**valid_from** | **\DateTime** | Time at which this group link becomes valid, i.e., authentication becomes possible. |
**valid_until** | **\DateTime** | Time at which this group link becomes invalid, i.e., authentication is not possible anymore. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
