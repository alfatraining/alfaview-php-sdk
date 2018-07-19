<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: authentication/authenticationService.proto

namespace Alfatraining\Grpc\Authentication;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>authentication.ListAuthenticationsReply</code>
 */
class ListAuthenticationsReply extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.common.ReplyInfo replyInfo = 1;</code>
     */
    private $replyInfo = null;
    /**
     *&#47; returns the maximum offset you can pass for the next page; you've reached the
     * / end when the offset you passed in the request is equal to the max offset returned.
     *
     * Generated from protobuf field <code>uint32 maxOffset = 2;</code>
     */
    private $maxOffset = 0;
    /**
     *&#47; user ID => AuthMethodInfoList
     *
     * Generated from protobuf field <code>map<string, .authentication.AuthMethodInfoList> results = 15;</code>
     */
    private $results;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Alfatraining\Grpc\Common\ReplyInfo $replyInfo
     *     @type int $maxOffset
     *          &#47; returns the maximum offset you can pass for the next page; you've reached the
     *          / end when the offset you passed in the request is equal to the max offset returned.
     *     @type array|\Google\Protobuf\Internal\MapField $results
     *          &#47; user ID => AuthMethodInfoList
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
     *&#47; returns the maximum offset you can pass for the next page; you've reached the
     * / end when the offset you passed in the request is equal to the max offset returned.
     *
     * Generated from protobuf field <code>uint32 maxOffset = 2;</code>
     * @return int
     */
    public function getMaxOffset()
    {
        return $this->maxOffset;
    }

    /**
     *&#47; returns the maximum offset you can pass for the next page; you've reached the
     * / end when the offset you passed in the request is equal to the max offset returned.
     *
     * Generated from protobuf field <code>uint32 maxOffset = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxOffset($var)
    {
        GPBUtil::checkUint32($var);
        $this->maxOffset = $var;

        return $this;
    }

    /**
     *&#47; user ID => AuthMethodInfoList
     *
     * Generated from protobuf field <code>map<string, .authentication.AuthMethodInfoList> results = 15;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     *&#47; user ID => AuthMethodInfoList
     *
     * Generated from protobuf field <code>map<string, .authentication.AuthMethodInfoList> results = 15;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setResults($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Alfatraining\Grpc\Authentication\AuthMethodInfoList::class);
        $this->results = $arr;

        return $this;
    }

}

