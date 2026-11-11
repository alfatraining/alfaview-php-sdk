# GroupLink

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**access_key** | **string** | The access key. |
**created_at** | **\DateTime** | The creation timestamp. |
**created_by** | **string** | The creator user ID. |
**description** | **string** | A description of the group link. |
**dial_in_allowed** | **bool** | If true, the group link is allowed to be used via dial-in. |
**dial_in_code** | **string** | The dial-in authentication code for the group link. |
**id** | **string** | The group link ID. |
**join_link** | **string** | Deprecated. Use joinUrl instead. |
**join_url** | **string** | The URL of the room join page. That page allows the user to set a display name and to choose whether to join the room with the native client or the web client. |
**origin** | **string** | String that specifies the creator or reason for the creation of the group link (e.g., &lt;code&gt;my external tool&lt;/code&gt; or &lt;code&gt;initial meeting delayed&lt;/code&gt;). |
**permission_group_id** | **string** | The permission group ID. |
**room_id** | **string** | The room ID. |
**valid_from** | **\DateTime** | The group link is valid from this point in time. | [optional]
**valid_until** | **\DateTime** | The group link is valid until this point in time. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
