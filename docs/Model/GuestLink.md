# GuestLink

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**access_key** | **string** | The access key. |
**created_at** | **\DateTime** | The creation timestamp. |
**created_by** | **string** | The creator user ID. |
**dial_in_allowed** | **bool** | If true, the guest link is allowed to be used via dial-in. |
**dial_in_code** | **string** | The dial-in authentication code. |
**display_name** | **string** | The name of the participant using the guest link that is displayed in UIs. | [optional]
**email_address** | **string** | The email address associated with the guest link. |
**id** | **string** | The guest link ID. |
**join_url** | **string** | The URL of the room join page. That page allows to choose whether to join the room with the native client or the web client |
**locale** | **string** | The locale settings (e.g., UI language). |
**origin** | **string** | String that specifies the creator or reason for the creation of the guest link (e.g., &lt;code&gt;my external tool&lt;/code&gt; or &lt;code&gt;initial meeting delayed&lt;/code&gt;). |
**permission_group_id** | **string** | The permission group ID. |
**room_id** | **string** | The room ID. |
**user_id** | **string** | The user ID of the guest using the guest link. It matches the userId in attendance reports. |
**valid_from** | **\DateTime** | The guest link is valid from this point in time. | [optional]
**valid_until** | **\DateTime** | The guest link is valid until this point in time. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
