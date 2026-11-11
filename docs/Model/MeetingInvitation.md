# MeetingInvitation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**agenda** | **string** | The meeting agenda. HTML is not allowed. | [optional]
**can_join** | **bool** | If true, the requesting user can join the meeting, or the listed instance of a recurring meeting, at the time of the request. |
**canceled_at** | **\DateTime** | The timestamp of when the meeting was canceled (if it was canceled). | [optional]
**created_by** | **string** | The creator user ID. |
**early_access_minutes** | **int** | The duration in minutes before the meeting start in which the requesting user can join the meeting. | [optional]
**end** | **\DateTime** | The end time. For a recurring meeting, the end of the listed instance. |
**id** | **string** | The meeting ID. It can also be used as a &lt;code&gt;roomId&lt;/code&gt; to access the meeting room. |
**start** | **\DateTime** | The start time. For a recurring meeting, the start of the listed instance. |
**timezone** | **string** | The time zone used for time information. |
**title** | **string** | The meeting title. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
