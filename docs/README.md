# Protocol Documentation
<a name="top"/>

## Table of Contents

- [authentication/accountStatus.proto](#authentication/accountStatus.proto)
  
    - [AccountStatus](#authentication.AccountStatus)
  
  
  

- [authentication/authenticationService.proto](#authentication/authenticationService.proto)
    - [ActivationTokenCredentials](#authentication.ActivationTokenCredentials)
    - [AuthMethodInfoList](#authentication.AuthMethodInfoList)
    - [AuthenticationCreateReply](#authentication.AuthenticationCreateReply)
    - [AuthenticationCreateRequest](#authentication.AuthenticationCreateRequest)
    - [AuthenticationInformationReply](#authentication.AuthenticationInformationReply)
    - [AuthenticationInformationReply.AuthenticationMethodInformationEntry](#authentication.AuthenticationInformationReply.AuthenticationMethodInformationEntry)
    - [AuthenticationInformationReply.PermissionsEntry](#authentication.AuthenticationInformationReply.PermissionsEntry)
    - [AuthenticationInformationRequest](#authentication.AuthenticationInformationRequest)
    - [AuthenticationMethodInformation](#authentication.AuthenticationMethodInformation)
    - [AuthenticationMethodInformation.MetadataEntry](#authentication.AuthenticationMethodInformation.MetadataEntry)
    - [AuthenticationMethodInformation.PermissionsEntry](#authentication.AuthenticationMethodInformation.PermissionsEntry)
    - [AuthenticationReply](#authentication.AuthenticationReply)
    - [AuthenticationReply.PermissionsEntry](#authentication.AuthenticationReply.PermissionsEntry)
    - [AuthenticationRequest](#authentication.AuthenticationRequest)
    - [AuthenticationRequest.MetadataEntry](#authentication.AuthenticationRequest.MetadataEntry)
    - [AuthenticationRequest.PermissionsEntry](#authentication.AuthenticationRequest.PermissionsEntry)
    - [AuthenticationUpdateRequest](#authentication.AuthenticationUpdateRequest)
    - [AuthorizationCodeCredentials](#authentication.AuthorizationCodeCredentials)
    - [CompanyCreateReply](#authentication.CompanyCreateReply)
    - [CompanyCreateRequest](#authentication.CompanyCreateRequest)
    - [CompanySwitchCredentials](#authentication.CompanySwitchCredentials)
    - [ExternalOauth2Credentials](#authentication.ExternalOauth2Credentials)
    - [GuestAccessCredentials](#authentication.GuestAccessCredentials)
    - [LdapCredentials](#authentication.LdapCredentials)
    - [ListAuthenticationsReply](#authentication.ListAuthenticationsReply)
    - [ListAuthenticationsReply.ResultsEntry](#authentication.ListAuthenticationsReply.ResultsEntry)
    - [ListAuthenticationsRequest](#authentication.ListAuthenticationsRequest)
    - [PasswordResetReply](#authentication.PasswordResetReply)
    - [PasswordResetRequest](#authentication.PasswordResetRequest)
    - [RefreshTokenCredentials](#authentication.RefreshTokenCredentials)
    - [SignAccessTokenRequest](#authentication.SignAccessTokenRequest)
    - [UsernamePasswordCredentials](#authentication.UsernamePasswordCredentials)
  
  
  
    - [AuthenticationService](#authentication.AuthenticationService)
  

- [businessLogicService/businessLogicService.proto](#businessLogicService/businessLogicService.proto)
    - [CompanyPermissionGroupsListReply](#businessLogicService.CompanyPermissionGroupsListReply)
    - [CompanyPermissionGroupsListReply.PermissionGroupsEntry](#businessLogicService.CompanyPermissionGroupsListReply.PermissionGroupsEntry)
    - [CompanyPermissionGroupsListRequest](#businessLogicService.CompanyPermissionGroupsListRequest)
    - [FavoritesListReply](#businessLogicService.FavoritesListReply)
    - [FavoritesListRequest](#businessLogicService.FavoritesListRequest)
    - [FavoritesUpdateReply](#businessLogicService.FavoritesUpdateReply)
    - [FavoritesUpdateRequest](#businessLogicService.FavoritesUpdateRequest)
    - [FavoritesUpdateRequest.RoomIdsEntry](#businessLogicService.FavoritesUpdateRequest.RoomIdsEntry)
    - [PermissionGroup](#businessLogicService.PermissionGroup)
  
  
  
    - [BusinessLogicService](#businessLogicService.BusinessLogicService)
  

- [common/accessInfo.proto](#common/accessInfo.proto)
    - [AccessInfo](#common.AccessInfo)
  
  
  
  

- [common/accessToken.proto](#common/accessToken.proto)
    - [AccessToken](#common.AccessToken)
    - [AccessToken.PermissionsEntry](#common.AccessToken.PermissionsEntry)
  
  
  
  

- [common/chat.proto](#common/chat.proto)
    - [ChatHistoryReply](#common.ChatHistoryReply)
    - [ChatHistoryRequest](#common.ChatHistoryRequest)
    - [ChatMessage](#common.ChatMessage)
    - [ChatSendReply](#common.ChatSendReply)
    - [ChatSendRequest](#common.ChatSendRequest)
  
  
  
  

- [common/company.proto](#common/company.proto)
    - [Branding](#common.Branding)
    - [Company](#common.Company)
    - [Company.MetadataEntry](#common.Company.MetadataEntry)
  
  
  
  

- [common/permissions.proto](#common/permissions.proto)
    - [Permissions](#common.Permissions)
  
    - [BackendPermission](#common.BackendPermission)
    - [RoomPermission](#common.RoomPermission)
  
  
  

- [common/replyInfo.proto](#common/replyInfo.proto)
    - [ReplyInfo](#common.ReplyInfo)
  
    - [ReplyStatusCode](#common.ReplyStatusCode)
  
  
  

- [common/room.proto](#common/room.proto)
    - [Room](#common.Room)
    - [Room.MetadataEntry](#common.Room.MetadataEntry)
    - [Room.PermissionsEntry](#common.Room.PermissionsEntry)
    - [Room.SubRoomsEntry](#common.Room.SubRoomsEntry)
    - [RoomQuotas](#common.RoomQuotas)
    - [SubRoom](#common.SubRoom)
  
  
  
  

- [common/user.proto](#common/user.proto)
    - [User](#common.User)
    - [User.MetadataEntry](#common.User.MetadataEntry)
    - [UserProfile](#common.UserProfile)
  
  
  
  

- [companyService/companyService.proto](#companyService/companyService.proto)
    - [CompanyAvailableReply](#companyService.CompanyAvailableReply)
    - [CompanyAvailableRequest](#companyService.CompanyAvailableRequest)
    - [CompanyCreateReply](#companyService.CompanyCreateReply)
    - [CompanyCreateRequest](#companyService.CompanyCreateRequest)
    - [CompanyDestroyRequest](#companyService.CompanyDestroyRequest)
    - [CompanyListReply](#companyService.CompanyListReply)
    - [CompanyListReply.CompaniesEntry](#companyService.CompanyListReply.CompaniesEntry)
    - [CompanyListRequest](#companyService.CompanyListRequest)
    - [CompanyUpdateRequest](#companyService.CompanyUpdateRequest)
  
  
  
    - [CompanyService](#companyService.CompanyService)
  

- [roomService/roomService.proto](#roomService/roomService.proto)
    - [CreateJoinLinkReply](#roomService.CreateJoinLinkReply)
    - [CreateJoinLinkRequest](#roomService.CreateJoinLinkRequest)
    - [RoomCreateReply](#roomService.RoomCreateReply)
    - [RoomCreateRequest](#roomService.RoomCreateRequest)
    - [RoomDestroyReply](#roomService.RoomDestroyReply)
    - [RoomDestroyRequest](#roomService.RoomDestroyRequest)
    - [RoomInfo](#roomService.RoomInfo)
    - [RoomInfo.UsersEntry](#roomService.RoomInfo.UsersEntry)
    - [RoomListReply](#roomService.RoomListReply)
    - [RoomListReply.RoomsEntry](#roomService.RoomListReply.RoomsEntry)
    - [RoomListRequest](#roomService.RoomListRequest)
    - [RoomPermissionsReply](#roomService.RoomPermissionsReply)
    - [RoomPermissionsRequest](#roomService.RoomPermissionsRequest)
    - [RoomStatusReply](#roomService.RoomStatusReply)
    - [RoomStatusReply.RoomsEntry](#roomService.RoomStatusReply.RoomsEntry)
    - [RoomStatusRequest](#roomService.RoomStatusRequest)
    - [RoomUpdateReply](#roomService.RoomUpdateReply)
    - [RoomUpdateRequest](#roomService.RoomUpdateRequest)
    - [RoomsUpdateReply](#roomService.RoomsUpdateReply)
    - [RoomsUpdateReply.UpdateRepliesEntry](#roomService.RoomsUpdateReply.UpdateRepliesEntry)
    - [RoomsUpdateRequest](#roomService.RoomsUpdateRequest)
    - [UserInfo](#roomService.UserInfo)
  
  
  
    - [RoomService](#roomService.RoomService)
  

- [user/userService.proto](#user/userService.proto)
    - [UserCreateReply](#user.UserCreateReply)
    - [UserCreateRequest](#user.UserCreateRequest)
    - [UserDestroyRequest](#user.UserDestroyRequest)
    - [UserListReply](#user.UserListReply)
    - [UserListReply.UsersEntry](#user.UserListReply.UsersEntry)
    - [UserListRequest](#user.UserListRequest)
    - [UserProfileUpdateRequest](#user.UserProfileUpdateRequest)
    - [UserUpdateRequest](#user.UserUpdateRequest)
  
  
  
    - [UserService](#user.UserService)
  

- [Scalar Value Types](#scalar-value-types)



<a name="authentication/accountStatus.proto"/>
<p align="right"><a href="#top">Top</a></p>

## authentication/accountStatus.proto


 


<a name="authentication.AccountStatus"/>

### AccountStatus
Account status indicates the authentication method&#39;s status and is the low-level construct for implementing
expiring passwords, force-locking accounts or verify-your-email-address-before-you-can-use-this-account
type of functionality in a business logic.
There may be certain special states (like locked, see below) that cannot be reset from the outside and
need handling on our end (think failed payments that lock company accounts).

| Name | Number | Description |
| ---- | ------ | ----------- |
| DEFAULT | 0 |  |
| ACTIVATED | 1 | fully usable account |
| DEACTIVATED | 2 | deactivated from the outside |
| LOCKED | 3 | deactivated from the inside (password reset needed, payment pending, etc.) |
| PENDING | 4 |  |
| DELETED | 5 |  |


 

 

 



<a name="authentication/authenticationService.proto"/>
<p align="right"><a href="#top">Top</a></p>

## authentication/authenticationService.proto



<a name="authentication.ActivationTokenCredentials"/>

### ActivationTokenCredentials
ActivationTokenCredentials are used to provide a way of creating users on our
platform that need to finish signing up for themselves. They are used alongside
other credential messages and provide the following additional features:
  - issue short-lived temporary token (60 seconds or less) without any
    backend permissions in order to fetch information that&#39;s been added
    for them (most notably, their user profile or information about the
    company they are joining like the company&#39;s display name)
  - activate/create the authentication method they were assigned
    to be used with (like UsernamePasswordCredentials)
  - expire after a customizable amount of time (30 days by default)
  - can be deactivated/blocked before they expire (just like any other
    authentication method we have)
  - when creating activation token credentials pass *expiry*, *keyType* and *principal*


| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| activationToken | [string](#string) |  |  |
| code | [string](#string) |  | password, should be something random |
| companyId | [string](#string) |  |  |
| expiry | [int64](#int64) |  | optional, unix timestamp; will default to 30 days from the time the activation token credentials are created, accepts something in the far future (subject to change) |
| keyType | [string](#string) |  | the key type to register this for (password, ldap, etc.) |
| principal | [string](#string) |  | the principal for the key type above, for UsernamePasswordCredentials it&#39;s the username, for AuthorizationCodeCredentials it&#39;d be the client ID |






<a name="authentication.AuthMethodInfoList"/>

### AuthMethodInfoList



| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| list | [AuthenticationMethodInformation](#authentication.AuthenticationMethodInformation) | repeated |  |






<a name="authentication.AuthenticationCreateReply"/>

### AuthenticationCreateReply
AuthenticationCreateReply contains information about the success or
failure of the AuthenticationCreate operation.


| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| replyInfo | [common.ReplyInfo](#common.ReplyInfo) |  |  |
| userId | [string](#string) |  |  |






<a name="authentication.AuthenticationCreateRequest"/>

### AuthenticationCreateRequest
AuthenticationCreateRequest carries all the required information
to create authentication methods for a user.
This is only used if the user ID is not known and should be picked
by the authentication service, otherwise use the AuthenticationUpdateRequest.


| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| accessInfo | [common.AccessInfo](#common.AccessInfo) |  |  |
| authenticationRequest | [AuthenticationRequest](#authentication.AuthenticationRequest) |  |  |






<a name="authentication.AuthenticationInformationReply"/>

### AuthenticationInformationReply
AuthenticationInformationReply contains information about a user&#39;s authentication methods
and their permissions.


| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| replyInfo | [common.ReplyInfo](#common.ReplyInfo) |  |  |
| userId | [string](#string) |  |  |
| permissions | [AuthenticationInformationReply.PermissionsEntry](#authentication.AuthenticationInformationReply.PermissionsEntry) | repeated | permissions of the user |
| authenticationMethodInformation | [AuthenticationInformationReply.AuthenticationMethodInformationEntry](#authentication.AuthenticationInformationReply.AuthenticationMethodInformationEntry) | repeated | auth type (password, ldap, refresh_token, password_reset, authorization_code etc.) =&gt; AuthenticationMethodInformation |






<a name="authentication.AuthenticationInformationReply.AuthenticationMethodInformationEntry"/>

### AuthenticationInformationReply.AuthenticationMethodInformationEntry



| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| key | [string](#string) |  |  |
| value | [AuthenticationMethodInformation](#authentication.AuthenticationMethodInformation) |  |  |






<a name="authentication.AuthenticationInformationReply.PermissionsEntry"/>

### AuthenticationInformationReply.PermissionsEntry



| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| key | [int32](#int32) |  |  |
| value | [bool](#bool) |  |  |






<a name="authentication.AuthenticationInformationRequest"/>

### AuthenticationInformationRequest
Use AuthenticationInformationRequest to find out about a user&#39;s authentication methods
and their permissions.


| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| accessInfo | [common.AccessInfo](#common.AccessInfo) |  |  |
| userId | [string](#string) |  |  |






<a name="authentication.AuthenticationMethodInformation"/>

### AuthenticationMethodInformation



| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| type | [string](#string) |  |  |
| principal | [string](#string) |  |  |
| companyId | [string](#string) |  |  |
| userId | [string](#string) |  |  |
| permissions | [AuthenticationMethodInformation.PermissionsEntry](#authentication.AuthenticationMethodInformation.PermissionsEntry) | repeated | permissions of the user |
| accountStatus | [AccountStatus](#authentication.AccountStatus) |  |  |
| metadata | [AuthenticationMethodInformation.MetadataEntry](#authentication.AuthenticationMethodInformation.MetadataEntry) | repeated | returns metadata associated with the authentication method found for the authentication |






<a name="authentication.AuthenticationMethodInformation.MetadataEntry"/>

### AuthenticationMethodInformation.MetadataEntry



| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| key | [string](#string) |  |  |
| value | [string](#string) |  |  |






<a name="authentication.AuthenticationMethodInformation.PermissionsEntry"/>

### AuthenticationMethodInformation.PermissionsEntry



| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| key | [int32](#int32) |  |  |
| value | [bool](#bool) |  |  |






<a name="authentication.AuthenticationReply"/>

### AuthenticationReply
AuthenticationReply contains information about the response.


| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| replyInfo | [common.ReplyInfo](#common.ReplyInfo) |  |  |
| accessToken | [bytes](#bytes) |  |  |
| expiresAt | [int64](#int64) |  | timestamp of token expiration |
| refreshToken | [string](#string) |  | exchange for a new access token by using the refresh token grant |
| userId | [string](#string) |  |  |
| permissions | [AuthenticationReply.PermissionsEntry](#authentication.AuthenticationReply.PermissionsEntry) | repeated | permissions of the access token (map to names using the common.BackendPermission enum keys) |
| accountStatus | [AccountStatus](#authentication.AccountStatus) |  |  |






<a name="authentication.AuthenticationReply.PermissionsEntry"/>

### AuthenticationReply.PermissionsEntry



| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| key | [int32](#int32) |  |  |
| value | [bool](#bool) |  |  |






<a name="authentication.AuthenticationRequest"/>

### AuthenticationRequest
AuthenticationRequest contains everything needed to authenticate a user on our platform.


| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| requestId | [string](#string) |  |  |
| usernamePasswordCredentials | [UsernamePasswordCredentials](#authentication.UsernamePasswordCredentials) |  | password grant |
| authorizationCodeCredentials | [AuthorizationCodeCredentials](#authentication.AuthorizationCodeCredentials) |  | authorization code grant |
| refreshTokenCredentials | [RefreshTokenCredentials](#authentication.RefreshTokenCredentials) |  | refresh token grant |
| ldapCredentials | [LdapCredentials](#authentication.LdapCredentials) |  | external LDAP token grant |
| guestAccessCredentials | [GuestAccessCredentials](#authentication.GuestAccessCredentials) |  | guest access token grant |
| activationTokenCredentials | [ActivationTokenCredentials](#authentication.ActivationTokenCredentials) |  | activation token grant |
| companySwitchCredentials | [CompanySwitchCredentials](#authentication.CompanySwitchCredentials) |  | company switch grant |
| permissions | [AuthenticationRequest.PermissionsEntry](#authentication.AuthenticationRequest.PermissionsEntry) | repeated | permissions to assign to the user or access token (map to names using the common.BackendPermission enum keys) |
| accountStatus | [AccountStatus](#authentication.AccountStatus) |  | set to the desired account status (default is ignored) |
| metadata | [AuthenticationRequest.MetadataEntry](#authentication.AuthenticationRequest.MetadataEntry) | repeated | use and set only when this message is used for creating/updating authentication methods (ignored otherwise) |






<a name="authentication.AuthenticationRequest.MetadataEntry"/>

### AuthenticationRequest.MetadataEntry



| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| key | [string](#string) |  |  |
| value | [string](#string) |  |  |






<a name="authentication.AuthenticationRequest.PermissionsEntry"/>

### AuthenticationRequest.PermissionsEntry



| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| key | [int32](#int32) |  |  |
| value | [bool](#bool) |  |  |






<a name="authentication.AuthenticationUpdateRequest"/>

### AuthenticationUpdateRequest
AuthenticationUpdateRequest carries all the required information
on how to update a user&#39;s authentication methods.


| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| accessInfo | [common.AccessInfo](#common.AccessInfo) |  |  |
| removeAll | [bool](#bool) |  | removes all the user&#39;s associated authentication methods |
| userId | [string](#string) |  |  |
| authenticationRequest | [AuthenticationRequest](#authentication.AuthenticationRequest) |  |  |






<a name="authentication.AuthorizationCodeCredentials"/>

### AuthorizationCodeCredentials
AuthorizationCodeCredentials are used for external services in need of elevated privileges inside
our platform. That&#39;s because they may need to be handled/monitored differently than regular users.


| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| clientId | [string](#string) |  | identifier (synonymous with a username) |
| code | [string](#string) |  | API key or client secret |
| companyId | [string](#string) |  | company identifier |
| redirectUri | [string](#string) |  | optional, for future use |
| currentCode | [string](#string) |  | To update an existing authorization code, pass it here. |






<a name="authentication.CompanyCreateReply"/>

### CompanyCreateReply



| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| replyInfo | [common.ReplyInfo](#common.ReplyInfo) |  |  |
| userId | [string](#string) |  |  |
| companyId | [string](#string) |  |  |






<a name="authentication.CompanyCreateRequest"/>

### CompanyCreateRequest
CompanyCreateRequest is used to create a new company.
Creating a company involves creating an admin user for it,
as well as a user profile for that user.


| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| accessInfo | [common.AccessInfo](#common.AccessInfo) |  |  |
| user | [common.User](#common.User) |  |  |
| authenticationRequest | [AuthenticationRequest](#authentication.AuthenticationRequest) |  |  |
| companyId | [string](#string) |  |  |






<a name="authentication.CompanySwitchCredentials"/>

### CompanySwitchCredentials
CompanySwitchCredentials are used to switch to another company the user
is also a part of. All fields are required.
Use the ListAuthentications endpoint to list all the companies you&#39;re a part of.


| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| accessToken | [bytes](#bytes) |  | a valid access token |
| refreshToken | [string](#string) |  | a valid refresh token for the access token above |
| companyId | [string](#string) |  | the company to switch to |
| principal | [string](#string) |  | identifier used to create the access/refresh token |






<a name="authentication.ExternalOauth2Credentials"/>

### ExternalOauth2Credentials
ExternalOauth2Credentials are used to authenticate against an external OAuth2 provider
(Google, Facebook etc.). An internal user with a unique user ID is still generated to tie into our platform.


| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| Oauth2Uid | [string](#string) |  | external ID of the provider&#39;s user |
| Oauth2Provider | [string](#string) |  | provider to use for checking token validity (tbd) |
| Oauth2Token | [string](#string) |  | access token (short-lived) |
| Oauth2Refresh | [string](#string) |  | refresh token (OAuth2 code flow, long-lived) |
| Oauth2Expiry | [int64](#int64) |  | Unix timestamp of access token expiration |






<a name="authentication.GuestAccessCredentials"/>

### GuestAccessCredentials
GuestAccessCredentials are used to provide a way for the platform to accept guests into a room or
temporary access to other services like our web apps or the file service (among others).
A user ID is auto-generated upon creation of guest access credentials and no user profile will be created.
Services that need to accept user IDs should also accept metadata maps where a display name can be added
under the guest user&#39;s ID as the key. Guest users usually don&#39;t have a lot of backend permissions, although
that&#39;s certainly possible.
  - when creating guest access credentials for a particular guest in a particular room pass *email*, *roomId*, *displayName*, *expiry* and *shareable*


| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| userId | [string](#string) |  | only pass when authenticating; auth service will not accept this when creating guest access credentials |
| code | [string](#string) |  | password, should be something random |
| companyId | [string](#string) |  |  |
| email | [string](#string) |  | pass these when creating guest access credentials for a particular guest in a particular room

/ optional but recommended (see displayName field) |
| roomId | [string](#string) |  | for now this is required when creating guest access credentials (subject to change) |
| displayName | [string](#string) |  | optional; the email address is used if not set or, if that&#39;s not set either, &#34;Unnamed guest&#34; is used, can also be used when authenticating; added to the access token |
| expiry | [int64](#int64) |  | optional, unix timestamp; will default to 30 days from the time the guest access credentials are created, accepts something in the far future (subject to change) |
| shareable | [bool](#bool) |  | provides shareable guest access credentials to be used multiple times |






<a name="authentication.LdapCredentials"/>

### LdapCredentials
LdapCredentials are used to authenticate via an external LDAP server. Depending on the way the LDAP
is set up it might not be necessary to pass all properties.


| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| username | [string](#string) |  |  |
| password | [string](#string) |  |  |
| companyId | [string](#string) |  |  |
| bindDN | [string](#string) |  | denotes the bind DN to use for authenticating (leave empty if in doubt) |
| searchDN | [string](#string) |  | denotes the search DN to use for re-authenticating with a refresh token/looking up profile information outside of an authentication context |






<a name="authentication.ListAuthenticationsReply"/>

### ListAuthenticationsReply



| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| replyInfo | [common.ReplyInfo](#common.ReplyInfo) |  |  |
| maxOffset | [uint32](#uint32) |  | returns the maximum offset you can pass for the next page; you&#39;ve reached the / end when the offset you passed in the request is equal to the max offset returned. |
| results | [ListAuthenticationsReply.ResultsEntry](#authentication.ListAuthenticationsReply.ResultsEntry) | repeated | user ID =&gt; AuthMethodInfoList |






<a name="authentication.ListAuthenticationsReply.ResultsEntry"/>

### ListAuthenticationsReply.ResultsEntry



| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| key | [string](#string) |  |  |
| value | [AuthMethodInfoList](#authentication.AuthMethodInfoList) |  |  |






<a name="authentication.ListAuthenticationsRequest"/>

### ListAuthenticationsRequest
ListAuthenticationsRequest is used to list authentication methods.
You may list by a variety of different attributes – these are also
combinable, i.e. requesting the authentication methods of a list of user IDs
of a specific key type in a specific state (pending/activated/locked).
Depending on your permissions, some of these will be invalid or disallowed.
For normal users only their own authentication methods will be returned
(matching the user ID in their token).


| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| accessInfo | [common.AccessInfo](#common.AccessInfo) |  |  |
| limit | [uint32](#uint32) |  | default: 100 max: 1000 |
| offset | [uint32](#uint32) |  | default: 0 |
| principal | [string](#string) | repeated | filter by principals |
| userIdList | [string](#string) | repeated | filter by list of user IDs |
| accountStatus | [AccountStatus](#authentication.AccountStatus) | repeated | filter by account status |
| keyType | [string](#string) | repeated | filter by authentication type (password, ldap, refresh_token, password_reset, authorization_code etc.) |
| companyId | [string](#string) | repeated | filter by users in a company |
| onlyEligibleForCompanySwitch | [bool](#bool) |  | filter by those eligible for company switch |






<a name="authentication.PasswordResetReply"/>

### PasswordResetReply



| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| replyInfo | [common.ReplyInfo](#common.ReplyInfo) |  |  |
| userId | [string](#string) |  |  |
| passwordResetToken | [string](#string) |  |  |






<a name="authentication.PasswordResetRequest"/>

### PasswordResetRequest
PasswordResetRequest is used to reset a user&#39;s password.
Although it is an implementation detail it is encouraged to
only return the password reset token in the response if the
user doing the resetting (i.e. an admin user) is part of
the same company as the user whose password is being reset.
Otherwise, the authentication service should handle emailing
the password reset token itself.


| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| accessInfo | [common.AccessInfo](#common.AccessInfo) |  |  |
| username | [string](#string) |  |  |
| companyId | [string](#string) |  |  |






<a name="authentication.RefreshTokenCredentials"/>

### RefreshTokenCredentials
RefreshTokenCredentials are used to exchange a refresh token for a new access token.
Refresh tokens usually have a validity of 30 days. They are safe to pass to 3rd party applications integrating with us if,
and only if, they are created with a limited set of permissions when originally authenticating. The access token must be
passed and using a refresh token will then return an access token with at most those permissions originally granted.
If permissions were revoked for that user in the meantime, these will not be included in the new access token as well.


| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| principal | [string](#string) |  | identifier used to create the access token |
| refreshToken | [string](#string) |  |  |
| companyId | [string](#string) |  |  |
| accessToken | [bytes](#bytes) |  | an access token (is usually expired but doesn&#39;t have to be) |






<a name="authentication.SignAccessTokenRequest"/>

### SignAccessTokenRequest
SignAccessTokenRequest is used to sign credentials without authenticating.


| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| accessInfo | [common.AccessInfo](#common.AccessInfo) |  |  |
| accessToken | [common.AccessToken](#common.AccessToken) |  |  |






<a name="authentication.UsernamePasswordCredentials"/>

### UsernamePasswordCredentials
UsernamePasswordCredentials are used to authenticate using a username and password.


| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| username | [string](#string) |  |  |
| password | [string](#string) |  |  |
| companyId | [string](#string) |  |  |
| current | [string](#string) |  | to update credentials pass the current password here |
| passwordResetToken | [string](#string) |  | to reset the user&#39;s password pass a reset token here |





 

 

 


<a name="authentication.AuthenticationService"/>

### AuthenticationService
AuthenticationService is used to authenticate against our platform using different
authentication methods, check whether you are still authenticated as well as
update your authentication credentials upon user updates.

| Method Name | Request Type | Response Type | Description |
| ----------- | ------------ | ------------- | ------------|
| authenticate | [AuthenticationRequest](#authentication.AuthenticationRequest) | [AuthenticationReply](#authentication.AuthenticationRequest) |  |
| signAccessToken | [SignAccessTokenRequest](#authentication.SignAccessTokenRequest) | [AuthenticationReply](#authentication.SignAccessTokenRequest) |  |
| isAuthenticated | [.common.AccessInfo](#common.AccessInfo) | [.common.ReplyInfo](#common.AccessInfo) |  |
| requestPasswordReset | [PasswordResetRequest](#authentication.PasswordResetRequest) | [PasswordResetReply](#authentication.PasswordResetRequest) |  |
| listAuthentications | [ListAuthenticationsRequest](#authentication.ListAuthenticationsRequest) | [ListAuthenticationsReply](#authentication.ListAuthenticationsRequest) |  |
| authenticationCreate | [AuthenticationCreateRequest](#authentication.AuthenticationCreateRequest) | [AuthenticationCreateReply](#authentication.AuthenticationCreateRequest) |  |
| authenticationUpdate | [AuthenticationUpdateRequest](#authentication.AuthenticationUpdateRequest) | [.common.ReplyInfo](#authentication.AuthenticationUpdateRequest) |  |
| authenticationInformation | [AuthenticationInformationRequest](#authentication.AuthenticationInformationRequest) | [AuthenticationInformationReply](#authentication.AuthenticationInformationRequest) |  |
| companyCreate | [CompanyCreateRequest](#authentication.CompanyCreateRequest) | [CompanyCreateReply](#authentication.CompanyCreateRequest) |  |

 



<a name="businessLogicService/businessLogicService.proto"/>
<p align="right"><a href="#top">Top</a></p>

## businessLogicService/businessLogicService.proto



<a name="businessLogicService.CompanyPermissionGroupsListReply"/>

### CompanyPermissionGroupsListReply



| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| replyInfo | [common.ReplyInfo](#common.ReplyInfo) |  |  |
| permissionGroups | [CompanyPermissionGroupsListReply.PermissionGroupsEntry](#businessLogicService.CompanyPermissionGroupsListReply.PermissionGroupsEntry) | repeated |  |






<a name="businessLogicService.CompanyPermissionGroupsListReply.PermissionGroupsEntry"/>

### CompanyPermissionGroupsListReply.PermissionGroupsEntry



| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| key | [string](#string) |  |  |
| value | [PermissionGroup](#businessLogicService.PermissionGroup) |  |  |






<a name="businessLogicService.CompanyPermissionGroupsListRequest"/>

### CompanyPermissionGroupsListRequest



| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| accessInfo | [common.AccessInfo](#common.AccessInfo) |  |  |






<a name="businessLogicService.FavoritesListReply"/>

### FavoritesListReply



| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| replyInfo | [common.ReplyInfo](#common.ReplyInfo) |  |  |
| roomIds | [string](#string) | repeated |  |






<a name="businessLogicService.FavoritesListRequest"/>

### FavoritesListRequest



| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| accessInfo | [common.AccessInfo](#common.AccessInfo) |  |  |
| userId | [string](#string) |  | will default to the caller&#39;s user ID in the token if empty |






<a name="businessLogicService.FavoritesUpdateReply"/>

### FavoritesUpdateReply



| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| replyInfo | [common.ReplyInfo](#common.ReplyInfo) |  |  |






<a name="businessLogicService.FavoritesUpdateRequest"/>

### FavoritesUpdateRequest



| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| accessInfo | [common.AccessInfo](#common.AccessInfo) |  |  |
| userId | [string](#string) |  |  |
| roomIds | [FavoritesUpdateRequest.RoomIdsEntry](#businessLogicService.FavoritesUpdateRequest.RoomIdsEntry) | repeated |  |






<a name="businessLogicService.FavoritesUpdateRequest.RoomIdsEntry"/>

### FavoritesUpdateRequest.RoomIdsEntry



| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| key | [string](#string) |  |  |
| value | [bool](#bool) |  |  |






<a name="businessLogicService.PermissionGroup"/>

### PermissionGroup



| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| name | [string](#string) |  |  |
| order | [uint32](#uint32) |  |  |
| permissions | [common.Permissions](#common.Permissions) |  |  |





 

 

 


<a name="businessLogicService.BusinessLogicService"/>

### BusinessLogicService


| Method Name | Request Type | Response Type | Description |
| ----------- | ------------ | ------------- | ------------|
| favoritesList | [FavoritesListRequest](#businessLogicService.FavoritesListRequest) | [FavoritesListReply](#businessLogicService.FavoritesListRequest) |  |
| favoritesUpdate | [FavoritesUpdateRequest](#businessLogicService.FavoritesUpdateRequest) | [FavoritesUpdateReply](#businessLogicService.FavoritesUpdateRequest) |  |
| permissionGroupsList | [CompanyPermissionGroupsListRequest](#businessLogicService.CompanyPermissionGroupsListRequest) | [CompanyPermissionGroupsListReply](#businessLogicService.CompanyPermissionGroupsListRequest) |  |

 



<a name="common/accessInfo.proto"/>
<p align="right"><a href="#top">Top</a></p>

## common/accessInfo.proto



<a name="common.AccessInfo"/>

### AccessInfo



| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| requestId | [string](#string) |  |  |
| accessToken | [bytes](#bytes) |  |  |
| includeMetadata | [bool](#bool) |  |  |
| returnObjectIdsOnly | [bool](#bool) |  |  |





 

 

 

 



<a name="common/accessToken.proto"/>
<p align="right"><a href="#top">Top</a></p>

## common/accessToken.proto



<a name="common.AccessToken"/>

### AccessToken



| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| userId | [string](#string) |  |  |
| companyId | [string](#string) |  |  |
| expiresAt | [int64](#int64) |  |  |
| permissions | [AccessToken.PermissionsEntry](#common.AccessToken.PermissionsEntry) | repeated | use common.BackendPermission enum values as keys and set the value to true |
| isGuest | [bool](#bool) |  |  |
| displayName | [string](#string) |  | used by services when isGuest is true |
| basePermissionsId | [string](#string) |  | used for having shareable guest access credentials |
| extensionDisallowed | [bool](#bool) |  | if true this access token cannot be used to sign another access token with an expiration date bigger than its own |






<a name="common.AccessToken.PermissionsEntry"/>

### AccessToken.PermissionsEntry



| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| key | [int32](#int32) |  |  |
| value | [bool](#bool) |  |  |





 

 

 

 



<a name="common/chat.proto"/>
<p align="right"><a href="#top">Top</a></p>

## common/chat.proto



<a name="common.ChatHistoryReply"/>

### ChatHistoryReply



| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| replyInfo | [ReplyInfo](#common.ReplyInfo) |  |  |
| chatMessage | [ChatMessage](#common.ChatMessage) | repeated |  |






<a name="common.ChatHistoryRequest"/>

### ChatHistoryRequest



| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| accessInfo | [AccessInfo](#common.AccessInfo) |  |  |
| receiver | [string](#string) |  |  |
| from | [int64](#int64) |  |  |
| to | [int64](#int64) |  |  |






<a name="common.ChatMessage"/>

### ChatMessage



| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| sender | [string](#string) |  | user-uuid |
| receiver | [string](#string) | repeated | roomid |
| time | [int64](#int64) |  |  |
| text | [string](#string) |  |  |
| broadcast | [bool](#bool) |  |  |
| id | [string](#string) |  | unique message id, set by server |
| subRoomId | [string](#string) |  | subroomId that this message was sent from (set by sender) |






<a name="common.ChatSendReply"/>

### ChatSendReply



| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| replyInfo | [ReplyInfo](#common.ReplyInfo) |  |  |






<a name="common.ChatSendRequest"/>

### ChatSendRequest



| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| accessInfo | [AccessInfo](#common.AccessInfo) |  |  |
| chatMessage | [ChatMessage](#common.ChatMessage) |  |  |





 

 

 

 



<a name="common/company.proto"/>
<p align="right"><a href="#top">Top</a></p>

## common/company.proto



<a name="common.Branding"/>

### Branding



| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| title | [string](#string) |  | title is shown next to the logo inside the business app |
| navbarBg | [string](#string) |  | background of the navigation bar |
| logoURL | [string](#string) |  | url to a logo file (png only) |
| logoHeight | [int64](#int64) |  | width of the logo |
| logoWidth | [int64](#int64) |  | height of the logo |
| enabled | [bool](#bool) |  | whether branding is enabled |
| logoAlternativeURL | [string](#string) |  | url to an alternative logo file (used on login form, png only) |






<a name="common.Company"/>

### Company



| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| displayName | [string](#string) |  | display name of a company (e.g. used inside the company dropdown) |
| ownerId | [string](#string) |  | email of the user that created the company |
| createdAt | [int64](#int64) |  | date of creation |
| branding | [Branding](#common.Branding) |  | branding |
| metadata | [Company.MetadataEntry](#common.Company.MetadataEntry) | repeated |  |






<a name="common.Company.MetadataEntry"/>

### Company.MetadataEntry



| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| key | [string](#string) |  |  |
| value | [string](#string) |  |  |





 

 

 

 



<a name="common/permissions.proto"/>
<p align="right"><a href="#top">Top</a></p>

## common/permissions.proto



<a name="common.Permissions"/>

### Permissions



| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| admin | [bool](#bool) |  | default for bool is false |
| voice | [bool](#bool) |  |  |
| video | [bool](#bool) |  |  |
| promote | [bool](#bool) |  |  |
| join | [bool](#bool) |  |  |
| screen | [bool](#bool) |  |  |
| vip | [bool](#bool) |  |  |
| subroomManage | [bool](#bool) |  |  |
| subroomCreatePublic | [bool](#bool) |  |  |
| subroomCreatePrivate | [bool](#bool) |  |  |
| chat | [bool](#bool) |  |  |
| chatBroadcast | [bool](#bool) |  |  |
| fileAdmin | [bool](#bool) |  |  |
| fileUpload | [bool](#bool) |  |  |
| fileList | [bool](#bool) |  |  |
| fairUse | [bool](#bool) |  |  |
| action | [bool](#bool) |  |  |
| remove | [bool](#bool) |  | workaround for python&#39;s inability to handle maps with null-values |





 


<a name="common.BackendPermission"/>

### BackendPermission


| Name | Number | Description |
| ---- | ------ | ----------- |
| UNSET | 0 |  |
| USER_CREATE | 1 |  |
| USER_SHOW | 2 |  |
| USER_INVITE | 3 |  |
| USER_LIST | 4 |  |
| USER_ADMIN | 5 |  |
| GRANT_PERMISSIONS | 6 |  |
| COMPANY_CREATE | 7 |  |
| COMPANY_LIST | 8 | list your own companies |
| COMPANY_ADMIN | 9 | administrate all companies (works for alfatraining-internal only) |
| ROOM_CREATE | 10 |  |
| ROOM_LIST | 13 |  |
| ROOM_ADMIN | 15 |  |
| NONE | 999 | set this to strip access tokens of all their permissions |



<a name="common.RoomPermission"/>

### RoomPermission


| Name | Number | Description |
| ---- | ------ | ----------- |
| _ | 0 |  |
| ADMIN | 1 |  |
| VOICE | 2 |  |
| VIDEO | 3 |  |
| PROMOTE | 4 |  |
| JOIN | 5 |  |
| SCREEN | 6 |  |
| VIP | 7 |  |
| SUBROOM_MANAGE | 8 |  |
| SUBROOM_CREATE_PUBLIC | 9 |  |
| SUBROOM_CREATE_PRIVATE | 15 |  |
| CHAT | 10 |  |
| CHAT_BROADCAST | 11 |  |
| FILE_ADMIN | 20 |  |
| FILE_UPLOAD | 21 |  |
| FILE_LIST | 22 |  |
| FAIR_USE | 25 |  |
| ACTION | 30 |  |


 

 

 



<a name="common/replyInfo.proto"/>
<p align="right"><a href="#top">Top</a></p>

## common/replyInfo.proto



<a name="common.ReplyInfo"/>

### ReplyInfo



| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| requestId | [string](#string) |  |  |
| statusCode | [ReplyStatusCode](#common.ReplyStatusCode) |  |  |
| statusMessage | [string](#string) |  |  |





 


<a name="common.ReplyStatusCode"/>

### ReplyStatusCode
rational behind the status code values:
there are status codes which do not indicate an error... those codes have a value LESS than 1000
in contrast, any code with 1000 or more indicates an error of some sort
[ks-03-2017]: alfatraining/proto#20: we decided that the range 500-999 is reserved for warnings
this means that codes in this range do NOT indicate success NOR unrecoverable error

| Name | Number | Description |
| ---- | ------ | ----------- |
| OK | 0 |  |
| ACCEPTED | 3 |  |
| WELCOME | 4 |  |
| PING | 1 |  |
| PONG | 2 |  |
| PARTIAL_ERROR | 5 | for situations where multiple entities are transferred in one go, this status code can be used to indicate partial failures in replies |
| INTERNAL_ERROR | 1000 |  |
| AUTHENTICATION_ERROR | 1002 |  |
| ACCOUNT_STATUS_ERROR | 1003 | used by the authentication service to indicate errors concerning the account status (deactivated, deleted, locked) |
| PROTOCOL_ERROR | 1004 | used by hydra when a message is not formatted correctly, and maybe other services will have similar requirements |
| NOT_IMPLEMENTED | 501 | returned when the action/event is not implemented by the service but it is not necessarily an invalid action |
| ACTION_INVALID | 1005 |  |
| INSUFFICIENT_PERMISSIONS | 1006 |  |
| RANGE_ERROR | 1007 |  |
| HOSTNAME_INVALID | 1008 |  |
| REQUEST_ID_INVALID | 1009 |  |
| ACCESS_INFO_MISSING | 1040 |  |
| REQUEST_EMPTY | 1041 |  |
| VERSION_OUTDATED | 1042 |  |
| MAX_SIZE_EXCEEDED | 1043 | when a user supplied string is too large |
| RESPONSE_EMPTY | 1044 |  |
| NOT_FOUND | 1045 |  |
| REMOTE_ERROR | 1046 |  |
| TIMEOUT | 1047 |  |
| CANCELED | 1048 |  |
| TOKEN_OUTDATED | 1049 |  |
| QUOTA_EXCEEDED | 1060 | context dependent; on join room it is returned by engine when the room is full |
| USER_ID_INVALID | 1010 |  |
| USER_INVALID | 1011 |  |
| USER_OFFLINE | 1012 |  |
| OTHER_CLIENT_CONNECTED | 1013 | returned by engine to the currently connected client when a new client with the same userId joins the same room |
| USER_UPDATE | 12 |  |
| USER_LEAVE | 13 |  |
| ROOM_ID_INVALID | 1020 |  |
| ROOM_INVALID | 1021 |  |
| ROOM_HOST_INVALID | 1022 |  |
| ROOM_NOT_RUNNING | 1023 |  |
| SUBROOM_INVALID | 500 | returned when the client tries to join a subroom that does not exist |
| ROOM_NOT_FOUND | 1025 | used when the engine cannot find the room indicated via its room ID |
| OUT_OF_SLOTS_ROOM | 1030 |  |
| OUT_OF_SLOTS_USER | 1031 |  |
| OUT_OF_SLOTS_AUDIO | 1032 |  |
| OUT_OF_SLOTS_VIDEO | 1033 |  |
| STREAM_ID_INVALID | 1050 |  |
| STREAM_NOT_FOUND | 1051 |  |
| STREAM_HOST_INVALID | 1052 |  |
| HYDRA_STREAM_CLOSED | 104 | hydra is using 100-199 for ok and 1100-1199 for not ok |
| HYDRA_STREAM_CREATED | 105 |  |
| HYDRA_STREAM_TIMEOUT | 1100 |  |
| HYDRA_STREAM_ERROR | 1101 |  |
| HYDRA_CLIENT_TIMEOUT | 1102 | when client is disconnected because a specific amount of time passed without having any streams |


 

 

 



<a name="common/room.proto"/>
<p align="right"><a href="#top">Top</a></p>

## common/room.proto



<a name="common.Room"/>

### Room



| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| parentId | [string](#string) |  |  |
| displayName | [string](#string) |  |  |
| quotas | [RoomQuotas](#common.RoomQuotas) |  |  |
| allowSpectators | [bool](#bool) |  |  |
| metadata | [Room.MetadataEntry](#common.Room.MetadataEntry) | repeated | key =&gt; value |
| permissions | [Room.PermissionsEntry](#common.Room.PermissionsEntry) | repeated | userid =&gt; permissions |
| defaultPermissions | [Permissions](#common.Permissions) |  |  |
| subRooms | [Room.SubRoomsEntry](#common.Room.SubRoomsEntry) | repeated |  |






<a name="common.Room.MetadataEntry"/>

### Room.MetadataEntry



| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| key | [string](#string) |  |  |
| value | [string](#string) |  |  |






<a name="common.Room.PermissionsEntry"/>

### Room.PermissionsEntry



| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| key | [string](#string) |  |  |
| value | [Permissions](#common.Permissions) |  |  |






<a name="common.Room.SubRoomsEntry"/>

### Room.SubRoomsEntry



| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| key | [string](#string) |  |  |
| value | [SubRoom](#common.SubRoom) |  |  |






<a name="common.RoomQuotas"/>

### RoomQuotas



| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| activeParticipants | [uint32](#uint32) |  |  |






<a name="common.SubRoom"/>

### SubRoom



| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| displayName | [string](#string) |  |  |
| sort | [uint32](#uint32) |  | custom sorting key to determine the order of subrooms in the UI |
| remove | [bool](#bool) |  | workaround for python&#39;s inability to handle maps with null-values |





 

 

 

 



<a name="common/user.proto"/>
<p align="right"><a href="#top">Top</a></p>

## common/user.proto



<a name="common.User"/>

### User



| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| email | [string](#string) |  |  |
| metadata | [User.MetadataEntry](#common.User.MetadataEntry) | repeated |  |
| userProfile | [UserProfile](#common.UserProfile) |  |  |






<a name="common.User.MetadataEntry"/>

### User.MetadataEntry



| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| key | [string](#string) |  |  |
| value | [string](#string) |  |  |






<a name="common.UserProfile"/>

### UserProfile



| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| firstname | [string](#string) |  |  |
| lastname | [string](#string) |  |  |
| title | [string](#string) |  |  |





 

 

 

 



<a name="companyService/companyService.proto"/>
<p align="right"><a href="#top">Top</a></p>

## companyService/companyService.proto



<a name="companyService.CompanyAvailableReply"/>

### CompanyAvailableReply



| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| replyInfo | [common.ReplyInfo](#common.ReplyInfo) |  |  |
| companyId | [string](#string) |  |  |
| available | [bool](#bool) |  |  |






<a name="companyService.CompanyAvailableRequest"/>

### CompanyAvailableRequest
CompanyAvailableRequest can be used to check for the validity and availability of a company.
The display name is transformed into a company ID when creating the company and there are
some restrictions we apply (minimum length, no duplicates, some blacklisted IDs).


| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| displayName | [string](#string) |  |  |






<a name="companyService.CompanyCreateReply"/>

### CompanyCreateReply



| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| replyInfo | [common.ReplyInfo](#common.ReplyInfo) |  |  |
| companyId | [string](#string) |  |  |






<a name="companyService.CompanyCreateRequest"/>

### CompanyCreateRequest



| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| accessInfo | [common.AccessInfo](#common.AccessInfo) |  |  |
| company | [common.Company](#common.Company) |  |  |
| userCreateRequest | [user.UserCreateRequest](#user.UserCreateRequest) |  |  |






<a name="companyService.CompanyDestroyRequest"/>

### CompanyDestroyRequest



| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| accessInfo | [common.AccessInfo](#common.AccessInfo) |  |  |
| companyId | [string](#string) |  |  |






<a name="companyService.CompanyListReply"/>

### CompanyListReply



| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| replyInfo | [common.ReplyInfo](#common.ReplyInfo) |  |  |
| companies | [CompanyListReply.CompaniesEntry](#companyService.CompanyListReply.CompaniesEntry) | repeated | companyId =&gt; Company |
| orderedCompanyIDs | [string](#string) | repeated |  |






<a name="companyService.CompanyListReply.CompaniesEntry"/>

### CompanyListReply.CompaniesEntry



| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| key | [string](#string) |  |  |
| value | [common.Company](#common.Company) |  |  |






<a name="companyService.CompanyListRequest"/>

### CompanyListRequest
CompanyListRequest is used to list companies.
If the companyIdList is empty and the user does not have the COMPANY_[LIST/ADMIN]
permission the list returned will only contain the user&#39;s company according to their
company ID in the access token.
Users that have the COMPANY_[LIST/ADMIN] permission are returned a list of all the companies there are.
When providing a concrete set of company IDs, users without the COMPANY_[LIST/ADMIN] permission will
be returned a list of Company models that only have the displayName property set (except for their
own company which is returned in full (see above)).


| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| accessInfo | [common.AccessInfo](#common.AccessInfo) |  |  |
| companyIdList | [string](#string) | repeated | list of company IDs that you want to query for |
| companyIdFrom | [string](#string) |  |  |
| limit | [uint32](#uint32) |  |  |






<a name="companyService.CompanyUpdateRequest"/>

### CompanyUpdateRequest



| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| accessInfo | [common.AccessInfo](#common.AccessInfo) |  |  |
| company | [common.Company](#common.Company) |  |  |
| companyId | [string](#string) |  |  |





 

 

 


<a name="companyService.CompanyService"/>

### CompanyService
Manages companies within our platform.

| Method Name | Request Type | Response Type | Description |
| ----------- | ------------ | ------------- | ------------|
| companyList | [CompanyListRequest](#companyService.CompanyListRequest) | [CompanyListReply](#companyService.CompanyListRequest) |  |
| companyCreate | [CompanyCreateRequest](#companyService.CompanyCreateRequest) | [CompanyCreateReply](#companyService.CompanyCreateRequest) |  |
| companyUpdate | [CompanyUpdateRequest](#companyService.CompanyUpdateRequest) | [.common.ReplyInfo](#companyService.CompanyUpdateRequest) |  |
| companyDestroy | [CompanyDestroyRequest](#companyService.CompanyDestroyRequest) | [.common.ReplyInfo](#companyService.CompanyDestroyRequest) |  |
| companyAvailable | [CompanyAvailableRequest](#companyService.CompanyAvailableRequest) | [CompanyAvailableReply](#companyService.CompanyAvailableRequest) |  |

 



<a name="roomService/roomService.proto"/>
<p align="right"><a href="#top">Top</a></p>

## roomService/roomService.proto



<a name="roomService.CreateJoinLinkReply"/>

### CreateJoinLinkReply



| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| replyInfo | [common.ReplyInfo](#common.ReplyInfo) |  |  |
| joinLink | [string](#string) |  |  |






<a name="roomService.CreateJoinLinkRequest"/>

### CreateJoinLinkRequest
CreateJoinLink


| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| accessInfo | [common.AccessInfo](#common.AccessInfo) |  |  |
| roomId | [string](#string) |  |  |






<a name="roomService.RoomCreateReply"/>

### RoomCreateReply



| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| replyInfo | [common.ReplyInfo](#common.ReplyInfo) |  |  |
| roomId | [string](#string) |  |  |
| room | [common.Room](#common.Room) |  |  |






<a name="roomService.RoomCreateRequest"/>

### RoomCreateRequest
room create


| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| accessInfo | [common.AccessInfo](#common.AccessInfo) |  |  |
| room | [common.Room](#common.Room) |  |  |






<a name="roomService.RoomDestroyReply"/>

### RoomDestroyReply



| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| replyInfo | [common.ReplyInfo](#common.ReplyInfo) |  |  |






<a name="roomService.RoomDestroyRequest"/>

### RoomDestroyRequest
room destroy


| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| accessInfo | [common.AccessInfo](#common.AccessInfo) |  |  |
| roomId | [string](#string) |  |  |






<a name="roomService.RoomInfo"/>

### RoomInfo



| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| users | [RoomInfo.UsersEntry](#roomService.RoomInfo.UsersEntry) | repeated | key is user-uuid |






<a name="roomService.RoomInfo.UsersEntry"/>

### RoomInfo.UsersEntry



| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| key | [string](#string) |  |  |
| value | [UserInfo](#roomService.UserInfo) |  |  |






<a name="roomService.RoomListReply"/>

### RoomListReply



| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| replyInfo | [common.ReplyInfo](#common.ReplyInfo) |  |  |
| rooms | [RoomListReply.RoomsEntry](#roomService.RoomListReply.RoomsEntry) | repeated | key is room-uuid |






<a name="roomService.RoomListReply.RoomsEntry"/>

### RoomListReply.RoomsEntry



| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| key | [string](#string) |  |  |
| value | [common.Room](#common.Room) |  |  |






<a name="roomService.RoomListRequest"/>

### RoomListRequest
room list


| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| accessInfo | [common.AccessInfo](#common.AccessInfo) |  |  |
| limit | [uint32](#uint32) |  | default:100 max:1000 |
| offset | [uint32](#uint32) |  | default:0 |
| filterRoomIds | [string](#string) | repeated | list of room IDs that you want to query for |






<a name="roomService.RoomPermissionsReply"/>

### RoomPermissionsReply



| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| replyInfo | [common.ReplyInfo](#common.ReplyInfo) |  |  |
| permissions | [common.Permissions](#common.Permissions) |  |  |






<a name="roomService.RoomPermissionsRequest"/>

### RoomPermissionsRequest
RoomPermissions


| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| accessInfo | [common.AccessInfo](#common.AccessInfo) |  |  |
| userId | [string](#string) |  |  |
| roomId | [string](#string) |  |  |






<a name="roomService.RoomStatusReply"/>

### RoomStatusReply



| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| replyInfo | [common.ReplyInfo](#common.ReplyInfo) |  |  |
| rooms | [RoomStatusReply.RoomsEntry](#roomService.RoomStatusReply.RoomsEntry) | repeated | key is room-uuid |






<a name="roomService.RoomStatusReply.RoomsEntry"/>

### RoomStatusReply.RoomsEntry



| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| key | [string](#string) |  |  |
| value | [RoomInfo](#roomService.RoomInfo) |  |  |






<a name="roomService.RoomStatusRequest"/>

### RoomStatusRequest
room status


| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| accessInfo | [common.AccessInfo](#common.AccessInfo) |  |  |
| roomIds | [string](#string) | repeated |  |






<a name="roomService.RoomUpdateReply"/>

### RoomUpdateReply



| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| replyInfo | [common.ReplyInfo](#common.ReplyInfo) |  |  |






<a name="roomService.RoomUpdateRequest"/>

### RoomUpdateRequest
room update


| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| accessInfo | [common.AccessInfo](#common.AccessInfo) |  |  |
| roomId | [string](#string) |  |  |
| room | [common.Room](#common.Room) |  |  |
| removeDefaultPermissions | [bool](#bool) |  |  |






<a name="roomService.RoomsUpdateReply"/>

### RoomsUpdateReply
reply for updating multiple rooms at once (deprecated, see RoomsUpdateRequest)


| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| replyInfo | [common.ReplyInfo](#common.ReplyInfo) |  |  |
| updateReplies | [RoomsUpdateReply.UpdateRepliesEntry](#roomService.RoomsUpdateReply.UpdateRepliesEntry) | repeated | key is the room ID |






<a name="roomService.RoomsUpdateReply.UpdateRepliesEntry"/>

### RoomsUpdateReply.UpdateRepliesEntry



| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| key | [string](#string) |  |  |
| value | [common.ReplyInfo](#common.ReplyInfo) |  |  |






<a name="roomService.RoomsUpdateRequest"/>

### RoomsUpdateRequest
update multiple rooms in one go (deprecated)


| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| accessInfo | [common.AccessInfo](#common.AccessInfo) |  |  |
| roomsToUpdate | [RoomUpdateRequest](#roomService.RoomUpdateRequest) | repeated | access info should be ingnored in the individual RoomUpdateRequests |






<a name="roomService.UserInfo"/>

### UserInfo



| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| online | [bool](#bool) |  |  |





 

 

 


<a name="roomService.RoomService"/>

### RoomService


| Method Name | Request Type | Response Type | Description |
| ----------- | ------------ | ------------- | ------------|
| Create | [RoomCreateRequest](#roomService.RoomCreateRequest) | [RoomCreateReply](#roomService.RoomCreateRequest) | creates or replaces all values |
| Update | [RoomUpdateRequest](#roomService.RoomUpdateRequest) | [RoomUpdateReply](#roomService.RoomUpdateRequest) | adds or overwrites all values |
| UpdateRooms | [RoomsUpdateRequest](#roomService.RoomsUpdateRequest) | [RoomsUpdateReply](#roomService.RoomsUpdateRequest) | adds or overwrites all values for multiple rooms |
| List | [RoomListRequest](#roomService.RoomListRequest) | [RoomListReply](#roomService.RoomListRequest) | list all rooms which are accessible by the current user |
| Destroy | [RoomDestroyRequest](#roomService.RoomDestroyRequest) | [RoomDestroyReply](#roomService.RoomDestroyRequest) | deletes room and kicks all users |
| Status | [RoomStatusRequest](#roomService.RoomStatusRequest) | [RoomStatusReply](#roomService.RoomStatusRequest) | return mutable room information |
| Permissions | [RoomPermissionsRequest](#roomService.RoomPermissionsRequest) | [RoomPermissionsReply](#roomService.RoomPermissionsRequest) | returns user permissions for a room |
| CreateJoinLink | [CreateJoinLinkRequest](#roomService.CreateJoinLinkRequest) | [CreateJoinLinkReply](#roomService.CreateJoinLinkRequest) | creates a link to launch the client |

 



<a name="user/userService.proto"/>
<p align="right"><a href="#top">Top</a></p>

## user/userService.proto



<a name="user.UserCreateReply"/>

### UserCreateReply



| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| replyInfo | [common.ReplyInfo](#common.ReplyInfo) |  |  |
| userId | [string](#string) |  |  |






<a name="user.UserCreateRequest"/>

### UserCreateRequest



| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| accessInfo | [common.AccessInfo](#common.AccessInfo) |  |  |
| user | [common.User](#common.User) |  |  |
| authenticationRequest | [authentication.AuthenticationRequest](#authentication.AuthenticationRequest) |  |  |






<a name="user.UserDestroyRequest"/>

### UserDestroyRequest



| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| accessInfo | [common.AccessInfo](#common.AccessInfo) |  |  |
| userId | [string](#string) |  |  |






<a name="user.UserListReply"/>

### UserListReply



| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| replyInfo | [common.ReplyInfo](#common.ReplyInfo) |  |  |
| users | [UserListReply.UsersEntry](#user.UserListReply.UsersEntry) | repeated | userId =&gt; User |
| userIdList | [string](#string) | repeated |  |






<a name="user.UserListReply.UsersEntry"/>

### UserListReply.UsersEntry



| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| key | [string](#string) |  |  |
| value | [common.User](#common.User) |  |  |






<a name="user.UserListRequest"/>

### UserListRequest



| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| accessInfo | [common.AccessInfo](#common.AccessInfo) |  |  |
| userIdList | [string](#string) | repeated | list of user IDs that you want to query for |






<a name="user.UserProfileUpdateRequest"/>

### UserProfileUpdateRequest



| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| accessInfo | [common.AccessInfo](#common.AccessInfo) |  |  |
| userId | [string](#string) |  |  |
| userProfile | [common.UserProfile](#common.UserProfile) |  |  |






<a name="user.UserUpdateRequest"/>

### UserUpdateRequest



| Field | Type | Label | Description |
| ----- | ---- | ----- | ----------- |
| accessInfo | [common.AccessInfo](#common.AccessInfo) |  |  |
| user | [common.User](#common.User) |  |  |
| userId | [string](#string) |  |  |
| authenticationRequest | [authentication.AuthenticationRequest](#authentication.AuthenticationRequest) |  |  |





 

 

 


<a name="user.UserService"/>

### UserService
Manages user as well as user profile information on our platform.

| Method Name | Request Type | Response Type | Description |
| ----------- | ------------ | ------------- | ------------|
| userList | [UserListRequest](#user.UserListRequest) | [UserListReply](#user.UserListRequest) |  |
| userCreate | [UserCreateRequest](#user.UserCreateRequest) | [UserCreateReply](#user.UserCreateRequest) |  |
| userUpdate | [UserUpdateRequest](#user.UserUpdateRequest) | [.common.ReplyInfo](#user.UserUpdateRequest) |  |
| userDestroy | [UserDestroyRequest](#user.UserDestroyRequest) | [.common.ReplyInfo](#user.UserDestroyRequest) |  |
| userProfileUpdate | [UserProfileUpdateRequest](#user.UserProfileUpdateRequest) | [.common.ReplyInfo](#user.UserProfileUpdateRequest) |  |

 



## Scalar Value Types

| .proto Type | Notes | C++ Type | Java Type | Python Type |
| ----------- | ----- | -------- | --------- | ----------- |
| <a name="double" /> double |  | double | double | float |
| <a name="float" /> float |  | float | float | float |
| <a name="int32" /> int32 | Uses variable-length encoding. Inefficient for encoding negative numbers – if your field is likely to have negative values, use sint32 instead. | int32 | int | int |
| <a name="int64" /> int64 | Uses variable-length encoding. Inefficient for encoding negative numbers – if your field is likely to have negative values, use sint64 instead. | int64 | long | int/long |
| <a name="uint32" /> uint32 | Uses variable-length encoding. | uint32 | int | int/long |
| <a name="uint64" /> uint64 | Uses variable-length encoding. | uint64 | long | int/long |
| <a name="sint32" /> sint32 | Uses variable-length encoding. Signed int value. These more efficiently encode negative numbers than regular int32s. | int32 | int | int |
| <a name="sint64" /> sint64 | Uses variable-length encoding. Signed int value. These more efficiently encode negative numbers than regular int64s. | int64 | long | int/long |
| <a name="fixed32" /> fixed32 | Always four bytes. More efficient than uint32 if values are often greater than 2^28. | uint32 | int | int |
| <a name="fixed64" /> fixed64 | Always eight bytes. More efficient than uint64 if values are often greater than 2^56. | uint64 | long | int/long |
| <a name="sfixed32" /> sfixed32 | Always four bytes. | int32 | int | int |
| <a name="sfixed64" /> sfixed64 | Always eight bytes. | int64 | long | int/long |
| <a name="bool" /> bool |  | bool | boolean | boolean |
| <a name="string" /> string | A string must always contain UTF-8 encoded or 7-bit ASCII text. | string | String | str/unicode |
| <a name="bytes" /> bytes | May contain any arbitrary sequence of bytes. | string | ByteString | str |

