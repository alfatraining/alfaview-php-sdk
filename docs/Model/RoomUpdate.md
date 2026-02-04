# # RoomUpdate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**default_permissions** | [**\Alfaview\Client\Model\Permissions**](Permissions.md) | Optional default permissions for every non-guest user in this room. | [optional]
**display_name** | **string** | The name of the room that is displayed in UIs. | [optional]
**features** | [**\Alfaview\Client\Model\RoomFeatures**](RoomFeatures.md) | The features configuration of this room. | [optional]
**permissions** | [**\Alfaview\Client\Model\ParticipantPermissions[]**](ParticipantPermissions.md) | The permissions of users for this room. Permissions not present in this array will be deleted. | [optional]
**quotas** | [**\Alfaview\Client\Model\RoomQuotasEdit**](RoomQuotasEdit.md) | The quota information of the room. | [optional]
**subrooms** | [**\Alfaview\Client\Model\SubroomEditListItem[]**](SubroomEditListItem.md) | A full list of all subrooms contained in the room. Subrooms not present in this list will be deleted. | [optional]
**waiting_room_enabled** | **bool** | If true, participants will join the waiting room to be admitted by a moderator. Rooms of the type &#39;department&#39; cannot have a waiting room. | [optional]
**waiting_room_welcome_note** | **string** | The welcome note that is shown to the participants as they join the waiting room. Rooms of the type &#39;department&#39; cannot have a waiting room. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
