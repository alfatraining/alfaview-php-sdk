<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: roomService/roomService.proto

namespace Alfatraining\Grpc\Room;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>roomService.RoomListReply</code>
 */
class RoomListReply extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.common.ReplyInfo replyInfo = 1;</code>
     */
    private $replyInfo = null;
    /**
     *&#47; key is room-uuid
     *
     * Generated from protobuf field <code>map<string, .common.Room> rooms = 7;</code>
     */
    private $rooms;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Alfatraining\Grpc\Common\ReplyInfo $replyInfo
     *     @type array|\Google\Protobuf\Internal\MapField $rooms
     *          &#47; key is room-uuid
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\RoomService\RoomService::initOnce();
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
     *&#47; key is room-uuid
     *
     * Generated from protobuf field <code>map<string, .common.Room> rooms = 7;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getRooms()
    {
        return $this->rooms;
    }

    /**
     *&#47; key is room-uuid
     *
     * Generated from protobuf field <code>map<string, .common.Room> rooms = 7;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setRooms($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Alfatraining\Grpc\Common\Room::class);
        $this->rooms = $arr;

        return $this;
    }

}

