<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: roomService/roomService.proto

namespace Alfatraining\Grpc\Room;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>roomService.UserInfo</code>
 */
class UserInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool online = 1;</code>
     */
    private $online = false;

    public function __construct() {
        \GPBMetadata\RoomService\RoomService::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>bool online = 1;</code>
     * @return bool
     */
    public function getOnline()
    {
        return $this->online;
    }

    /**
     * Generated from protobuf field <code>bool online = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setOnline($var)
    {
        GPBUtil::checkBool($var);
        $this->online = $var;

        return $this;
    }

}

