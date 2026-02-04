# # GroupLink

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**access_key** | **string** | The access key for the group link. |
**created_at** | **\DateTime** | The timestamp of when the group link was created. |
**created_by** | **string** | The ID of the user who created the group link. |
**description** | **string** | A description of the group link. |
**dial_in_allowed** | **bool** | If true, the group link is allowed to be used via dial-in. |
**dial_in_code** | **string** | The dial-in authentication code for the group link. |
**id** | **string** | A unique identifier of the group link. |
**join_link** | **string** | The link to join the room. |
**origin** | **string** | String that specifies the creator or reason for the creation of the group link (e.g., &#39;my external tool&#39; or &#39;initial meeting delayed&#39;). |
**permission_group_id** | **string** | The ID of the permission group of the group link. |
**room_id** | **string** | The ID of the room the group link is assigned to. |
**valid_from** | **\DateTime** | The group link is valid from this point in time. | [optional]
**valid_until** | **\DateTime** | The group link is valid until this point in time. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
