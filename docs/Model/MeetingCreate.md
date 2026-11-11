# MeetingCreate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**agenda** | **string** | The meeting agenda. HTML is not allowed. | [optional]
**early_access_minutes** | **int** | The duration of the early access period to the meeting room in minutes. In this period, invitees without moderator or administrator permissions can join the meeting. The meeting creator can always join 1 hour and invitees with moderator or administrator permissions 30 minutes before the meeting starts. | [optional]
**end** | **\DateTime** | The end time. |
**group_links** | [**\Alfaview\Client\Model\GroupLinkCreate[]**](GroupLinkCreate.md) | The group links for the meeting. They are created in addition to the four default group links (moderator, participant, guest, spectator), which every meeting gets. | [optional]
**guest_links** | [**\Alfaview\Client\Model\GuestLinkCreate[]**](GuestLinkCreate.md) | The guest links for the meeting. | [optional]
**invited_users** | [**\Alfaview\Client\Model\MeetingUserInvitation[]**](MeetingUserInvitation.md) | The registered users to invite to the meeting. Every invited user receives an invitation email. | [optional]
**passcode_required** | **bool** | If true, a passcode is required to enter the meeting room. | [optional]
**recurrence_rule** | **string** | The recurrence rule that makes the meeting recurring, as an RFC 5545 RRULE with times in UTC. The prefix &lt;code&gt;RRULE:&lt;/code&gt; is optional. A &lt;code&gt;DTSTART&lt;/code&gt; line may precede the rule only together with the prefix &lt;code&gt;RRULE:&lt;/code&gt;. &lt;code&gt;start&lt;/code&gt; is the start of the first instance, and &lt;code&gt;end&lt;/code&gt; minus &lt;code&gt;start&lt;/code&gt; is the duration of each instance. | [optional]
**room_features** | [**\Alfaview\Client\Model\RoomFeaturesEdit**](RoomFeaturesEdit.md) | The feature configuration. If no state is specified for a feature, &lt;code&gt;default&lt;/code&gt; is assumed. |
**start** | **\DateTime** | The start time. |
**subroom_display_names** | **string[]** | The names of the subrooms of the meeting room that are displayed in UIs. | [optional]
**timezone** | **string** | The time zone used for time information. |
**title** | **string** | The meeting title. |
**waiting_room_enabled** | **bool** | If true, participants will enter the waiting room when joining the room. A moderator can admit waiting participants to join the actual room. |
**waiting_room_welcome_note** | **string** | The welcome note that is shown to the participants as they join the waiting room. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
