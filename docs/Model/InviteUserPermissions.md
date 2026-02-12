# # InviteUserPermissions

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**manage_company** | **bool** | If true, the user can manage company settings. Implies userAdmin, roomAdmin and userShow. |
**room_admin** | **bool** | If true, the user can create, update and delete any room. Implies roomList and roomCreate. |
**room_create** | **bool** | If true, the user can create rooms for their company. |
**room_list** | **bool** | If true, the user can list all rooms in their company. |
**user_admin** | **bool** | If true, the user can create, update and delete other users, send password reset mails and resend sign-up mails for new users. Implies userList. |
**user_list** | **bool** | If true, the user can list all users in their company. |
**user_show** | **bool** | If true, the user can see the user names of all users in rooms they can access. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
