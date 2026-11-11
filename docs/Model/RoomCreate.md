# RoomCreate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**default_permissions** | [**\Alfaview\Client\Model\Permissions**](Permissions.md) | Optional default permissions for every non-guest user. If default permissions are empty, users will not have any permissions by default. | [optional]
**display_name** | **string** | The name of the room that is displayed in UIs. |
**features** | [**\Alfaview\Client\Model\RoomFeaturesEdit**](RoomFeaturesEdit.md) | The feature configuration. If no state is specified for a feature, &lt;code&gt;default&lt;/code&gt; is assumed. | [optional]
**parent_id** | **string** | The parent room ID. | [optional]
**passcode_required** | **bool** | If true, a passcode is required to enter the room. | [optional]
**permissions** | [**\Alfaview\Client\Model\ParticipantPermissions[]**](ParticipantPermissions.md) | The user permissions. | [optional]
**quotas** | [**\Alfaview\Client\Model\RoomQuotasEdit**](RoomQuotasEdit.md) | The requested quotas. These are checked against the company&#39;s available quotas, which are provided by its billing plan. | [optional]
**subrooms** | [**\Alfaview\Client\Model\SubroomCreateListItem[]**](SubroomCreateListItem.md) | The contained subrooms. | [optional]
**type** | **string** | The room type. &lt;code&gt;room&lt;/code&gt; is used for normal rooms. Departments are unjoinable rooms that can hold multiple child rooms to help improving room structuring. |
**waiting_room_enabled** | **bool** | If true, participants enter a waiting room when joining and must be admitted by a moderator. Rooms of the type &lt;code&gt;department&lt;/code&gt; cannot have a waiting room. |
**waiting_room_welcome_note** | **string** | The welcome note that is shown to the participants as they join the waiting room. Rooms of the type &lt;code&gt;department&lt;/code&gt; cannot have a waiting room. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
