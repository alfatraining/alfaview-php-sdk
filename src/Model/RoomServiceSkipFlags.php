<?php
/**
 * RoomServiceSkipFlags
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
 * Swagger Codegen version: 2.4.39
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Alfaview\Model;
use \Alfaview\ObjectSerializer;

/**
 * RoomServiceSkipFlags Class Doc Comment
 *
 * @category Class
 * @package  Alfaview
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RoomServiceSkipFlags
{
    /**
     * Possible values of this enum
     */
    const OTHER_PERMISSIONS = 'SKIP_OTHER_PERMISSIONS';
    const METADATA = 'SKIP_METADATA';
    const SUBROOMS = 'SKIP_SUBROOMS';
    const UNJOINABLE = 'SKIP_UNJOINABLE';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::OTHER_PERMISSIONS,
            self::METADATA,
            self::SUBROOMS,
            self::UNJOINABLE,
        ];
    }
}


