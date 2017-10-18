<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: authentication/authenticationService.proto

namespace Alfatraining\Grpc\Authentication;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 **
 * AuthenticationRequest contains everything needed to authenticate a user on our platform.
 *
 * Generated from protobuf message <code>authentication.AuthenticationRequest</code>
 */
class AuthenticationRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string requestId = 2;</code>
     */
    private $requestId = '';
    /**
     * password grant
     *
     * Generated from protobuf field <code>.authentication.UsernamePasswordCredentials usernamePasswordCredentials = 6;</code>
     */
    private $usernamePasswordCredentials = null;
    /**
     * authorization code grant
     *
     * Generated from protobuf field <code>.authentication.AuthorizationCodeCredentials authorizationCodeCredentials = 7;</code>
     */
    private $authorizationCodeCredentials = null;
    /**
     * refresh token grant
     *
     * Generated from protobuf field <code>.authentication.RefreshTokenCredentials refreshTokenCredentials = 8;</code>
     */
    private $refreshTokenCredentials = null;
    /**
     * external LDAP token grant
     *
     * Generated from protobuf field <code>.authentication.LdapCredentials ldapCredentials = 9;</code>
     */
    private $ldapCredentials = null;
    /**
     * guest access token grant
     *
     * Generated from protobuf field <code>.authentication.GuestAccessCredentials guestAccessCredentials = 10;</code>
     */
    private $guestAccessCredentials = null;
    /**
     * activation token grant
     *
     * Generated from protobuf field <code>.authentication.ActivationTokenCredentials activationTokenCredentials = 11;</code>
     */
    private $activationTokenCredentials = null;
    /**
     * company switch grant
     *
     * Generated from protobuf field <code>.authentication.CompanySwitchCredentials companySwitchCredentials = 15;</code>
     */
    private $companySwitchCredentials = null;
    /**
     * permissions to assign to the user or access token (map to names using the common.BackendPermission enum keys)
     *
     * Generated from protobuf field <code>map<int32, bool> permissions = 12;</code>
     */
    private $permissions;
    /**
     * set to the desired account status (default is ignored)
     *
     * Generated from protobuf field <code>.authentication.AccountStatus accountStatus = 13;</code>
     */
    private $accountStatus = 0;
    /**
     * use and set only when this message is used for creating/updating authentication methods (ignored otherwise)
     *
     * Generated from protobuf field <code>map<string, string> metadata = 14;</code>
     */
    private $metadata;

    public function __construct() {
        \GPBMetadata\Authentication\AuthenticationService::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>string requestId = 2;</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->requestId;
    }

    /**
     * Generated from protobuf field <code>string requestId = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->requestId = $var;

        return $this;
    }

    /**
     * password grant
     *
     * Generated from protobuf field <code>.authentication.UsernamePasswordCredentials usernamePasswordCredentials = 6;</code>
     * @return \Alfatraining\Grpc\Authentication\UsernamePasswordCredentials
     */
    public function getUsernamePasswordCredentials()
    {
        return $this->usernamePasswordCredentials;
    }

    /**
     * password grant
     *
     * Generated from protobuf field <code>.authentication.UsernamePasswordCredentials usernamePasswordCredentials = 6;</code>
     * @param \Alfatraining\Grpc\Authentication\UsernamePasswordCredentials $var
     * @return $this
     */
    public function setUsernamePasswordCredentials($var)
    {
        GPBUtil::checkMessage($var, \Alfatraining\Grpc\Authentication\UsernamePasswordCredentials::class);
        $this->usernamePasswordCredentials = $var;

        return $this;
    }

    /**
     * authorization code grant
     *
     * Generated from protobuf field <code>.authentication.AuthorizationCodeCredentials authorizationCodeCredentials = 7;</code>
     * @return \Alfatraining\Grpc\Authentication\AuthorizationCodeCredentials
     */
    public function getAuthorizationCodeCredentials()
    {
        return $this->authorizationCodeCredentials;
    }

    /**
     * authorization code grant
     *
     * Generated from protobuf field <code>.authentication.AuthorizationCodeCredentials authorizationCodeCredentials = 7;</code>
     * @param \Alfatraining\Grpc\Authentication\AuthorizationCodeCredentials $var
     * @return $this
     */
    public function setAuthorizationCodeCredentials($var)
    {
        GPBUtil::checkMessage($var, \Alfatraining\Grpc\Authentication\AuthorizationCodeCredentials::class);
        $this->authorizationCodeCredentials = $var;

        return $this;
    }

    /**
     * refresh token grant
     *
     * Generated from protobuf field <code>.authentication.RefreshTokenCredentials refreshTokenCredentials = 8;</code>
     * @return \Alfatraining\Grpc\Authentication\RefreshTokenCredentials
     */
    public function getRefreshTokenCredentials()
    {
        return $this->refreshTokenCredentials;
    }

    /**
     * refresh token grant
     *
     * Generated from protobuf field <code>.authentication.RefreshTokenCredentials refreshTokenCredentials = 8;</code>
     * @param \Alfatraining\Grpc\Authentication\RefreshTokenCredentials $var
     * @return $this
     */
    public function setRefreshTokenCredentials($var)
    {
        GPBUtil::checkMessage($var, \Alfatraining\Grpc\Authentication\RefreshTokenCredentials::class);
        $this->refreshTokenCredentials = $var;

        return $this;
    }

    /**
     * external LDAP token grant
     *
     * Generated from protobuf field <code>.authentication.LdapCredentials ldapCredentials = 9;</code>
     * @return \Alfatraining\Grpc\Authentication\LdapCredentials
     */
    public function getLdapCredentials()
    {
        return $this->ldapCredentials;
    }

    /**
     * external LDAP token grant
     *
     * Generated from protobuf field <code>.authentication.LdapCredentials ldapCredentials = 9;</code>
     * @param \Alfatraining\Grpc\Authentication\LdapCredentials $var
     * @return $this
     */
    public function setLdapCredentials($var)
    {
        GPBUtil::checkMessage($var, \Alfatraining\Grpc\Authentication\LdapCredentials::class);
        $this->ldapCredentials = $var;

        return $this;
    }

    /**
     * guest access token grant
     *
     * Generated from protobuf field <code>.authentication.GuestAccessCredentials guestAccessCredentials = 10;</code>
     * @return \Alfatraining\Grpc\Authentication\GuestAccessCredentials
     */
    public function getGuestAccessCredentials()
    {
        return $this->guestAccessCredentials;
    }

    /**
     * guest access token grant
     *
     * Generated from protobuf field <code>.authentication.GuestAccessCredentials guestAccessCredentials = 10;</code>
     * @param \Alfatraining\Grpc\Authentication\GuestAccessCredentials $var
     * @return $this
     */
    public function setGuestAccessCredentials($var)
    {
        GPBUtil::checkMessage($var, \Alfatraining\Grpc\Authentication\GuestAccessCredentials::class);
        $this->guestAccessCredentials = $var;

        return $this;
    }

    /**
     * activation token grant
     *
     * Generated from protobuf field <code>.authentication.ActivationTokenCredentials activationTokenCredentials = 11;</code>
     * @return \Alfatraining\Grpc\Authentication\ActivationTokenCredentials
     */
    public function getActivationTokenCredentials()
    {
        return $this->activationTokenCredentials;
    }

    /**
     * activation token grant
     *
     * Generated from protobuf field <code>.authentication.ActivationTokenCredentials activationTokenCredentials = 11;</code>
     * @param \Alfatraining\Grpc\Authentication\ActivationTokenCredentials $var
     * @return $this
     */
    public function setActivationTokenCredentials($var)
    {
        GPBUtil::checkMessage($var, \Alfatraining\Grpc\Authentication\ActivationTokenCredentials::class);
        $this->activationTokenCredentials = $var;

        return $this;
    }

    /**
     * company switch grant
     *
     * Generated from protobuf field <code>.authentication.CompanySwitchCredentials companySwitchCredentials = 15;</code>
     * @return \Alfatraining\Grpc\Authentication\CompanySwitchCredentials
     */
    public function getCompanySwitchCredentials()
    {
        return $this->companySwitchCredentials;
    }

    /**
     * company switch grant
     *
     * Generated from protobuf field <code>.authentication.CompanySwitchCredentials companySwitchCredentials = 15;</code>
     * @param \Alfatraining\Grpc\Authentication\CompanySwitchCredentials $var
     * @return $this
     */
    public function setCompanySwitchCredentials($var)
    {
        GPBUtil::checkMessage($var, \Alfatraining\Grpc\Authentication\CompanySwitchCredentials::class);
        $this->companySwitchCredentials = $var;

        return $this;
    }

    /**
     * permissions to assign to the user or access token (map to names using the common.BackendPermission enum keys)
     *
     * Generated from protobuf field <code>map<int32, bool> permissions = 12;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getPermissions()
    {
        return $this->permissions;
    }

    /**
     * permissions to assign to the user or access token (map to names using the common.BackendPermission enum keys)
     *
     * Generated from protobuf field <code>map<int32, bool> permissions = 12;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setPermissions($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::INT32, \Google\Protobuf\Internal\GPBType::BOOL);
        $this->permissions = $arr;

        return $this;
    }

    /**
     * set to the desired account status (default is ignored)
     *
     * Generated from protobuf field <code>.authentication.AccountStatus accountStatus = 13;</code>
     * @return int
     */
    public function getAccountStatus()
    {
        return $this->accountStatus;
    }

    /**
     * set to the desired account status (default is ignored)
     *
     * Generated from protobuf field <code>.authentication.AccountStatus accountStatus = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setAccountStatus($var)
    {
        GPBUtil::checkEnum($var, \Alfatraining\Grpc\Authentication\AccountStatus::class);
        $this->accountStatus = $var;

        return $this;
    }

    /**
     * use and set only when this message is used for creating/updating authentication methods (ignored otherwise)
     *
     * Generated from protobuf field <code>map<string, string> metadata = 14;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * use and set only when this message is used for creating/updating authentication methods (ignored otherwise)
     *
     * Generated from protobuf field <code>map<string, string> metadata = 14;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setMetadata($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->metadata = $arr;

        return $this;
    }

}

