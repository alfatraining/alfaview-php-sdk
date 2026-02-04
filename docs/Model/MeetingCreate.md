# # MeetingCreate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**agenda** | **string** | The agenda of the meeting. HTML is not allowed. | [optional]
**early_access_minutes** | **int** | The duration of the early access period to the meeting room in minutes. | [optional]
**end** | **\DateTime** | The end time of the meeting. |
**group_links** | [**\Alfaview\Client\Model\GroupLinkCreate[]**](GroupLinkCreate.md) | The group links to create for the meeting. If not provided, four default group links (moderator, participant, guest, spectator) will be created. If an empty list is provided, no links will be created. | [optional]
**guest_links** | [**\Alfaview\Client\Model\GuestLinkCreate[]**](GuestLinkCreate.md) | The guest links to create for the meeting. | [optional]
**room_features** | [**\Alfaview\Client\Model\RoomFeatures**](RoomFeatures.md) | The features of the meeting room. |
**start** | **\DateTime** | The start time of the meeting. |
**subroom_display_names** | **string[]** | The display names of the subrooms in the meeting room. | [optional]
**timezone** | **string** | The time zone of the meeting. |
**title** | **string** | The title of the meeting. |
**waiting_room_enabled** | **bool** | If true, participants will join the waiting room to be admitted by a moderator. |
**waiting_room_welcome_note** | **string** | The welcome note that is shown to the participants as they join the waiting room. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
