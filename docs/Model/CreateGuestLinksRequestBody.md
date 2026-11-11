# CreateGuestLinksRequestBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**create** | [**\Alfaview\Client\Model\GuestLinkCreate[]**](GuestLinkCreate.md) | The guest links. |
**origin** | **string** | Specifies the creator or reason for the creation of the guest links (e.g., &lt;code&gt;my external tool&lt;/code&gt; or &lt;code&gt;initial meeting delayed&lt;/code&gt;). | [optional]
**timezone** | **string** | The time zone to use in the notification emails. Can be &lt;code&gt;UTC&lt;/code&gt;, &lt;code&gt;Local&lt;/code&gt; or a TZ identifier from the IANA time zone database. If empty, the default is &lt;code&gt;Europe/Berlin&lt;/code&gt;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
