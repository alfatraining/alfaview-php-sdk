<?php
/**
 * CommonRoomType
 *
 * PHP version 5
 *
 * @category Class
 * @package  Alfaview
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * roomService/roomService.proto
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
 * CommonRoomType Class Doc Comment
 *
 * @category Class
 * @package  Alfaview
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CommonRoomType
{
    /**
     * Possible values of this enum
     */
    const KEEP = 'ROOM_TYPE_KEEP';
    const DEPARTMENT = 'ROOM_TYPE_DEPARTMENT';
    const ROOM = 'ROOM_TYPE_ROOM';
    const MEETING = 'ROOM_TYPE_MEETING';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::KEEP,
            self::DEPARTMENT,
            self::ROOM,
            self::MEETING,
        ];
    }
}


