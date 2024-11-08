<?php
/**
 * AuthenticationAuthenticationRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Alfaview
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * userService/userService.proto
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
 * AuthenticationAuthenticationRequest Class Doc Comment
 *
 * @category Class
 * @description * AuthenticationRequest contains everything needed to authenticate a user on our platform.
 * @package  Alfaview
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AuthenticationAuthenticationRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'authenticationAuthenticationRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'access_info' => '\Alfaview\Model\CommonAccessInfo',
        'request_id' => 'string',
        'username_password_credentials' => '\Alfaview\Model\AuthenticationUsernamePasswordCredentials',
        'authorization_code_credentials' => '\Alfaview\Model\AuthenticationAuthorizationCodeCredentials',
        'refresh_token_credentials' => '\Alfaview\Model\AuthenticationRefreshTokenCredentials',
        'ldap_credentials' => '\Alfaview\Model\AuthenticationLdapCredentials',
        'activation_token_credentials' => '\Alfaview\Model\AuthenticationActivationTokenCredentials',
        'company_switch_credentials' => '\Alfaview\Model\AuthenticationCompanySwitchCredentials',
        'magic_token_credentials' => '\Alfaview\Model\AuthenticationMagicTokenCredentials',
        'permissions' => 'map[string,bool]',
        'account_status' => '\Alfaview\Model\AuthenticationAccountStatus',
        'metadata' => 'map[string,string]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'access_info' => null,
        'request_id' => null,
        'username_password_credentials' => null,
        'authorization_code_credentials' => null,
        'refresh_token_credentials' => null,
        'ldap_credentials' => null,
        'activation_token_credentials' => null,
        'company_switch_credentials' => null,
        'magic_token_credentials' => null,
        'permissions' => null,
        'account_status' => null,
        'metadata' => null
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
        'request_id' => 'requestId',
        'username_password_credentials' => 'usernamePasswordCredentials',
        'authorization_code_credentials' => 'authorizationCodeCredentials',
        'refresh_token_credentials' => 'refreshTokenCredentials',
        'ldap_credentials' => 'ldapCredentials',
        'activation_token_credentials' => 'activationTokenCredentials',
        'company_switch_credentials' => 'companySwitchCredentials',
        'magic_token_credentials' => 'magicTokenCredentials',
        'permissions' => 'permissions',
        'account_status' => 'accountStatus',
        'metadata' => 'metadata'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'access_info' => 'setAccessInfo',
        'request_id' => 'setRequestId',
        'username_password_credentials' => 'setUsernamePasswordCredentials',
        'authorization_code_credentials' => 'setAuthorizationCodeCredentials',
        'refresh_token_credentials' => 'setRefreshTokenCredentials',
        'ldap_credentials' => 'setLdapCredentials',
        'activation_token_credentials' => 'setActivationTokenCredentials',
        'company_switch_credentials' => 'setCompanySwitchCredentials',
        'magic_token_credentials' => 'setMagicTokenCredentials',
        'permissions' => 'setPermissions',
        'account_status' => 'setAccountStatus',
        'metadata' => 'setMetadata'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'access_info' => 'getAccessInfo',
        'request_id' => 'getRequestId',
        'username_password_credentials' => 'getUsernamePasswordCredentials',
        'authorization_code_credentials' => 'getAuthorizationCodeCredentials',
        'refresh_token_credentials' => 'getRefreshTokenCredentials',
        'ldap_credentials' => 'getLdapCredentials',
        'activation_token_credentials' => 'getActivationTokenCredentials',
        'company_switch_credentials' => 'getCompanySwitchCredentials',
        'magic_token_credentials' => 'getMagicTokenCredentials',
        'permissions' => 'getPermissions',
        'account_status' => 'getAccountStatus',
        'metadata' => 'getMetadata'
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
        $this->container['request_id'] = isset($data['request_id']) ? $data['request_id'] : null;
        $this->container['username_password_credentials'] = isset($data['username_password_credentials']) ? $data['username_password_credentials'] : null;
        $this->container['authorization_code_credentials'] = isset($data['authorization_code_credentials']) ? $data['authorization_code_credentials'] : null;
        $this->container['refresh_token_credentials'] = isset($data['refresh_token_credentials']) ? $data['refresh_token_credentials'] : null;
        $this->container['ldap_credentials'] = isset($data['ldap_credentials']) ? $data['ldap_credentials'] : null;
        $this->container['activation_token_credentials'] = isset($data['activation_token_credentials']) ? $data['activation_token_credentials'] : null;
        $this->container['company_switch_credentials'] = isset($data['company_switch_credentials']) ? $data['company_switch_credentials'] : null;
        $this->container['magic_token_credentials'] = isset($data['magic_token_credentials']) ? $data['magic_token_credentials'] : null;
        $this->container['permissions'] = isset($data['permissions']) ? $data['permissions'] : null;
        $this->container['account_status'] = isset($data['account_status']) ? $data['account_status'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
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
     * Gets request_id
     *
     * @return string
     */
    public function getRequestId()
    {
        return $this->container['request_id'];
    }

    /**
     * Sets request_id
     *
     * @param string $request_id request_id
     *
     * @return $this
     */
    public function setRequestId($request_id)
    {
        $this->container['request_id'] = $request_id;

        return $this;
    }

    /**
     * Gets username_password_credentials
     *
     * @return \Alfaview\Model\AuthenticationUsernamePasswordCredentials
     */
    public function getUsernamePasswordCredentials()
    {
        return $this->container['username_password_credentials'];
    }

    /**
     * Sets username_password_credentials
     *
     * @param \Alfaview\Model\AuthenticationUsernamePasswordCredentials $username_password_credentials username_password_credentials
     *
     * @return $this
     */
    public function setUsernamePasswordCredentials($username_password_credentials)
    {
        $this->container['username_password_credentials'] = $username_password_credentials;

        return $this;
    }

    /**
     * Gets authorization_code_credentials
     *
     * @return \Alfaview\Model\AuthenticationAuthorizationCodeCredentials
     */
    public function getAuthorizationCodeCredentials()
    {
        return $this->container['authorization_code_credentials'];
    }

    /**
     * Sets authorization_code_credentials
     *
     * @param \Alfaview\Model\AuthenticationAuthorizationCodeCredentials $authorization_code_credentials authorization_code_credentials
     *
     * @return $this
     */
    public function setAuthorizationCodeCredentials($authorization_code_credentials)
    {
        $this->container['authorization_code_credentials'] = $authorization_code_credentials;

        return $this;
    }

    /**
     * Gets refresh_token_credentials
     *
     * @return \Alfaview\Model\AuthenticationRefreshTokenCredentials
     */
    public function getRefreshTokenCredentials()
    {
        return $this->container['refresh_token_credentials'];
    }

    /**
     * Sets refresh_token_credentials
     *
     * @param \Alfaview\Model\AuthenticationRefreshTokenCredentials $refresh_token_credentials refresh_token_credentials
     *
     * @return $this
     */
    public function setRefreshTokenCredentials($refresh_token_credentials)
    {
        $this->container['refresh_token_credentials'] = $refresh_token_credentials;

        return $this;
    }

    /**
     * Gets ldap_credentials
     *
     * @return \Alfaview\Model\AuthenticationLdapCredentials
     */
    public function getLdapCredentials()
    {
        return $this->container['ldap_credentials'];
    }

    /**
     * Sets ldap_credentials
     *
     * @param \Alfaview\Model\AuthenticationLdapCredentials $ldap_credentials ldap_credentials
     *
     * @return $this
     */
    public function setLdapCredentials($ldap_credentials)
    {
        $this->container['ldap_credentials'] = $ldap_credentials;

        return $this;
    }

    /**
     * Gets activation_token_credentials
     *
     * @return \Alfaview\Model\AuthenticationActivationTokenCredentials
     */
    public function getActivationTokenCredentials()
    {
        return $this->container['activation_token_credentials'];
    }

    /**
     * Sets activation_token_credentials
     *
     * @param \Alfaview\Model\AuthenticationActivationTokenCredentials $activation_token_credentials activation_token_credentials
     *
     * @return $this
     */
    public function setActivationTokenCredentials($activation_token_credentials)
    {
        $this->container['activation_token_credentials'] = $activation_token_credentials;

        return $this;
    }

    /**
     * Gets company_switch_credentials
     *
     * @return \Alfaview\Model\AuthenticationCompanySwitchCredentials
     */
    public function getCompanySwitchCredentials()
    {
        return $this->container['company_switch_credentials'];
    }

    /**
     * Sets company_switch_credentials
     *
     * @param \Alfaview\Model\AuthenticationCompanySwitchCredentials $company_switch_credentials company_switch_credentials
     *
     * @return $this
     */
    public function setCompanySwitchCredentials($company_switch_credentials)
    {
        $this->container['company_switch_credentials'] = $company_switch_credentials;

        return $this;
    }

    /**
     * Gets magic_token_credentials
     *
     * @return \Alfaview\Model\AuthenticationMagicTokenCredentials
     */
    public function getMagicTokenCredentials()
    {
        return $this->container['magic_token_credentials'];
    }

    /**
     * Sets magic_token_credentials
     *
     * @param \Alfaview\Model\AuthenticationMagicTokenCredentials $magic_token_credentials magic_token_credentials
     *
     * @return $this
     */
    public function setMagicTokenCredentials($magic_token_credentials)
    {
        $this->container['magic_token_credentials'] = $magic_token_credentials;

        return $this;
    }

    /**
     * Gets permissions
     *
     * @return map[string,bool]
     */
    public function getPermissions()
    {
        return $this->container['permissions'];
    }

    /**
     * Sets permissions
     *
     * @param map[string,bool] $permissions permissions
     *
     * @return $this
     */
    public function setPermissions($permissions)
    {
        $this->container['permissions'] = $permissions;

        return $this;
    }

    /**
     * Gets account_status
     *
     * @return \Alfaview\Model\AuthenticationAccountStatus
     */
    public function getAccountStatus()
    {
        return $this->container['account_status'];
    }

    /**
     * Sets account_status
     *
     * @param \Alfaview\Model\AuthenticationAccountStatus $account_status account_status
     *
     * @return $this
     */
    public function setAccountStatus($account_status)
    {
        $this->container['account_status'] = $account_status;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return map[string,string]
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param map[string,string] $metadata metadata
     *
     * @return $this
     */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;

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


