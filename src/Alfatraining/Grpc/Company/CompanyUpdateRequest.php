<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: companyService/companyService.proto

namespace Alfatraining\Grpc\Company;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>companyService.CompanyUpdateRequest</code>
 */
class CompanyUpdateRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.common.AccessInfo accessInfo = 1;</code>
     */
    private $accessInfo = null;
    /**
     * Generated from protobuf field <code>.common.Company company = 8;</code>
     */
    private $company = null;
    /**
     * Generated from protobuf field <code>string companyId = 11;</code>
     */
    private $companyId = '';

    public function __construct() {
        \GPBMetadata\CompanyService\CompanyService::initOnce();
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
     * Generated from protobuf field <code>.common.Company company = 8;</code>
     * @return \Alfatraining\Grpc\Common\Company
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Generated from protobuf field <code>.common.Company company = 8;</code>
     * @param \Alfatraining\Grpc\Common\Company $var
     * @return $this
     */
    public function setCompany($var)
    {
        GPBUtil::checkMessage($var, \Alfatraining\Grpc\Common\Company::class);
        $this->company = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string companyId = 11;</code>
     * @return string
     */
    public function getCompanyId()
    {
        return $this->companyId;
    }

    /**
     * Generated from protobuf field <code>string companyId = 11;</code>
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

