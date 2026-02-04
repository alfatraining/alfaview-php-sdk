# # GuestAuthInfoRequestData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**schema** | **string** | A URL to the JSON Schema for this object. | [optional] [readonly]
**access_key** | **string** | The access key to authenticate. |
**company_id** | **string** | The ID of the company to join. |
**display_name** | **string** | The name of the guest that is displayed in UIs. Can be empty for guest links (because for them a display name is stored in the system). | [optional]
**external_id** | **string** | The external ID can be used to derive a reproducible user ID for group links to prevent simultaneous use. The caller is responsible to provide a unique value per user. | [optional]
**room_id** | **string** | The ID of the room to join. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
