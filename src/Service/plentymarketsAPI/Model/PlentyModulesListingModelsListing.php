<?php
/**
 * PlentyModulesListingModelsListing
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
 * PlentyModulesListingModelsListing Class Doc Comment
 *
 * @category Class
 * @package  BSApp\Service\plentymarketsAPI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PlentyModulesListingModelsListing implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Plenty\Modules\Listing\Models\Listing';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'item_id' => 'int',
'type_id' => 'int',
'stock_dependence_type_id' => 'int',
'unit_combination_id' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'item_id' => null,
'type_id' => null,
'stock_dependence_type_id' => null,
'unit_combination_id' => null    ];

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
'item_id' => 'itemId',
'type_id' => 'typeId',
'stock_dependence_type_id' => 'stockDependenceTypeId',
'unit_combination_id' => 'unitCombinationId'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'item_id' => 'setItemId',
'type_id' => 'setTypeId',
'stock_dependence_type_id' => 'setStockDependenceTypeId',
'unit_combination_id' => 'setUnitCombinationId'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'item_id' => 'getItemId',
'type_id' => 'getTypeId',
'stock_dependence_type_id' => 'getStockDependenceTypeId',
'unit_combination_id' => 'getUnitCombinationId'    ];

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
        $this->container['item_id'] = isset($data['item_id']) ? $data['item_id'] : null;
        $this->container['type_id'] = isset($data['type_id']) ? $data['type_id'] : null;
        $this->container['stock_dependence_type_id'] = isset($data['stock_dependence_type_id']) ? $data['stock_dependence_type_id'] : null;
        $this->container['unit_combination_id'] = isset($data['unit_combination_id']) ? $data['unit_combination_id'] : null;
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
     * @param int $id The ID of the listing.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets item_id
     *
     * @return int
     */
    public function getItemId()
    {
        return $this->container['item_id'];
    }

    /**
     * Sets item_id
     *
     * @param int $item_id The ID of the item.
     *
     * @return $this
     */
    public function setItemId($item_id)
    {
        $this->container['item_id'] = $item_id;

        return $this;
    }

    /**
     * Gets type_id
     *
     * @return int
     */
    public function getTypeId()
    {
        return $this->container['type_id'];
    }

    /**
     * Sets type_id
     *
     * @param int $type_id The ID of the listing type. Possible types are: <ul>     <li>1 = Auction</li>     <li>2 = Fixed</li>     <li>3 = Shop item</li> </ul>
     *
     * @return $this
     */
    public function setTypeId($type_id)
    {
        $this->container['type_id'] = $type_id;

        return $this;
    }

    /**
     * Gets stock_dependence_type_id
     *
     * @return int
     */
    public function getStockDependenceTypeId()
    {
        return $this->container['stock_dependence_type_id'];
    }

    /**
     * Sets stock_dependence_type_id
     *
     * @param int $stock_dependence_type_id The ID of the listing stock dependence. Possible stock dependence types are: <ul>     <li>1 = Unlimited with sync</li>     <li>2 = Limited with reservation</li>     <li>3 = Limited without reservation</li>     <li>4 = Unlimited without sync</li> </ul>
     *
     * @return $this
     */
    public function setStockDependenceTypeId($stock_dependence_type_id)
    {
        $this->container['stock_dependence_type_id'] = $stock_dependence_type_id;

        return $this;
    }

    /**
     * Gets unit_combination_id
     *
     * @return int
     */
    public function getUnitCombinationId()
    {
        return $this->container['unit_combination_id'];
    }

    /**
     * Sets unit_combination_id
     *
     * @param int $unit_combination_id The ID of the unit combination.
     *
     * @return $this
     */
    public function setUnitCombinationId($unit_combination_id)
    {
        $this->container['unit_combination_id'] = $unit_combination_id;

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
     * @param mixed   $value  Value to be set
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
