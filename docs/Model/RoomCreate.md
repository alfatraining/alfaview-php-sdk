# # RoomCreate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**default_permissions** | [**\Alfaview\Client\Model\Permissions**](Permissions.md) | Optional default permissions for every non-guest user in this room. | [optional]
**display_name** | **string** | The name of the room that is displayed in UIs. |
**features** | [**\Alfaview\Client\Model\RoomFeaturesEdit**](RoomFeaturesEdit.md) | The features configuration of this room. If no state is specified for a feature, &#39;default&#39; is assumed. | [optional]
**parent_id** | **string** | The ID of the parent room. | [optional]
**permissions** | [**\Alfaview\Client\Model\ParticipantPermissions[]**](ParticipantPermissions.md) | The permissions of users for this room. | [optional]
**quotas** | [**\Alfaview\Client\Model\RoomQuotasEdit**](RoomQuotasEdit.md) | The quota information of the room. | [optional]
**subrooms** | [**\Alfaview\Client\Model\SubroomCreateListItem[]**](SubroomCreateListItem.md) | The subrooms contained in the room. | [optional]
**type** | **string** | The type of the room. |
**waiting_room_enabled** | **bool** | If true, participants will join the waiting room to be admitted by a moderator. Rooms of the type &#39;department&#39; cannot have a waiting room. |
**waiting_room_welcome_note** | **string** | The welcome note that is shown to the participants as they join the waiting room. Rooms of the type &#39;department&#39; cannot have a waiting room. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
