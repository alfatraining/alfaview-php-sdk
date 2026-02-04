# # GuestLink

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**access_key** | **string** | The access key for the guest link. |
**created_at** | **\DateTime** | The timestamp of when the guest link was created. |
**created_by** | **string** | The ID of the user who created the guest link. |
**dial_in_allowed** | **bool** | If true, the guest link is allowed to be used via dial-in. |
**dial_in_code** | **string** | The dial-in authentication code for the guest link. |
**display_name** | **string** | The name of the guest link that is displayed in UIs. | [optional]
**email_address** | **string** | The email address associated with the guest link. |
**id** | **string** | A unique identifier of the guest link. |
**join_url** | **string** | The URL to a page of the alfaview web application that allows the guest to join the room. |
**locale** | **string** | The locale settings (e.g., UI language) for the guest link. |
**origin** | **string** | String that specifies the creator or reason for the creation of the guest link (e.g., &#39;my external tool&#39; or &#39;initial meeting delayed&#39;). |
**permission_group_id** | **string** | The ID of the permission group of the guest link. |
**room_id** | **string** | The ID of the room the guest link is assigned to. |
**valid_from** | **\DateTime** | The guest link is valid from this point in time. | [optional]
**valid_until** | **\DateTime** | The guest link is valid until this point in time. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
