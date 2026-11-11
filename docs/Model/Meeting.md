# Meeting

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**agenda** | **string** | The meeting agenda. HTML is not allowed. | [optional]
**can_join** | **bool** | If true, participants can join the meeting at the time of the request. |
**can_join_after** | **\DateTime** | The timestamp of when participants can join the meeting. Will be omitted if the meeting has ended. | [optional]
**canceled_at** | **\DateTime** | The timestamp of when the meeting was canceled (if it was canceled). | [optional]
**created_at** | **\DateTime** | The creation timestamp. |
**created_by** | **string** | The creator user ID. |
**early_access_minutes** | **int** | The duration of the early access period to the meeting room in minutes. In this period, invitees without moderator or administrator permissions can join the meeting. The meeting creator can always join 1 hour and invitees with moderator or administrator permissions 30 minutes before the meeting starts. | [optional]
**end** | **\DateTime** | The end time. For a recurring meeting, the end of the listed instance in a list, and the end of the first instance otherwise. |
**externally_managed** | **bool** | If true, an external system, such as the alfaview Outlook add-in, manages the recurring meeting, and participants can join it at any time. Omitted for a non-recurring meeting. | [optional]
**group_links** | **array<string,string>** | The group links for the meeting. | [optional]
**guest_links** | **string[]** | The guest links for the meeting. | [optional]
**id** | **string** | The meeting ID. It can also be used as a &lt;code&gt;roomId&lt;/code&gt; to access the meeting room. |
**next_instance** | **\DateTime** | The start of the ongoing or next instance of a recurring meeting. Omitted for a non-recurring meeting, for a recurring meeting without an ongoing or next instance, and in a list. | [optional]
**recurrence_rule** | **string** | The recurrence rule of a recurring meeting as an RFC 5545 RRULE without the prefix &lt;code&gt;RRULE:&lt;/code&gt;. Omitted for a non-recurring meeting. | [optional]
**room_available** | **bool** | If true, the meeting room is currently available. |
**start** | **\DateTime** | The start time. For a recurring meeting, the start of the listed instance in a list, and the start of the first instance otherwise. |
**state** | **string** | The current state. |
**timezone** | **string** | The time zone used for time information. |
**title** | **string** | The meeting title. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
