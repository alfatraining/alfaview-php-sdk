<?php
/**
 * BusinessLogicServiceCompanyCreateRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Alfaview
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * businessLogicService/businessLogicService.proto
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
 * BusinessLogicServiceCompanyCreateRequest Class Doc Comment
 *
 * @category Class
 * @description * Use CompanyCreateRequest to create a company with a user profile and a single room attached to it.
 * @package  Alfaview
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BusinessLogicServiceCompanyCreateRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'businessLogicServiceCompanyCreateRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'access_info' => '\Alfaview\Model\CommonAccessInfo',
        'company_name' => 'string',
        'user' => '\Alfaview\Model\CommonUser',
        'user_permissions' => 'map[string,bool]',
        'room' => '\Alfaview\Model\CommonRoom',
        'finish_signup_url' => 'string',
        'plan_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'access_info' => null,
        'company_name' => null,
        'user' => null,
        'user_permissions' => null,
        'room' => null,
        'finish_signup_url' => null,
        'plan_id' => null
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
        'company_name' => 'companyName',
        'user' => 'user',
        'user_permissions' => 'userPermissions',
        'room' => 'room',
        'finish_signup_url' => 'finishSignupURL',
        'plan_id' => 'planId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'access_info' => 'setAccessInfo',
        'company_name' => 'setCompanyName',
        'user' => 'setUser',
        'user_permissions' => 'setUserPermissions',
        'room' => 'setRoom',
        'finish_signup_url' => 'setFinishSignupUrl',
        'plan_id' => 'setPlanId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'access_info' => 'getAccessInfo',
        'company_name' => 'getCompanyName',
        'user' => 'getUser',
        'user_permissions' => 'getUserPermissions',
        'room' => 'getRoom',
        'finish_signup_url' => 'getFinishSignupUrl',
        'plan_id' => 'getPlanId'
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
        $this->container['company_name'] = isset($data['company_name']) ? $data['company_name'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['user_permissions'] = isset($data['user_permissions']) ? $data['user_permissions'] : null;
        $this->container['room'] = isset($data['room']) ? $data['room'] : null;
        $this->container['finish_signup_url'] = isset($data['finish_signup_url']) ? $data['finish_signup_url'] : null;
        $this->container['plan_id'] = isset($data['plan_id']) ? $data['plan_id'] : null;
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
     * Gets company_name
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->container['company_name'];
    }

    /**
     * Sets company_name
     *
     * @param string $company_name company_name
     *
     * @return $this
     */
    public function setCompanyName($company_name)
    {
        $this->container['company_name'] = $company_name;

        return $this;
    }

    /**
     * Gets user
     *
     * @return \Alfaview\Model\CommonUser
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param \Alfaview\Model\CommonUser $user user
     *
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets user_permissions
     *
     * @return map[string,bool]
     */
    public function getUserPermissions()
    {
        return $this->container['user_permissions'];
    }

    /**
     * Sets user_permissions
     *
     * @param map[string,bool] $user_permissions user_permissions
     *
     * @return $this
     */
    public function setUserPermissions($user_permissions)
    {
        $this->container['user_permissions'] = $user_permissions;

        return $this;
    }

    /**
     * Gets room
     *
     * @return \Alfaview\Model\CommonRoom
     */
    public function getRoom()
    {
        return $this->container['room'];
    }

    /**
     * Sets room
     *
     * @param \Alfaview\Model\CommonRoom $room room
     *
     * @return $this
     */
    public function setRoom($room)
    {
        $this->container['room'] = $room;

        return $this;
    }

    /**
     * Gets finish_signup_url
     *
     * @return string
     */
    public function getFinishSignupUrl()
    {
        return $this->container['finish_signup_url'];
    }

    /**
     * Sets finish_signup_url
     *
     * @param string $finish_signup_url finish_signup_url
     *
     * @return $this
     */
    public function setFinishSignupUrl($finish_signup_url)
    {
        $this->container['finish_signup_url'] = $finish_signup_url;

        return $this;
    }

    /**
     * Gets plan_id
     *
     * @return string
     */
    public function getPlanId()
    {
        return $this->container['plan_id'];
    }

    /**
     * Sets plan_id
     *
     * @param string $plan_id plan_id
     *
     * @return $this
     */
    public function setPlanId($plan_id)
    {
        $this->container['plan_id'] = $plan_id;

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


