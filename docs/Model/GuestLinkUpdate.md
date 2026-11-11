# GuestLinkUpdate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**dial_in_allowed** | **bool** | If true, the guest link is allowed to be used via dial-in. | [optional]
**display_name** | **string** | The name of the guest that is displayed in UIs. |
**email_address** | **string** | The email address associated with the guest link. | [optional]
**locale** | **string** | The locale settings (e.g., UI language) for the guest link. | [optional]
**permission_group_id** | **string** | The permission group ID. | [optional]
**send_email** | **bool** | If true, an information email with the updated guest link information will be sent to the associated email address. |
**timezone** | **string** | The time zone to use in the notification emails. Can be &lt;code&gt;UTC&lt;/code&gt;, &lt;code&gt;Local&lt;/code&gt; or a TZ identifier from the IANA time zone database. If empty, the default is &lt;code&gt;Europe/Berlin&lt;/code&gt;. | [optional]
**valid_from** | **\DateTime** | The guest link is valid from this point in time. | [optional]
**valid_until** | **\DateTime** | The guest link is valid until this point in time. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
