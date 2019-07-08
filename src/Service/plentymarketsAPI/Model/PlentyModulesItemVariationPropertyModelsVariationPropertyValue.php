<?php
/**
 * PlentyModulesItemVariationPropertyModelsVariationPropertyValue
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
 * PlentyModulesItemVariationPropertyModelsVariationPropertyValue Class Doc Comment
 *
 * @category Class
 * @package  BSApp\Service\plentymarketsAPI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PlentyModulesItemVariationPropertyModelsVariationPropertyValue implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'Plenty\Modules\Item\VariationProperty\Models\VariationPropertyValue';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'id' => 'int',
        'variation_id' => 'int',
        'property_id' => 'int',
        'property_selection_id' => 'int',
        'value_int' => 'int',
        'value_float' => 'BigDecimal',
        'value_file' => 'string',
        'surcharge' => 'BigDecimal',
        'property' => 'object',
        'value_texts' => '\BSApp\Service\plentymarketsAPI\Model\PlentyModulesItemVariationPropertyModelsVariationPropertyValueText[]'];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'id' => null,
        'variation_id' => null,
        'property_id' => null,
        'property_selection_id' => null,
        'value_int' => null,
        'value_float' => null,
        'value_file' => null,
        'surcharge' => null,
        'property' => null,
        'value_texts' => null];

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
        'variation_id' => 'variationId',
        'property_id' => 'propertyId',
        'property_selection_id' => 'propertySelectionId',
        'value_int' => 'valueInt',
        'value_float' => 'valueFloat',
        'value_file' => 'valueFile',
        'surcharge' => 'surcharge',
        'property' => 'property',
        'value_texts' => 'valueTexts'];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'variation_id' => 'setVariationId',
        'property_id' => 'setPropertyId',
        'property_selection_id' => 'setPropertySelectionId',
        'value_int' => 'setValueInt',
        'value_float' => 'setValueFloat',
        'value_file' => 'setValueFile',
        'surcharge' => 'setSurcharge',
        'property' => 'setProperty',
        'value_texts' => 'setValueTexts'];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'variation_id' => 'getVariationId',
        'property_id' => 'getPropertyId',
        'property_selection_id' => 'getPropertySelectionId',
        'value_int' => 'getValueInt',
        'value_float' => 'getValueFloat',
        'value_file' => 'getValueFile',
        'surcharge' => 'getSurcharge',
        'property' => 'getProperty',
        'value_texts' => 'getValueTexts'];

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
        $this->container['variation_id'] = isset($data['variation_id']) ? $data['variation_id'] : null;
        $this->container['property_id'] = isset($data['property_id']) ? $data['property_id'] : null;
        $this->container['property_selection_id'] = isset($data['property_selection_id']) ? $data['property_selection_id'] : null;
        $this->container['value_int'] = isset($data['value_int']) ? $data['value_int'] : null;
        $this->container['value_float'] = isset($data['value_float']) ? $data['value_float'] : null;
        $this->container['value_file'] = isset($data['value_file']) ? $data['value_file'] : null;
        $this->container['surcharge'] = isset($data['surcharge']) ? $data['surcharge'] : null;
        $this->container['property'] = isset($data['property']) ? $data['property'] : null;
        $this->container['value_texts'] = isset($data['value_texts']) ? $data['value_texts'] : null;
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
     * @param int $id The unique ID of the link between the variation and the property value
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets variation_id
     *
     * @return int
     */
    public function getVariationId()
    {
        return $this->container['variation_id'];
    }

    /**
     * Sets variation_id
     *
     * @param int $variation_id The unique ID of the variation
     *
     * @return $this
     */
    public function setVariationId($variation_id)
    {
        $this->container['variation_id'] = $variation_id;

        return $this;
    }

    /**
     * Gets property_id
     *
     * @return int
     */
    public function getPropertyId()
    {
        return $this->container['property_id'];
    }

    /**
     * Sets property_id
     *
     * @param int $property_id The unique ID of the property
     *
     * @return $this
     */
    public function setPropertyId($property_id)
    {
        $this->container['property_id'] = $property_id;

        return $this;
    }

    /**
     * Gets property_selection_id
     *
     * @return int
     */
    public function getPropertySelectionId()
    {
        return $this->container['property_selection_id'];
    }

    /**
     * Sets property_selection_id
     *
     * @param int $property_selection_id The unique ID of the property selection of the variation
     *
     * @return $this
     */
    public function setPropertySelectionId($property_selection_id)
    {
        $this->container['property_selection_id'] = $property_selection_id;

        return $this;
    }

    /**
     * Gets value_int
     *
     * @return int
     */
    public function getValueInt()
    {
        return $this->container['value_int'];
    }

    /**
     * Sets value_int
     *
     * @param int $value_int The int value of the property value of the variation
     *
     * @return $this
     */
    public function setValueInt($value_int)
    {
        $this->container['value_int'] = $value_int;

        return $this;
    }

    /**
     * Gets value_float
     *
     * @return BigDecimal
     */
    public function getValueFloat()
    {
        return $this->container['value_float'];
    }

    /**
     * Sets value_float
     *
     * @param BigDecimal $value_float The float value of the property value of the variation
     *
     * @return $this
     */
    public function setValueFloat($value_float)
    {
        $this->container['value_float'] = $value_float;

        return $this;
    }

    /**
     * Gets value_file
     *
     * @return string
     */
    public function getValueFile()
    {
        return $this->container['value_file'];
    }

    /**
     * Sets value_file
     *
     * @param string $value_file The file value of the property value of the variation
     *
     * @return $this
     */
    public function setValueFile($value_file)
    {
        $this->container['value_file'] = $value_file;

        return $this;
    }

    /**
     * Gets surcharge
     *
     * @return BigDecimal
     */
    public function getSurcharge()
    {
        return $this->container['surcharge'];
    }

    /**
     * Sets surcharge
     *
     * @param BigDecimal $surcharge The surcharge of the property value of the variation
     *
     * @return $this
     */
    public function setSurcharge($surcharge)
    {
        $this->container['surcharge'] = $surcharge;

        return $this;
    }

    /**
     * Gets property
     *
     * @return object
     */
    public function getProperty()
    {
        return $this->container['property'];
    }

    /**
     * Sets property
     *
     * @param object $property (Object)
     *
     * @return $this
     */
    public function setProperty($property)
    {
        $this->container['property'] = $property;

        return $this;
    }

    /**
     * Gets value_texts
     *
     * @return PlentyModulesItemVariationPropertyModelsVariationPropertyValueText[]
     */
    public function getValueTexts()
    {
        return $this->container['value_texts'];
    }

    /**
     * Sets value_texts
     *
     * @param PlentyModulesItemVariationPropertyModelsVariationPropertyValueText[] $value_texts (List)
     *
     * @return $this
     */
    public function setValueTexts($value_texts)
    {
        $this->container['value_texts'] = $value_texts;

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