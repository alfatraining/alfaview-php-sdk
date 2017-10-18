<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: companyService/companyService.proto

namespace Alfatraining\Grpc\Company;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>companyService.CompanyListReply</code>
 */
class CompanyListReply extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.common.ReplyInfo replyInfo = 1;</code>
     */
    private $replyInfo = null;
    /**
     * companyId => Company
     *
     * Generated from protobuf field <code>map<string, .common.Company> companies = 9;</code>
     */
    private $companies;

    public function __construct() {
        \GPBMetadata\CompanyService\CompanyService::initOnce();
        parent::__construct();
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
     * companyId => Company
     *
     * Generated from protobuf field <code>map<string, .common.Company> companies = 9;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getCompanies()
    {
        return $this->companies;
    }

    /**
     * companyId => Company
     *
     * Generated from protobuf field <code>map<string, .common.Company> companies = 9;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setCompanies($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Alfatraining\Grpc\Common\Company::class);
        $this->companies = $arr;

        return $this;
    }

}
