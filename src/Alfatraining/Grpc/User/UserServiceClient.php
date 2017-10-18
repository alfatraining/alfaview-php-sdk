<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Alfatraining\Grpc\User;

/**
 * *
 * Manages user as well as user profile information on our platform.
 */
class UserServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Alfatraining\Grpc\User\UserListRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function userList(\Alfatraining\Grpc\User\UserListRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/user.UserService/userList',
        $argument,
        ['\Alfatraining\Grpc\User\UserListReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Alfatraining\Grpc\User\UserCreateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function userCreate(\Alfatraining\Grpc\User\UserCreateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/user.UserService/userCreate',
        $argument,
        ['\Alfatraining\Grpc\User\UserCreateReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Alfatraining\Grpc\User\UserUpdateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function userUpdate(\Alfatraining\Grpc\User\UserUpdateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/user.UserService/userUpdate',
        $argument,
        ['\Alfatraining\Grpc\Common\ReplyInfo', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Alfatraining\Grpc\User\UserDestroyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function userDestroy(\Alfatraining\Grpc\User\UserDestroyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/user.UserService/userDestroy',
        $argument,
        ['\Alfatraining\Grpc\Common\ReplyInfo', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Alfatraining\Grpc\User\UserProfileUpdateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function userProfileUpdate(\Alfatraining\Grpc\User\UserProfileUpdateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/user.UserService/userProfileUpdate',
        $argument,
        ['\Alfatraining\Grpc\Common\ReplyInfo', 'decode'],
        $metadata, $options);
    }

}
