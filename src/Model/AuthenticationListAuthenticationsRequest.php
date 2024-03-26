<?php
/**
 * AuthenticationListAuthenticationsRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Alfaview
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * authService/authenticationService.proto
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
 * AuthenticationListAuthenticationsRequest Class Doc Comment
 *
 * @category Class
 * @description * ListAuthenticationsRequest is used to list authentication methods. You may list by a variety of different attributes – these are also combinable, i.e. requesting the authentication methods of a list of user IDs of a specific key type in a specific state (pending/activated/locked). Depending on your permissions, some of these will be invalid or disallowed. For normal users only their own authentication methods will be returned (matching the user ID in their token).
 * @package  Alfaview
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AuthenticationListAuthenticationsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'authenticationListAuthenticationsRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'access_info' => '\Alfaview\Model\CommonAccessInfo',
        'limit' => 'int',
        'offset' => 'int',
        'principal' => 'string[]',
        'user_id_list' => 'string[]',
        'account_status' => '\Alfaview\Model\AuthenticationAccountStatus[]',
        'key_type' => 'string[]',
        'company_id' => 'string[]',
        'only_eligible_for_company_switch' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'access_info' => null,
        'limit' => 'int64',
        'offset' => 'int64',
        'principal' => null,
        'user_id_list' => null,
        'account_status' => null,
        'key_type' => null,
        'company_id' => null,
        'only_eligible_for_company_switch' => null
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
        'limit' => 'limit',
        'offset' => 'offset',
        'principal' => 'principal',
        'user_id_list' => 'userIdList',
        'account_status' => 'accountStatus',
        'key_type' => 'keyType',
        'company_id' => 'companyId',
        'only_eligible_for_company_switch' => 'onlyEligibleForCompanySwitch'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'access_info' => 'setAccessInfo',
        'limit' => 'setLimit',
        'offset' => 'setOffset',
        'principal' => 'setPrincipal',
        'user_id_list' => 'setUserIdList',
        'account_status' => 'setAccountStatus',
        'key_type' => 'setKeyType',
        'company_id' => 'setCompanyId',
        'only_eligible_for_company_switch' => 'setOnlyEligibleForCompanySwitch'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'access_info' => 'getAccessInfo',
        'limit' => 'getLimit',
        'offset' => 'getOffset',
        'principal' => 'getPrincipal',
        'user_id_list' => 'getUserIdList',
        'account_status' => 'getAccountStatus',
        'key_type' => 'getKeyType',
        'company_id' => 'getCompanyId',
        'only_eligible_for_company_switch' => 'getOnlyEligibleForCompanySwitch'
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
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['principal'] = isset($data['principal']) ? $data['principal'] : null;
        $this->container['user_id_list'] = isset($data['user_id_list']) ? $data['user_id_list'] : null;
        $this->container['account_status'] = isset($data['account_status']) ? $data['account_status'] : null;
        $this->container['key_type'] = isset($data['key_type']) ? $data['key_type'] : null;
        $this->container['company_id'] = isset($data['company_id']) ? $data['company_id'] : null;
        $this->container['only_eligible_for_company_switch'] = isset($data['only_eligible_for_company_switch']) ? $data['only_eligible_for_company_switch'] : null;
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
     * Gets limit
     *
     * @return int
     */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
     * Sets limit
     *
     * @param int $limit limit
     *
     * @return $this
     */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;

        return $this;
    }

    /**
     * Gets offset
     *
     * @return int
     */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
     * Sets offset
     *
     * @param int $offset offset
     *
     * @return $this
     */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;

        return $this;
    }

    /**
     * Gets principal
     *
     * @return string[]
     */
    public function getPrincipal()
    {
        return $this->container['principal'];
    }

    /**
     * Sets principal
     *
     * @param string[] $principal principal
     *
     * @return $this
     */
    public function setPrincipal($principal)
    {
        $this->container['principal'] = $principal;

        return $this;
    }

    /**
     * Gets user_id_list
     *
     * @return string[]
     */
    public function getUserIdList()
    {
        return $this->container['user_id_list'];
    }

    /**
     * Sets user_id_list
     *
     * @param string[] $user_id_list user_id_list
     *
     * @return $this
     */
    public function setUserIdList($user_id_list)
    {
        $this->container['user_id_list'] = $user_id_list;

        return $this;
    }

    /**
     * Gets account_status
     *
     * @return \Alfaview\Model\AuthenticationAccountStatus[]
     */
    public function getAccountStatus()
    {
        return $this->container['account_status'];
    }

    /**
     * Sets account_status
     *
     * @param \Alfaview\Model\AuthenticationAccountStatus[] $account_status account_status
     *
     * @return $this
     */
    public function setAccountStatus($account_status)
    {
        $this->container['account_status'] = $account_status;

        return $this;
    }

    /**
     * Gets key_type
     *
     * @return string[]
     */
    public function getKeyType()
    {
        return $this->container['key_type'];
    }

    /**
     * Sets key_type
     *
     * @param string[] $key_type key_type
     *
     * @return $this
     */
    public function setKeyType($key_type)
    {
        $this->container['key_type'] = $key_type;

        return $this;
    }

    /**
     * Gets company_id
     *
     * @return string[]
     */
    public function getCompanyId()
    {
        return $this->container['company_id'];
    }

    /**
     * Sets company_id
     *
     * @param string[] $company_id company_id
     *
     * @return $this
     */
    public function setCompanyId($company_id)
    {
        $this->container['company_id'] = $company_id;

        return $this;
    }

    /**
     * Gets only_eligible_for_company_switch
     *
     * @return bool
     */
    public function getOnlyEligibleForCompanySwitch()
    {
        return $this->container['only_eligible_for_company_switch'];
    }

    /**
     * Sets only_eligible_for_company_switch
     *
     * @param bool $only_eligible_for_company_switch only_eligible_for_company_switch
     *
     * @return $this
     */
    public function setOnlyEligibleForCompanySwitch($only_eligible_for_company_switch)
    {
        $this->container['only_eligible_for_company_switch'] = $only_eligible_for_company_switch;

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


