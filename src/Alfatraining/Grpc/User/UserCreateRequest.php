<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: user/userService.proto

namespace Alfatraining\Grpc\User;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>user.UserCreateRequest</code>
 */
class UserCreateRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.common.AccessInfo accessInfo = 1;</code>
     */
    private $accessInfo = null;
    /**
     * Generated from protobuf field <code>.common.User user = 8;</code>
     */
    private $user = null;
    /**
     * Generated from protobuf field <code>.authentication.AuthenticationRequest authenticationRequest = 12;</code>
     */
    private $authenticationRequest = null;

    public function __construct() {
        \GPBMetadata\User\UserService::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>.common.AccessInfo accessInfo = 1;</code>
     * @return \Alfatraining\Grpc\Common\AccessInfo
     */
    public function getAccessInfo()
    {
        return $this->accessInfo;
    }

    /**
     * Generated from protobuf field <code>.common.AccessInfo accessInfo = 1;</code>
     * @param \Alfatraining\Grpc\Common\AccessInfo $var
     * @return $this
     */
    public function setAccessInfo($var)
    {
        GPBUtil::checkMessage($var, \Alfatraining\Grpc\Common\AccessInfo::class);
        $this->accessInfo = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.common.User user = 8;</code>
     * @return \Alfatraining\Grpc\Common\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Generated from protobuf field <code>.common.User user = 8;</code>
     * @param \Alfatraining\Grpc\Common\User $var
     * @return $this
     */
    public function setUser($var)
    {
        GPBUtil::checkMessage($var, \Alfatraining\Grpc\Common\User::class);
        $this->user = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.authentication.AuthenticationRequest authenticationRequest = 12;</code>
     * @return \Alfatraining\Grpc\Authentication\AuthenticationRequest
     */
    public function getAuthenticationRequest()
    {
        return $this->authenticationRequest;
    }

    /**
     * Generated from protobuf field <code>.authentication.AuthenticationRequest authenticationRequest = 12;</code>
     * @param \Alfatraining\Grpc\Authentication\AuthenticationRequest $var
     * @return $this
     */
    public function setAuthenticationRequest($var)
    {
        GPBUtil::checkMessage($var, \Alfatraining\Grpc\Authentication\AuthenticationRequest::class);
        $this->authenticationRequest = $var;

        return $this;
    }

}

