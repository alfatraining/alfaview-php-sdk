<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: authentication/authenticationService.proto

namespace Alfatraining\Grpc\Authentication;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>authentication.CompanyCreateReply</code>
 */
class CompanyCreateReply extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.common.ReplyInfo replyInfo = 1;</code>
     */
    private $replyInfo = null;
    /**
     * Generated from protobuf field <code>string userId = 11;</code>
     */
    private $userId = '';
    /**
     * Generated from protobuf field <code>string companyId = 15;</code>
     */
    private $companyId = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Alfatraining\Grpc\Common\ReplyInfo $replyInfo
     *     @type string $userId
     *     @type string $companyId
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Authentication\AuthenticationService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.common.ReplyInfo replyInfo = 1;</code>
     * @return \Alfatraining\Grpc\Common\ReplyInfo
     */
    public function getReplyInfo()
    {
        return $this->replyInfo;
    }

    /**
     * Generated from protobuf field <code>.common.ReplyInfo replyInfo = 1;</code>
     * @param \Alfatraining\Grpc\Common\ReplyInfo $var
     * @return $this
     */
    public function setReplyInfo($var)
    {
        GPBUtil::checkMessage($var, \Alfatraining\Grpc\Common\ReplyInfo::class);
        $this->replyInfo = $var;

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
     * Generated from protobuf field <code>string companyId = 15;</code>
     * @return string
     */
    public function getCompanyId()
    {
        return $this->companyId;
    }

    /**
     * Generated from protobuf field <code>string companyId = 15;</code>
     * @param string $var
     * @return $this
     */
    public function setCompanyId($var)
    {
        GPBUtil::checkString($var, True);
        $this->companyId = $var;

        return $this;
    }

}

