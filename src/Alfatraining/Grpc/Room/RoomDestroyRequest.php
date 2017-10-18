<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: roomService/roomService.proto

namespace Alfatraining\Grpc\Room;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * room destroy
 *
 * Generated from protobuf message <code>roomService.RoomDestroyRequest</code>
 */
class RoomDestroyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.common.AccessInfo accessInfo = 1;</code>
     */
    private $accessInfo = null;
    /**
     * Generated from protobuf field <code>string roomId = 5;</code>
     */
    private $roomId = '';

    public function __construct() {
        \GPBMetadata\RoomService\RoomService::initOnce();
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
     * Generated from protobuf field <code>string roomId = 5;</code>
     * @return string
     */
    public function getRoomId()
    {
        return $this->roomId;
    }

    /**
     * Generated from protobuf field <code>string roomId = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setRoomId($var)
    {
        GPBUtil::checkString($var, True);
        $this->roomId = $var;

        return $this;
    }

}

