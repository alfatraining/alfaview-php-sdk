<?php
/**
 * GuestServiceV2UpdateGuestLinkRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Alfaview
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * guestServiceV2/guestService.proto
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

use \ArrayAccess;
use \Alfaview\ObjectSerializer;

/**
 * GuestServiceV2UpdateGuestLinkRequest Class Doc Comment
 *
 * @category Class
 * @package  Alfaview
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GuestServiceV2UpdateGuestLinkRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'guestService.v2.UpdateGuestLinkRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'access_info' => '\Alfaview\Model\CommonAccessInfo',
        'guest_link' => '\Alfaview\Model\GuestServiceV2GuestLink',
        'send_email' => 'bool',
        'skip_room_permissions_update' => 'bool',
        'timezone' => 'string',
        'allow_dial_in' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'access_info' => null,
        'guest_link' => null,
        'send_email' => null,
        'skip_room_permissions_update' => null,
        'timezone' => null,
        'allow_dial_in' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'access_info' => 'accessInfo',
        'guest_link' => 'guestLink',
        'send_email' => 'sendEmail',
        'skip_room_permissions_update' => 'skipRoomPermissionsUpdate',
        'timezone' => 'timezone',
        'allow_dial_in' => 'allowDialIn'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'access_info' => 'setAccessInfo',
        'guest_link' => 'setGuestLink',
        'send_email' => 'setSendEmail',
        'skip_room_permissions_update' => 'setSkipRoomPermissionsUpdate',
        'timezone' => 'setTimezone',
        'allow_dial_in' => 'setAllowDialIn'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'access_info' => 'getAccessInfo',
        'guest_link' => 'getGuestLink',
        'send_email' => 'getSendEmail',
        'skip_room_permissions_update' => 'getSkipRoomPermissionsUpdate',
        'timezone' => 'getTimezone',
        'allow_dial_in' => 'getAllowDialIn'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['access_info'] = isset($data['access_info']) ? $data['access_info'] : null;
        $this->container['guest_link'] = isset($data['guest_link']) ? $data['guest_link'] : null;
        $this->container['send_email'] = isset($data['send_email']) ? $data['send_email'] : null;
        $this->container['skip_room_permissions_update'] = isset($data['skip_room_permissions_update']) ? $data['skip_room_permissions_update'] : null;
        $this->container['timezone'] = isset($data['timezone']) ? $data['timezone'] : null;
        $this->container['allow_dial_in'] = isset($data['allow_dial_in']) ? $data['allow_dial_in'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets access_info
     *
     * @return \Alfaview\Model\CommonAccessInfo
     */
    public function getAccessInfo()
    {
        return $this->container['access_info'];
    }

    /**
     * Sets access_info
     *
     * @param \Alfaview\Model\CommonAccessInfo $access_info access_info
     *
     * @return $this
     */
    public function setAccessInfo($access_info)
    {
        $this->container['access_info'] = $access_info;

        return $this;
    }

    /**
     * Gets guest_link
     *
     * @return \Alfaview\Model\GuestServiceV2GuestLink
     */
    public function getGuestLink()
    {
        return $this->container['guest_link'];
    }

    /**
     * Sets guest_link
     *
     * @param \Alfaview\Model\GuestServiceV2GuestLink $guest_link guest_link
     *
     * @return $this
     */
    public function setGuestLink($guest_link)
    {
        $this->container['guest_link'] = $guest_link;

        return $this;
    }

    /**
     * Gets send_email
     *
     * @return bool
     */
    public function getSendEmail()
    {
        return $this->container['send_email'];
    }

    /**
     * Sets send_email
     *
     * @param bool $send_email send_email
     *
     * @return $this
     */
    public function setSendEmail($send_email)
    {
        $this->container['send_email'] = $send_email;

        return $this;
    }

    /**
     * Gets skip_room_permissions_update
     *
     * @return bool
     */
    public function getSkipRoomPermissionsUpdate()
    {
        return $this->container['skip_room_permissions_update'];
    }

    /**
     * Sets skip_room_permissions_update
     *
     * @param bool $skip_room_permissions_update skip_room_permissions_update
     *
     * @return $this
     */
    public function setSkipRoomPermissionsUpdate($skip_room_permissions_update)
    {
        $this->container['skip_room_permissions_update'] = $skip_room_permissions_update;

        return $this;
    }

    /**
     * Gets timezone
     *
     * @return string
     */
    public function getTimezone()
    {
        return $this->container['timezone'];
    }

    /**
     * Sets timezone
     *
     * @param string $timezone timezone
     *
     * @return $this
     */
    public function setTimezone($timezone)
    {
        $this->container['timezone'] = $timezone;

        return $this;
    }

    /**
     * Gets allow_dial_in
     *
     * @return bool
     */
    public function getAllowDialIn()
    {
        return $this->container['allow_dial_in'];
    }

    /**
     * Sets allow_dial_in
     *
     * @param bool $allow_dial_in allow_dial_in
     *
     * @return $this
     */
    public function setAllowDialIn($allow_dial_in)
    {
        $this->container['allow_dial_in'] = $allow_dial_in;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

