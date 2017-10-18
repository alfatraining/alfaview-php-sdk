<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: authentication/authenticationService.proto

namespace Alfatraining\Grpc\Authentication;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 **
 * UsernamePasswordCredentials are used to authenticate using a username and password.
 *
 * Generated from protobuf message <code>authentication.UsernamePasswordCredentials</code>
 */
class UsernamePasswordCredentials extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string username = 1;</code>
     */
    private $username = '';
    /**
     * Generated from protobuf field <code>string password = 2;</code>
     */
    private $password = '';
    /**
     * Generated from protobuf field <code>string companyId = 3;</code>
     */
    private $companyId = '';
    /**
     * to update credentials pass the current password here
     *
     * Generated from protobuf field <code>string current = 5;</code>
     */
    private $current = '';
    /**
     * to reset the user's password pass a reset token here
     *
     * Generated from protobuf field <code>string passwordResetToken = 6;</code>
     */
    private $passwordResetToken = '';

    public function __construct() {
        \GPBMetadata\Authentication\AuthenticationService::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>string username = 1;</code>
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Generated from protobuf field <code>string username = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setUsername($var)
    {
        GPBUtil::checkString($var, True);
        $this->username = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string password = 2;</code>
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Generated from protobuf field <code>string password = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPassword($var)
    {
        GPBUtil::checkString($var, True);
        $this->password = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string companyId = 3;</code>
     * @return string
     */
    public function getCompanyId()
    {
        return $this->companyId;
    }

    /**
     * Generated from protobuf field <code>string companyId = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setCompanyId($var)
    {
        GPBUtil::checkString($var, True);
        $this->companyId = $var;

        return $this;
    }

    /**
     * to update credentials pass the current password here
     *
     * Generated from protobuf field <code>string current = 5;</code>
     * @return string
     */
    public function getCurrent()
    {
        return $this->current;
    }

    /**
     * to update credentials pass the current password here
     *
     * Generated from protobuf field <code>string current = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setCurrent($var)
    {
        GPBUtil::checkString($var, True);
        $this->current = $var;

        return $this;
    }

    /**
     * to reset the user's password pass a reset token here
     *
     * Generated from protobuf field <code>string passwordResetToken = 6;</code>
     * @return string
     */
    public function getPasswordResetToken()
    {
        return $this->passwordResetToken;
    }

    /**
     * to reset the user's password pass a reset token here
     *
     * Generated from protobuf field <code>string passwordResetToken = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setPasswordResetToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->passwordResetToken = $var;

        return $this;
    }

}
