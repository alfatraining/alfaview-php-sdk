# Room

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**created_at** | **\DateTime** | The creation timestamp. |
**created_by** | **string** | The creator user ID. |
**default_permissions** | [**\Alfaview\Client\Model\Permissions**](Permissions.md) | Optional default permissions for every non-guest user. If empty, users will not have any permissions by default. | [optional]
**display_name** | **string** | The name of the room that is displayed in UIs. |
**features** | [**\Alfaview\Client\Model\RoomFeatures**](RoomFeatures.md) | The feature configuration. |
**group_link_permissions** | [**\Alfaview\Client\Model\ParticipantPermissions[]**](ParticipantPermissions.md) | The permissions of group links for this room. | [optional]
**guest_link_permissions** | [**\Alfaview\Client\Model\ParticipantPermissions[]**](ParticipantPermissions.md) | The guest links permissions for this room. | [optional]
**id** | **string** | The room ID. |
**managed** | **bool** | If true, the room cannot be edited or removed by a user. |
**parent_id** | **string** | The parent room ID. | [optional]
**passcode_required** | **bool** | If true, a passcode is required to enter the room. | [optional]
**quotas** | [**\Alfaview\Client\Model\RoomQuotas**](RoomQuotas.md) | The quota information. | [optional]
**sort** | **int** | A sorting number that determines the position of the room in UI room lists. |
**subrooms** | [**\Alfaview\Client\Model\Subroom[]**](Subroom.md) | The contained subrooms. | [optional]
**type** | **string** | The room type. &lt;code&gt;room&lt;/code&gt; is used for normal rooms. Departments are unjoinable rooms that can hold multiple child rooms to help improving room structuring. |
**user_permissions** | [**\Alfaview\Client\Model\ParticipantPermissions[]**](ParticipantPermissions.md) | The user permissions. | [optional]
**waiting_room_enabled** | **bool** | If true, participants will enter the waiting room when joining the room. A moderator can admit waiting participants to join the actual room. Rooms of the type &lt;code&gt;department&lt;/code&gt; cannot have a waiting room. |
**waiting_room_welcome_note** | **string** | The welcome note that is shown to the participants as they join the waiting room. Rooms of the type &lt;code&gt;department&lt;/code&gt; cannot have a waiting room. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
