<?php
/**
 * GuestServiceV2GetLinkReply
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
 * Swagger Codegen version: 2.4.33
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
 * GuestServiceV2GetLinkReply Class Doc Comment
 *
 * @category Class
 * @package  Alfaview
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GuestServiceV2GetLinkReply implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'guestService.v2.GetLinkReply';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'reply_info' => '\Alfaview\Model\CommonReplyInfo',
        'guest_link' => '\Alfaview\Model\GuestServiceV2GuestLink',
        'group_link' => '\Alfaview\Model\GuestServiceV2GroupLink'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'reply_info' => null,
        'guest_link' => null,
        'group_link' => null
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
        'reply_info' => 'replyInfo',
        'guest_link' => 'guestLink',
        'group_link' => 'groupLink'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'reply_info' => 'setReplyInfo',
        'guest_link' => 'setGuestLink',
        'group_link' => 'setGroupLink'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'reply_info' => 'getReplyInfo',
        'guest_link' => 'getGuestLink',
        'group_link' => 'getGroupLink'
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
        $this->container['reply_info'] = isset($data['reply_info']) ? $data['reply_info'] : null;
        $this->container['guest_link'] = isset($data['guest_link']) ? $data['guest_link'] : null;
        $this->container['group_link'] = isset($data['group_link']) ? $data['group_link'] : null;
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
     * Gets reply_info
     *
     * @return \Alfaview\Model\CommonReplyInfo
     */
    public function getReplyInfo()
    {
        return $this->container['reply_info'];
    }

    /**
     * Sets reply_info
     *
     * @param \Alfaview\Model\CommonReplyInfo $reply_info reply_info
     *
     * @return $this
     */
    public function setReplyInfo($reply_info)
    {
        $this->container['reply_info'] = $reply_info;

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
     * Gets group_link
     *
     * @return \Alfaview\Model\GuestServiceV2GroupLink
     */
    public function getGroupLink()
    {
        return $this->container['group_link'];
    }

    /**
     * Sets group_link
     *
     * @param \Alfaview\Model\GuestServiceV2GroupLink $group_link group_link
     *
     * @return $this
     */
    public function setGroupLink($group_link)
    {
        $this->container['group_link'] = $group_link;

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


