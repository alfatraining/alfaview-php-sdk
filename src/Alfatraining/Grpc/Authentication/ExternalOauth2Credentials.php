<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: authentication/authenticationService.proto

namespace Alfatraining\Grpc\Authentication;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 **
 * ExternalOauth2Credentials are used to authenticate against an external OAuth2 provider
 * (Google, Facebook etc.). An internal user with a unique user ID is still generated to tie into our platform.
 *
 * Generated from protobuf message <code>authentication.ExternalOauth2Credentials</code>
 */
class ExternalOauth2Credentials extends \Google\Protobuf\Internal\Message
{
    /**
     * external ID of the provider's user
     *
     * Generated from protobuf field <code>string Oauth2Uid = 1;</code>
     */
    private $Oauth2Uid = '';
    /**
     * provider to use for checking token validity (tbd)
     *
     * Generated from protobuf field <code>string Oauth2Provider = 2;</code>
     */
    private $Oauth2Provider = '';
    /**
     * access token (short-lived)
     *
     * Generated from protobuf field <code>string Oauth2Token = 3;</code>
     */
    private $Oauth2Token = '';
    /**
     * refresh token (OAuth2 code flow, long-lived)
     *
     * Generated from protobuf field <code>string Oauth2Refresh = 4;</code>
     */
    private $Oauth2Refresh = '';
    /**
     * Unix timestamp of access token expiration
     *
     * Generated from protobuf field <code>int64 Oauth2Expiry = 5;</code>
     */
    private $Oauth2Expiry = 0;

    public function __construct() {
        \GPBMetadata\Authentication\AuthenticationService::initOnce();
        parent::__construct();
    }

    /**
     * external ID of the provider's user
     *
     * Generated from protobuf field <code>string Oauth2Uid = 1;</code>
     * @return string
     */
    public function getOauth2Uid()
    {
        return $this->Oauth2Uid;
    }

    /**
     * external ID of the provider's user
     *
     * Generated from protobuf field <code>string Oauth2Uid = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setOauth2Uid($var)
    {
        GPBUtil::checkString($var, True);
        $this->Oauth2Uid = $var;

        return $this;
    }

    /**
     * provider to use for checking token validity (tbd)
     *
     * Generated from protobuf field <code>string Oauth2Provider = 2;</code>
     * @return string
     */
    public function getOauth2Provider()
    {
        return $this->Oauth2Provider;
    }

    /**
     * provider to use for checking token validity (tbd)
     *
     * Generated from protobuf field <code>string Oauth2Provider = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setOauth2Provider($var)
    {
        GPBUtil::checkString($var, True);
        $this->Oauth2Provider = $var;

        return $this;
    }

    /**
     * access token (short-lived)
     *
     * Generated from protobuf field <code>string Oauth2Token = 3;</code>
     * @return string
     */
    public function getOauth2Token()
    {
        return $this->Oauth2Token;
    }

    /**
     * access token (short-lived)
     *
     * Generated from protobuf field <code>string Oauth2Token = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setOauth2Token($var)
    {
        GPBUtil::checkString($var, True);
        $this->Oauth2Token = $var;

        return $this;
    }

    /**
     * refresh token (OAuth2 code flow, long-lived)
     *
     * Generated from protobuf field <code>string Oauth2Refresh = 4;</code>
     * @return string
     */
    public function getOauth2Refresh()
    {
        return $this->Oauth2Refresh;
    }

    /**
     * refresh token (OAuth2 code flow, long-lived)
     *
     * Generated from protobuf field <code>string Oauth2Refresh = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setOauth2Refresh($var)
    {
        GPBUtil::checkString($var, True);
        $this->Oauth2Refresh = $var;

        return $this;
    }

    /**
     * Unix timestamp of access token expiration
     *
     * Generated from protobuf field <code>int64 Oauth2Expiry = 5;</code>
     * @return int|string
     */
    public function getOauth2Expiry()
    {
        return $this->Oauth2Expiry;
    }

    /**
     * Unix timestamp of access token expiration
     *
     * Generated from protobuf field <code>int64 Oauth2Expiry = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setOauth2Expiry($var)
    {
        GPBUtil::checkInt64($var);
        $this->Oauth2Expiry = $var;

        return $this;
    }

}

