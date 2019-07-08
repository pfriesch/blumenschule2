<?php
/**
 * PlentyModulesPropertyModelsPropertyRelation
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
 * PlentyModulesPropertyModelsPropertyRelation Class Doc Comment
 *
 * @category Class
 * @package  BSApp\Service\plentymarketsAPI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PlentyModulesPropertyModelsPropertyRelation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'Plenty\Modules\Property\Models\PropertyRelation';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'id' => 'int',
        'property_id' => 'int',
        'relation_type_identifier' => 'string',
        'relation_target_id' => 'int',
        'selection_relation_id' => 'int'];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'id' => null,
        'property_id' => null,
        'relation_type_identifier' => null,
        'relation_target_id' => null,
        'selection_relation_id' => null];

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
        'property_id' => 'propertyId',
        'relation_type_identifier' => 'relationTypeIdentifier',
        'relation_target_id' => 'relationTargetId',
        'selection_relation_id' => 'selectionRelationId'];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'property_id' => 'setPropertyId',
        'relation_type_identifier' => 'setRelationTypeIdentifier',
        'relation_target_id' => 'setRelationTargetId',
        'selection_relation_id' => 'setSelectionRelationId'];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'property_id' => 'getPropertyId',
        'relation_type_identifier' => 'getRelationTypeIdentifier',
        'relation_target_id' => 'getRelationTargetId',
        'selection_relation_id' => 'getSelectionRelationId'];

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
        $this->container['property_id'] = isset($data['property_id']) ? $data['property_id'] : null;
        $this->container['relation_type_identifier'] = isset($data['relation_type_identifier']) ? $data['relation_type_identifier'] : null;
        $this->container['relation_target_id'] = isset($data['relation_target_id']) ? $data['relation_target_id'] : null;
        $this->container['selection_relation_id'] = isset($data['selection_relation_id']) ? $data['selection_relation_id'] : null;
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
     * @param int $id The ID of the property relation
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * @param int $property_id The ID of the property
     *
     * @return $this
     */
    public function setPropertyId($property_id)
    {
        $this->container['property_id'] = $property_id;

        return $this;
    }

    /**
     * Gets relation_type_identifier
     *
     * @return string
     */
    public function getRelationTypeIdentifier()
    {
        return $this->container['relation_type_identifier'];
    }

    /**
     * Sets relation_type_identifier
     *
     * @param string $relation_type_identifier The identifier of the property relation
     *
     * @return $this
     */
    public function setRelationTypeIdentifier($relation_type_identifier)
    {
        $this->container['relation_type_identifier'] = $relation_type_identifier;

        return $this;
    }

    /**
     * Gets relation_target_id
     *
     * @return int
     */
    public function getRelationTargetId()
    {
        return $this->container['relation_target_id'];
    }

    /**
     * Sets relation_target_id
     *
     * @param int $relation_target_id The ID of the target of the relation
     *
     * @return $this
     */
    public function setRelationTargetId($relation_target_id)
    {
        $this->container['relation_target_id'] = $relation_target_id;

        return $this;
    }

    /**
     * Gets selection_relation_id
     *
     * @return int
     */
    public function getSelectionRelationId()
    {
        return $this->container['selection_relation_id'];
    }

    /**
     * Sets selection_relation_id
     *
     * @param int $selection_relation_id The ID of the selection relation
     *
     * @return $this
     */
    public function setSelectionRelationId($selection_relation_id)
    {
        $this->container['selection_relation_id'] = $selection_relation_id;

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
