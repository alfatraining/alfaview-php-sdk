<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: authentication/authenticationService.proto

namespace Alfatraining\Grpc\Authentication;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>authentication.AuthenticationMethodInformation</code>
 */
class AuthenticationMethodInformation extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string type = 1;</code>
     */
    private $type = '';
    /**
     * Generated from protobuf field <code>string principal = 2;</code>
     */
    private $principal = '';
    /**
     * Generated from protobuf field <code>string companyId = 3;</code>
     */
    private $companyId = '';
    /**
     * Generated from protobuf field <code>string userId = 11;</code>
     */
    private $userId = '';
    /**
     *&#47; permissions of the user
     *
     * Generated from protobuf field <code>map<int32, bool> permissions = 12;</code>
     */
    private $permissions;
    /**
     * Generated from protobuf field <code>.authentication.AccountStatus accountStatus = 13;</code>
     */
    private $accountStatus = 0;
    /**
     *&#47; returns metadata associated with the authentication method found for the authentication
     *
     * Generated from protobuf field <code>map<string, string> metadata = 14;</code>
     */
    private $metadata;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $type
     *     @type string $principal
     *     @type string $companyId
     *     @type string $userId
     *     @type array|\Google\Protobuf\Internal\MapField $permissions
     *          &#47; permissions of the user
     *     @type int $accountStatus
     *     @type array|\Google\Protobuf\Internal\MapField $metadata
     *          &#47; returns metadata associated with the authentication method found for the authentication
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Authentication\AuthenticationService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string type = 1;</code>
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>string type = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string principal = 2;</code>
     * @return string
     */
    public function getPrincipal()
    {
        return $this->principal;
    }

    /**
     * Generated from protobuf field <code>string principal = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPrincipal($var)
    {
        GPBUtil::checkString($var, True);
        $this->principal = $var;

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
     * Generated from protobuf field <code>string userId = 11;</code>
     * @return string
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Generated from protobuf field <code>string userId = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setUserId($var)
    {
        GPBUtil::checkString($var, True);
        $this->userId = $var;

        return $this;
    }

    /**
     *&#47; permissions of the user
     *
     * Generated from protobuf field <code>map<int32, bool> permissions = 12;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getPermissions()
    {
        return $this->permissions;
    }

    /**
     *&#47; permissions of the user
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
     * Generated from protobuf field <code>.authentication.AccountStatus accountStatus = 13;</code>
     * @return int
     */
    public function getAccountStatus()
    {
        return $this->accountStatus;
    }

    /**
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
     *&#47; returns metadata associated with the authentication method found for the authentication
     *
     * Generated from protobuf field <code>map<string, string> metadata = 14;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     *&#47; returns metadata associated with the authentication method found for the authentication
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

