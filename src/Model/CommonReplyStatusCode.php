<?php
/**
 * CommonReplyStatusCode
 *
 * PHP version 5
 *
 * @category Class
 * @package  Alfaview
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * quotaService/settings.proto
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: version not set
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.33
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Alfaview\Model;
use \Alfaview\ObjectSerializer;

/**
 * CommonReplyStatusCode Class Doc Comment
 *
 * @category Class
 * @package  Alfaview
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CommonReplyStatusCode
{
    /**
     * Possible values of this enum
     */
    const OK = 'OK';
    const ACCEPTED = 'ACCEPTED';
    const WELCOME = 'WELCOME';
    const PING = 'PING';
    const PONG = 'PONG';
    const PARTIAL_ERROR = 'PARTIAL_ERROR';
    const INTERNAL_ERROR = 'INTERNAL_ERROR';
    const AUTHENTICATION_ERROR = 'AUTHENTICATION_ERROR';
    const ACCOUNT_STATUS_ERROR = 'ACCOUNT_STATUS_ERROR';
    const PROTOCOL_ERROR = 'PROTOCOL_ERROR';
    const NOT_IMPLEMENTED = 'NOT_IMPLEMENTED';
    const ACTION_INVALID = 'ACTION_INVALID';
    const INSUFFICIENT_PERMISSIONS = 'INSUFFICIENT_PERMISSIONS';
    const RANGE_ERROR = 'RANGE_ERROR';
    const HOSTNAME_INVALID = 'HOSTNAME_INVALID';
    const REQUEST_ID_INVALID = 'REQUEST_ID_INVALID';
    const ACCESS_INFO_MISSING = 'ACCESS_INFO_MISSING';
    const REQUEST_EMPTY = 'REQUEST_EMPTY';
    const VERSION_OUTDATED = 'VERSION_OUTDATED';
    const MAX_SIZE_EXCEEDED = 'MAX_SIZE_EXCEEDED';
    const RESPONSE_EMPTY = 'RESPONSE_EMPTY';
    const NOT_FOUND = 'NOT_FOUND';
    const REMOTE_ERROR = 'REMOTE_ERROR';
    const TIMEOUT = 'TIMEOUT';
    const CANCELED = 'CANCELED';
    const TOKEN_OUTDATED = 'TOKEN_OUTDATED';
    const CLIENT_REJECTED = 'CLIENT_REJECTED';
    const DOWNGRADED = 'DOWNGRADED';
    const FEATURE_DISABLED = 'FEATURE_DISABLED';
    const ALREADY_EXISTS = 'ALREADY_EXISTS';
    const QUOTA_EXCEEDED = 'QUOTA_EXCEEDED';
    const GO_AWAY = 'GO_AWAY';
    const USER_ID_INVALID = 'USER_ID_INVALID';
    const USER_INVALID = 'USER_INVALID';
    const USER_OFFLINE = 'USER_OFFLINE';
    const OTHER_CLIENT_CONNECTED = 'OTHER_CLIENT_CONNECTED';
    const USER_UPDATE = 'USER_UPDATE';
    const USER_LEAVE = 'USER_LEAVE';
    const ROOM_ID_INVALID = 'ROOM_ID_INVALID';
    const ROOM_INVALID = 'ROOM_INVALID';
    const ROOM_HOST_INVALID = 'ROOM_HOST_INVALID';
    const ROOM_NOT_RUNNING = 'ROOM_NOT_RUNNING';
    const SUBROOM_INVALID = 'SUBROOM_INVALID';
    const ROOM_NOT_FOUND = 'ROOM_NOT_FOUND';
    const ROOM_PREDECESSOR_NOT_FOUND = 'ROOM_PREDECESSOR_NOT_FOUND';
    const OUT_OF_SLOTS_ROOM = 'OUT_OF_SLOTS_ROOM';
    const OUT_OF_SLOTS_USER = 'OUT_OF_SLOTS_USER';
    const OUT_OF_SLOTS_AUDIO = 'OUT_OF_SLOTS_AUDIO';
    const OUT_OF_SLOTS_VIDEO = 'OUT_OF_SLOTS_VIDEO';
    const STREAM_ID_INVALID = 'STREAM_ID_INVALID';
    const STREAM_NOT_FOUND = 'STREAM_NOT_FOUND';
    const STREAM_HOST_INVALID = 'STREAM_HOST_INVALID';
    const HYDRA_STREAM_CLOSED = 'HYDRA_STREAM_CLOSED';
    const HYDRA_STREAM_CREATED = 'HYDRA_STREAM_CREATED';
    const HYDRA_STREAM_TIMEOUT = 'HYDRA_STREAM_TIMEOUT';
    const HYDRA_STREAM_ERROR = 'HYDRA_STREAM_ERROR';
    const HYDRA_CLIENT_TIMEOUT = 'HYDRA_CLIENT_TIMEOUT';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::OK,
            self::ACCEPTED,
            self::WELCOME,
            self::PING,
            self::PONG,
            self::PARTIAL_ERROR,
            self::INTERNAL_ERROR,
            self::AUTHENTICATION_ERROR,
            self::ACCOUNT_STATUS_ERROR,
            self::PROTOCOL_ERROR,
            self::NOT_IMPLEMENTED,
            self::ACTION_INVALID,
            self::INSUFFICIENT_PERMISSIONS,
            self::RANGE_ERROR,
            self::HOSTNAME_INVALID,
            self::REQUEST_ID_INVALID,
            self::ACCESS_INFO_MISSING,
            self::REQUEST_EMPTY,
            self::VERSION_OUTDATED,
            self::MAX_SIZE_EXCEEDED,
            self::RESPONSE_EMPTY,
            self::NOT_FOUND,
            self::REMOTE_ERROR,
            self::TIMEOUT,
            self::CANCELED,
            self::TOKEN_OUTDATED,
            self::CLIENT_REJECTED,
            self::DOWNGRADED,
            self::FEATURE_DISABLED,
            self::ALREADY_EXISTS,
            self::QUOTA_EXCEEDED,
            self::GO_AWAY,
            self::USER_ID_INVALID,
            self::USER_INVALID,
            self::USER_OFFLINE,
            self::OTHER_CLIENT_CONNECTED,
            self::USER_UPDATE,
            self::USER_LEAVE,
            self::ROOM_ID_INVALID,
            self::ROOM_INVALID,
            self::ROOM_HOST_INVALID,
            self::ROOM_NOT_RUNNING,
            self::SUBROOM_INVALID,
            self::ROOM_NOT_FOUND,
            self::ROOM_PREDECESSOR_NOT_FOUND,
            self::OUT_OF_SLOTS_ROOM,
            self::OUT_OF_SLOTS_USER,
            self::OUT_OF_SLOTS_AUDIO,
            self::OUT_OF_SLOTS_VIDEO,
            self::STREAM_ID_INVALID,
            self::STREAM_NOT_FOUND,
            self::STREAM_HOST_INVALID,
            self::HYDRA_STREAM_CLOSED,
            self::HYDRA_STREAM_CREATED,
            self::HYDRA_STREAM_TIMEOUT,
            self::HYDRA_STREAM_ERROR,
            self::HYDRA_CLIENT_TIMEOUT,
        ];
    }
}


