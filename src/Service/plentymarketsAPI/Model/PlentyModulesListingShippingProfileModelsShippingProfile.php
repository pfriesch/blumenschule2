<?php
/**
 * PlentyModulesListingShippingProfileModelsShippingProfile
 *
 * PHP version 5
 *
 * @category Class
 * @package  BSApp\Service\plentymarketsAPI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * plentymarkets REST-API
 *
 * The plentymarkets REST API expands the functionality of the plentymarkets CMS and allows access to resources, i.e. data records, via unique URI paths
 *
 * OpenAPI spec version: 1.0.0
 *
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.8
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace BSApp\Service\plentymarketsAPI\Model;

use \ArrayAccess;
use \BSApp\Service\plentymarketsAPI\ObjectSerializer;

/**
 * PlentyModulesListingShippingProfileModelsShippingProfile Class Doc Comment
 *
 * @category Class
 * @package  BSApp\Service\plentymarketsAPI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PlentyModulesListingShippingProfileModelsShippingProfile implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'Plenty\Modules\Listing\ShippingProfile\Models\ShippingProfile';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'id' => 'int',
        'name' => 'string',
        'credentials_id' => 'int',
        'referrer_id' => 'int',
        'created_by' => 'string',
        'is_default' => 'bool',
        'extended_data' => 'object[]'];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'id' => null,
        'name' => null,
        'credentials_id' => null,
        'referrer_id' => null,
        'created_by' => null,
        'is_default' => null,
        'extended_data' => null];

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
        'id' => 'id',
        'name' => 'name',
        'credentials_id' => 'credentialsId',
        'referrer_id' => 'referrerId',
        'created_by' => 'createdBy',
        'is_default' => 'isDefault',
        'extended_data' => 'extendedData'];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'credentials_id' => 'setCredentialsId',
        'referrer_id' => 'setReferrerId',
        'created_by' => 'setCreatedBy',
        'is_default' => 'setIsDefault',
        'extended_data' => 'setExtendedData'];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'credentials_id' => 'getCredentialsId',
        'referrer_id' => 'getReferrerId',
        'created_by' => 'getCreatedBy',
        'is_default' => 'getIsDefault',
        'extended_data' => 'getExtendedData'];

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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['credentials_id'] = isset($data['credentials_id']) ? $data['credentials_id'] : null;
        $this->container['referrer_id'] = isset($data['referrer_id']) ? $data['referrer_id'] : null;
        $this->container['created_by'] = isset($data['created_by']) ? $data['created_by'] : null;
        $this->container['is_default'] = isset($data['is_default']) ? $data['is_default'] : null;
        $this->container['extended_data'] = isset($data['extended_data']) ? $data['extended_data'] : null;
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
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id The listing shipping profile ID.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The listing shipping profile name.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets credentials_id
     *
     * @return int
     */
    public function getCredentialsId()
    {
        return $this->container['credentials_id'];
    }

    /**
     * Sets credentials_id
     *
     * @param int $credentials_id The credentials ID that this listing shipping profile belongs to.
     *
     * @return $this
     */
    public function setCredentialsId($credentials_id)
    {
        $this->container['credentials_id'] = $credentials_id;

        return $this;
    }

    /**
     * Gets referrer_id
     *
     * @return int
     */
    public function getReferrerId()
    {
        return $this->container['referrer_id'];
    }

    /**
     * Sets referrer_id
     *
     * @param int $referrer_id The referrer ID.
     *
     * @return $this
     */
    public function setReferrerId($referrer_id)
    {
        $this->container['referrer_id'] = $referrer_id;

        return $this;
    }

    /**
     * Gets created_by
     *
     * @return string
     */
    public function getCreatedBy()
    {
        return $this->container['created_by'];
    }

    /**
     * Sets created_by
     *
     * @param string $created_by Who created the shipping profile. Possible values: 'migration','customer','external'.
     *
     * @return $this
     */
    public function setCreatedBy($created_by)
    {
        $this->container['created_by'] = $created_by;

        return $this;
    }

    /**
     * Gets is_default
     *
     * @return bool
     */
    public function getIsDefault()
    {
        return $this->container['is_default'];
    }

    /**
     * Sets is_default
     *
     * @param bool $is_default Tells if the current listing shipping profile is set as default.
     *
     * @return $this
     */
    public function setIsDefault($is_default)
    {
        $this->container['is_default'] = $is_default;

        return $this;
    }

    /**
     * Gets extended_data
     *
     * @return object[]
     */
    public function getExtendedData()
    {
        return $this->container['extended_data'];
    }

    /**
     * Sets extended_data
     *
     * @param object[] $extended_data Extended data that defines the current shipping profile.
     *
     * @return $this
     */
    public function setExtendedData($extended_data)
    {
        $this->container['extended_data'] = $extended_data;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
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
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed $value Value to be set
     *
     * @return void
     */
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
