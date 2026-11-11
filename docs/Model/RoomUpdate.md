# RoomUpdate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**default_permissions** | [**\Alfaview\Client\Model\Permissions**](Permissions.md) | Optional default permissions for every non-guest user. If default permissions are empty, users will not have any permissions by default. | [optional]
**display_name** | **string** | The name that is displayed in UIs. | [optional]
**features** | [**\Alfaview\Client\Model\RoomFeaturesEdit**](RoomFeaturesEdit.md) | The feature configuration. If no state is specified for a feature, &lt;code&gt;default&lt;/code&gt; is assumed. | [optional]
**passcode_required** | **bool** | If true, a passcode is required to enter the room. | [optional]
**permissions** | [**\Alfaview\Client\Model\ParticipantPermissions[]**](ParticipantPermissions.md) | The user permissions. Permissions not present in this array will be deleted. | [optional]
**quotas** | [**\Alfaview\Client\Model\RoomQuotasEdit**](RoomQuotasEdit.md) | The quota information. | [optional]
**subrooms** | [**\Alfaview\Client\Model\SubroomEditListItem[]**](SubroomEditListItem.md) | The contained subrooms. Subrooms not present in this list will be deleted. | [optional]
**waiting_room_enabled** | **bool** | If true, participants will enter the waiting room when joining the room. A moderator can admit waiting participants to join the actual room. Rooms of the type &lt;code&gt;department&lt;/code&gt; cannot have a waiting room | [optional]
**waiting_room_welcome_note** | **string** | The welcome note that is shown to the participants as they join the waiting room. Rooms of the type &lt;code&gt;department&lt;/code&gt; cannot have a waiting room. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
