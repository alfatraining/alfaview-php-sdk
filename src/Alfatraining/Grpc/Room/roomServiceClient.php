<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Alfatraining\Grpc\Room;

/**
 */
class roomServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Alfatraining\Grpc\Room\RoomCreateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Create(\Alfatraining\Grpc\Room\RoomCreateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/roomService.roomService/Create',
        $argument,
        ['\Alfatraining\Grpc\Room\RoomCreateReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Alfatraining\Grpc\Room\RoomUpdateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Update(\Alfatraining\Grpc\Room\RoomUpdateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/roomService.roomService/Update',
        $argument,
        ['\Alfatraining\Grpc\Room\RoomUpdateReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Alfatraining\Grpc\Room\RoomsUpdateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UpdateRooms(\Alfatraining\Grpc\Room\RoomsUpdateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/roomService.roomService/UpdateRooms',
        $argument,
        ['\Alfatraining\Grpc\Room\RoomsUpdateReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Alfatraining\Grpc\Room\RoomListRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function List(\Alfatraining\Grpc\Room\RoomListRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/roomService.roomService/List',
        $argument,
        ['\Alfatraining\Grpc\Room\RoomListReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Alfatraining\Grpc\Room\RoomDestroyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Destroy(\Alfatraining\Grpc\Room\RoomDestroyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/roomService.roomService/Destroy',
        $argument,
        ['\Alfatraining\Grpc\Room\RoomDestroyReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Alfatraining\Grpc\Room\RoomStatusRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Status(\Alfatraining\Grpc\Room\RoomStatusRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/roomService.roomService/Status',
        $argument,
        ['\Alfatraining\Grpc\Room\RoomStatusReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Alfatraining\Grpc\Room\RoomPermissionsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Permissions(\Alfatraining\Grpc\Room\RoomPermissionsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/roomService.roomService/Permissions',
        $argument,
        ['\Alfatraining\Grpc\Room\RoomPermissionsReply', 'decode'],
        $metadata, $options);
    }

}
