# # Meeting

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**agenda** | **string** | The agenda of the meeting. HTML is not allowed. | [optional]
**can_join** | **bool** | If true, users can join the meeting. |
**can_join_after** | **\DateTime** | The timestamp of when users can join the meeting. Will be omitted if the meeting has ended. | [optional]
**canceled_at** | **\DateTime** | The timestamp of when the meeting was canceled (if it was canceled). | [optional]
**created_at** | **\DateTime** | The timestamp of when the meeting was created. |
**created_by** | **string** | The user ID of the user that created the meeting. |
**early_access_minutes** | **int** | The duration of the early access period in minutes. | [optional]
**end** | **\DateTime** | The end time of the meeting. |
**group_links** | **array<string,string>** | The group links for the meeting. | [optional]
**guest_links** | **string[]** | The guest links for the meeting. | [optional]
**id** | **string** | A unique identifier of the meeting. It can also be used as a &#39;roomId&#39; to access the meeting room. |
**room_available** | **bool** | If true, the meeting room is currently available.&#39; |
**start** | **\DateTime** | The start time of the meeting. |
**state** | **string** | The current state of the meeting. |
**timezone** | **string** | The timezone of the meeting. |
**title** | **string** | The title of the meeting. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
