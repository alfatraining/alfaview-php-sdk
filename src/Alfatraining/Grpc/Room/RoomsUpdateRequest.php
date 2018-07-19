<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: roomService/roomService.proto

namespace Alfatraining\Grpc\Room;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *&#47; update multiple rooms in one go (deprecated)
 *
 * Generated from protobuf message <code>roomService.RoomsUpdateRequest</code>
 */
class RoomsUpdateRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.common.AccessInfo accessInfo = 1;</code>
     */
    private $accessInfo = null;
    /**
     *&#47; access info should be ingnored in the individual RoomUpdateRequests
     *
     * Generated from protobuf field <code>repeated .roomService.RoomUpdateRequest roomsToUpdate = 2;</code>
     */
    private $roomsToUpdate;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Alfatraining\Grpc\Common\AccessInfo $accessInfo
     *     @type \Alfatraining\Grpc\Room\RoomUpdateRequest[]|\Google\Protobuf\Internal\RepeatedField $roomsToUpdate
     *          &#47; access info should be ingnored in the individual RoomUpdateRequests
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\RoomService\RoomService::initOnce();
        parent::__construct($data);
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
     *&#47; access info should be ingnored in the individual RoomUpdateRequests
     *
     * Generated from protobuf field <code>repeated .roomService.RoomUpdateRequest roomsToUpdate = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRoomsToUpdate()
    {
        return $this->roomsToUpdate;
    }

    /**
     *&#47; access info should be ingnored in the individual RoomUpdateRequests
     *
     * Generated from protobuf field <code>repeated .roomService.RoomUpdateRequest roomsToUpdate = 2;</code>
     * @param \Alfatraining\Grpc\Room\RoomUpdateRequest[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRoomsToUpdate($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Alfatraining\Grpc\Room\RoomUpdateRequest::class);
        $this->roomsToUpdate = $arr;

        return $this;
    }

}

