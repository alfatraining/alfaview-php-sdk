# MeetingUpdate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**agenda** | **string** | The meeting agenda. HTML is not allowed. | [optional]
**early_access_minutes** | **int** | The duration of the early access period to the meeting room in minutes. In this period, invitees without moderator or administrator permissions can join the meeting. The meeting creator can always join 1 hour and invitees with moderator or administrator permissions 30 minutes before the meeting starts. | [optional]
**end** | **\DateTime** | The end time. For a recurring meeting, or with &lt;code&gt;recurrenceRule&lt;/code&gt;, the end of the first instance, and &lt;code&gt;end&lt;/code&gt; minus &lt;code&gt;start&lt;/code&gt; is the duration of each instance. | [optional]
**recurrence_rule** | **string** | Sets the recurrence rule of a non-recurring meeting, which makes it recurring, or replaces the rule of a recurring meeting. Without &lt;code&gt;start&lt;/code&gt;, the current start of the meeting becomes the start of the first instance. A recurring meeting cannot become non-recurring again, because the rule cannot be removed. The prefix &lt;code&gt;RRULE:&lt;/code&gt; is optional. A &lt;code&gt;DTSTART&lt;/code&gt; line may precede the rule only together with the prefix &lt;code&gt;RRULE:&lt;/code&gt;. | [optional]
**start** | **\DateTime** | The start time. For a recurring meeting, or with &lt;code&gt;recurrenceRule&lt;/code&gt;, the start of the first instance. | [optional]
**timezone** | **string** | The time zone used for time information. | [optional]
**title** | **string** | The meeting title. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
