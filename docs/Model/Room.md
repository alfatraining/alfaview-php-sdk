# # Room

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**created_at** | **\DateTime** | The timestamp of when the room was created. |
**created_by** | **string** | The user ID of the user that created the room. |
**default_permissions** | [**\Alfaview\Client\Model\Permissions**](Permissions.md) | Optional default permissions for every non-guest user in this room. | [optional]
**display_name** | **string** | The name of the room that is displayed in UIs. |
**features** | [**\Alfaview\Client\Model\RoomFeatures**](RoomFeatures.md) | The feature configuration of this room. |
**group_link_permissions** | [**\Alfaview\Client\Model\ParticipantPermissions[]**](ParticipantPermissions.md) | The permissions of group links for this room. | [optional]
**guest_link_permissions** | [**\Alfaview\Client\Model\ParticipantPermissions[]**](ParticipantPermissions.md) | The permissions of guest links for this room. | [optional]
**id** | **string** | A unique identifier of the room. |
**managed** | **bool** | If true, the room cannot be edited or removed by a user. |
**parent_id** | **string** | The ID of the parent room. | [optional]
**quotas** | [**\Alfaview\Client\Model\RoomQuotas**](RoomQuotas.md) | The quota information of the room. | [optional]
**sort** | **int** | A sorting number that determines the position of the room in UI room lists. |
**subrooms** | [**\Alfaview\Client\Model\Subroom[]**](Subroom.md) | The subrooms contained in the room. | [optional]
**type** | **string** | The type of the room. |
**user_permissions** | [**\Alfaview\Client\Model\ParticipantPermissions[]**](ParticipantPermissions.md) | The permissions of users for this room. | [optional]
**waiting_room_enabled** | **bool** | If true, participants will join the waiting room to be admitted by a moderator. Rooms of the type &#39;department&#39; cannot have a waiting room. |
**waiting_room_welcome_note** | **string** | The welcome note that is shown to the participants as they join the waiting room. Rooms of the type &#39;department&#39; cannot have a waiting room. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
