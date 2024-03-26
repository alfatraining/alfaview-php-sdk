<?php
/**
 * RoomServiceUserInfo
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

use \ArrayAccess;
use \Alfaview\ObjectSerializer;

/**
 * RoomServiceUserInfo Class Doc Comment
 *
 * @category Class
 * @package  Alfaview
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RoomServiceUserInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'roomServiceUserInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'online' => 'bool',
        'display_name' => 'string',
        'is_guest' => 'bool',
        'state' => '\Alfaview\Model\CommonUserState',
        'is_spectator' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'online' => null,
        'display_name' => null,
        'is_guest' => null,
        'state' => null,
        'is_spectator' => null
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
        'online' => 'online',
        'display_name' => 'displayName',
        'is_guest' => 'isGuest',
        'state' => 'state',
        'is_spectator' => 'isSpectator'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'online' => 'setOnline',
        'display_name' => 'setDisplayName',
        'is_guest' => 'setIsGuest',
        'state' => 'setState',
        'is_spectator' => 'setIsSpectator'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'online' => 'getOnline',
        'display_name' => 'getDisplayName',
        'is_guest' => 'getIsGuest',
        'state' => 'getState',
        'is_spectator' => 'getIsSpectator'
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
        $this->container['online'] = isset($data['online']) ? $data['online'] : null;
        $this->container['display_name'] = isset($data['display_name']) ? $data['display_name'] : null;
        $this->container['is_guest'] = isset($data['is_guest']) ? $data['is_guest'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['is_spectator'] = isset($data['is_spectator']) ? $data['is_spectator'] : null;
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
     * Gets online
     *
     * @return bool
     */
    public function getOnline()
    {
        return $this->container['online'];
    }

    /**
     * Sets online
     *
     * @param bool $online online
     *
     * @return $this
     */
    public function setOnline($online)
    {
        $this->container['online'] = $online;

        return $this;
    }

    /**
     * Gets display_name
     *
     * @return string
     */
    public function getDisplayName()
    {
        return $this->container['display_name'];
    }

    /**
     * Sets display_name
     *
     * @param string $display_name display_name
     *
     * @return $this
     */
    public function setDisplayName($display_name)
    {
        $this->container['display_name'] = $display_name;

        return $this;
    }

    /**
     * Gets is_guest
     *
     * @return bool
     */
    public function getIsGuest()
    {
        return $this->container['is_guest'];
    }

    /**
     * Sets is_guest
     *
     * @param bool $is_guest is_guest
     *
     * @return $this
     */
    public function setIsGuest($is_guest)
    {
        $this->container['is_guest'] = $is_guest;

        return $this;
    }

    /**
     * Gets state
     *
     * @return \Alfaview\Model\CommonUserState
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \Alfaview\Model\CommonUserState $state state
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets is_spectator
     *
     * @return bool
     */
    public function getIsSpectator()
    {
        return $this->container['is_spectator'];
    }

    /**
     * Sets is_spectator
     *
     * @param bool $is_spectator is_spectator
     *
     * @return $this
     */
    public function setIsSpectator($is_spectator)
    {
        $this->container['is_spectator'] = $is_spectator;

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


