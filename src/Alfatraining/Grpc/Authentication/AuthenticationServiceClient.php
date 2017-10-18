<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Alfatraining\Grpc\Authentication;

/**
 * *
 * AuthenticationService is used to authenticate against our platform using different
 * authentication methods, check whether you are still authenticated as well as
 * update your authentication credentials upon user updates.
 */
class AuthenticationServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Alfatraining\Grpc\Authentication\AuthenticationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function authenticate(\Alfatraining\Grpc\Authentication\AuthenticationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/authentication.AuthenticationService/authenticate',
        $argument,
        ['\Alfatraining\Grpc\Authentication\AuthenticationReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Alfatraining\Grpc\Authentication\SignAccessTokenRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function signAccessToken(\Alfatraining\Grpc\Authentication\SignAccessTokenRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/authentication.AuthenticationService/signAccessToken',
        $argument,
        ['\Alfatraining\Grpc\Authentication\AuthenticationReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Alfatraining\Grpc\Common\AccessInfo $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function isAuthenticated(\Alfatraining\Grpc\Common\AccessInfo $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/authentication.AuthenticationService/isAuthenticated',
        $argument,
        ['\Alfatraining\Grpc\Common\ReplyInfo', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Alfatraining\Grpc\Authentication\PasswordResetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function requestPasswordReset(\Alfatraining\Grpc\Authentication\PasswordResetRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/authentication.AuthenticationService/requestPasswordReset',
        $argument,
        ['\Alfatraining\Grpc\Authentication\PasswordResetReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Alfatraining\Grpc\Authentication\ListAuthenticationsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function listAuthentications(\Alfatraining\Grpc\Authentication\ListAuthenticationsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/authentication.AuthenticationService/listAuthentications',
        $argument,
        ['\Alfatraining\Grpc\Authentication\ListAuthenticationsReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Alfatraining\Grpc\Authentication\AuthenticationCreateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function authenticationCreate(\Alfatraining\Grpc\Authentication\AuthenticationCreateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/authentication.AuthenticationService/authenticationCreate',
        $argument,
        ['\Alfatraining\Grpc\Authentication\AuthenticationCreateReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Alfatraining\Grpc\Authentication\AuthenticationUpdateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function authenticationUpdate(\Alfatraining\Grpc\Authentication\AuthenticationUpdateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/authentication.AuthenticationService/authenticationUpdate',
        $argument,
        ['\Alfatraining\Grpc\Common\ReplyInfo', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Alfatraining\Grpc\Authentication\AuthenticationInformationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function authenticationInformation(\Alfatraining\Grpc\Authentication\AuthenticationInformationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/authentication.AuthenticationService/authenticationInformation',
        $argument,
        ['\Alfatraining\Grpc\Authentication\AuthenticationInformationReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Alfatraining\Grpc\Authentication\CompanyCreateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function companyCreate(\Alfatraining\Grpc\Authentication\CompanyCreateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/authentication.AuthenticationService/companyCreate',
        $argument,
        ['\Alfatraining\Grpc\Authentication\CompanyCreateReply', 'decode'],
        $metadata, $options);
    }

}
