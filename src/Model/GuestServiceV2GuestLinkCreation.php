<?php
/**
 * GuestServiceV2GuestLinkCreation
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
 * GuestServiceV2GuestLinkCreation Class Doc Comment
 *
 * @category Class
 * @package  Alfaview
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GuestServiceV2GuestLinkCreation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'guestService.v2.GuestLinkCreation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'email' => 'string',
        'display_name' => 'string',
        'valid_from' => '\DateTime',
        'valid_until' => '\DateTime',
        'locale' => 'string',
        'send_email' => 'bool',
        'permission_group_id' => 'string',
        'skip_room_permissions_update' => 'bool',
        'allow_dial_in' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'email' => null,
        'display_name' => null,
        'valid_from' => 'date-time',
        'valid_until' => 'date-time',
        'locale' => null,
        'send_email' => null,
        'permission_group_id' => null,
        'skip_room_permissions_update' => null,
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
        'email' => 'email',
        'display_name' => 'displayName',
        'valid_from' => 'validFrom',
        'valid_until' => 'validUntil',
        'locale' => 'locale',
        'send_email' => 'sendEmail',
        'permission_group_id' => 'permissionGroupId',
        'skip_room_permissions_update' => 'skipRoomPermissionsUpdate',
        'allow_dial_in' => 'allowDialIn'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'email' => 'setEmail',
        'display_name' => 'setDisplayName',
        'valid_from' => 'setValidFrom',
        'valid_until' => 'setValidUntil',
        'locale' => 'setLocale',
        'send_email' => 'setSendEmail',
        'permission_group_id' => 'setPermissionGroupId',
        'skip_room_permissions_update' => 'setSkipRoomPermissionsUpdate',
        'allow_dial_in' => 'setAllowDialIn'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'email' => 'getEmail',
        'display_name' => 'getDisplayName',
        'valid_from' => 'getValidFrom',
        'valid_until' => 'getValidUntil',
        'locale' => 'getLocale',
        'send_email' => 'getSendEmail',
        'permission_group_id' => 'getPermissionGroupId',
        'skip_room_permissions_update' => 'getSkipRoomPermissionsUpdate',
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
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['display_name'] = isset($data['display_name']) ? $data['display_name'] : null;
        $this->container['valid_from'] = isset($data['valid_from']) ? $data['valid_from'] : null;
        $this->container['valid_until'] = isset($data['valid_until']) ? $data['valid_until'] : null;
        $this->container['locale'] = isset($data['locale']) ? $data['locale'] : null;
        $this->container['send_email'] = isset($data['send_email']) ? $data['send_email'] : null;
        $this->container['permission_group_id'] = isset($data['permission_group_id']) ? $data['permission_group_id'] : null;
        $this->container['skip_room_permissions_update'] = isset($data['skip_room_permissions_update']) ? $data['skip_room_permissions_update'] : null;
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
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

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
     * Gets valid_from
     *
     * @return \DateTime
     */
    public function getValidFrom()
    {
        return $this->container['valid_from'];
    }

    /**
     * Sets valid_from
     *
     * @param \DateTime $valid_from valid_from
     *
     * @return $this
     */
    public function setValidFrom($valid_from)
    {
        $this->container['valid_from'] = $valid_from;

        return $this;
    }

    /**
     * Gets valid_until
     *
     * @return \DateTime
     */
    public function getValidUntil()
    {
        return $this->container['valid_until'];
    }

    /**
     * Sets valid_until
     *
     * @param \DateTime $valid_until valid_until
     *
     * @return $this
     */
    public function setValidUntil($valid_until)
    {
        $this->container['valid_until'] = $valid_until;

        return $this;
    }

    /**
     * Gets locale
     *
     * @return string
     */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
     * Sets locale
     *
     * @param string $locale locale
     *
     * @return $this
     */
    public function setLocale($locale)
    {
        $this->container['locale'] = $locale;

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
     * Gets permission_group_id
     *
     * @return string
     */
    public function getPermissionGroupId()
    {
        return $this->container['permission_group_id'];
    }

    /**
     * Sets permission_group_id
     *
     * @param string $permission_group_id permission_group_id
     *
     * @return $this
     */
    public function setPermissionGroupId($permission_group_id)
    {
        $this->container['permission_group_id'] = $permission_group_id;

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

