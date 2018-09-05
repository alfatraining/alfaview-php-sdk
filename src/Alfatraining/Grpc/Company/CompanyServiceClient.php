<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Alfatraining\Grpc\Company;

/**
 * *
 * Manages companies within our platform.
 */
class CompanyServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Alfatraining\Grpc\Company\CompanyListRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function companyList(\Alfatraining\Grpc\Company\CompanyListRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/companyService.CompanyService/companyList',
        $argument,
        ['\Alfatraining\Grpc\Company\CompanyListReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Alfatraining\Grpc\Company\CompanyCreateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function companyCreate(\Alfatraining\Grpc\Company\CompanyCreateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/companyService.CompanyService/companyCreate',
        $argument,
        ['\Alfatraining\Grpc\Company\CompanyCreateReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Alfatraining\Grpc\Company\CompanyUpdateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function companyUpdate(\Alfatraining\Grpc\Company\CompanyUpdateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/companyService.CompanyService/companyUpdate',
        $argument,
        ['\Alfatraining\Grpc\Common\ReplyInfo', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Alfatraining\Grpc\Company\CompanyDestroyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function companyDestroy(\Alfatraining\Grpc\Company\CompanyDestroyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/companyService.CompanyService/companyDestroy',
        $argument,
        ['\Alfatraining\Grpc\Common\ReplyInfo', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Alfatraining\Grpc\Company\CompanyAvailableRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function companyAvailable(\Alfatraining\Grpc\Company\CompanyAvailableRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/companyService.CompanyService/companyAvailable',
        $argument,
        ['\Alfatraining\Grpc\Company\CompanyAvailableReply', 'decode'],
        $metadata, $options);
    }

}
