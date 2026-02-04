# # PostGuestLinksRequestBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**schema** | **string** | A URL to the JSON Schema for this object. | [optional] [readonly]
**create** | [**\Alfaview\Client\Model\GuestLinkCreate[]**](GuestLinkCreate.md) | The guest links to create. |
**origin** | **string** | String to specify the creator or reason of the creation of the guest link (e.g. &#39;my external tool&#39; or &#39;initial meeting delayed&#39;). | [optional]
**timezone** | **string** | The time zone to use in the notification emails. Can be &#39;UTC&#39;, &#39;Local&#39; or a TZ identifier from the IANA time zone database. The default is &#39;Europe/Berlin&#39;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
