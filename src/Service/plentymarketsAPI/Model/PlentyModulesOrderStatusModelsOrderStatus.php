<?php
/**
 * PlentyModulesOrderStatusModelsOrderStatus
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
 * PlentyModulesOrderStatusModelsOrderStatus Class Doc Comment
 *
 * @category Class
 * @package  BSApp\Service\plentymarketsAPI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PlentyModulesOrderStatusModelsOrderStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'Plenty\Modules\Order\Status\Models\OrderStatus';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'status_id' => 'BigDecimal',
        'is_erasable' => 'bool',
        'created_at' => 'string',
        'updated_at' => 'string',
        'is_frontend_visible' => 'bool',
        'is_reorder_visible' => 'bool',
        'is_redistribution_visible' => 'bool',
        'color' => 'string'];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'status_id' => null,
        'is_erasable' => null,
        'created_at' => null,
        'updated_at' => null,
        'is_frontend_visible' => null,
        'is_reorder_visible' => null,
        'is_redistribution_visible' => null,
        'color' => null];

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
        'status_id' => 'statusId',
        'is_erasable' => 'isErasable',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt',
        'is_frontend_visible' => 'isFrontendVisible',
        'is_reorder_visible' => 'isReorderVisible',
        'is_redistribution_visible' => 'isRedistributionVisible',
        'color' => 'color'];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'status_id' => 'setStatusId',
        'is_erasable' => 'setIsErasable',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'is_frontend_visible' => 'setIsFrontendVisible',
        'is_reorder_visible' => 'setIsReorderVisible',
        'is_redistribution_visible' => 'setIsRedistributionVisible',
        'color' => 'setColor'];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'status_id' => 'getStatusId',
        'is_erasable' => 'getIsErasable',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'is_frontend_visible' => 'getIsFrontendVisible',
        'is_reorder_visible' => 'getIsReorderVisible',
        'is_redistribution_visible' => 'getIsRedistributionVisible',
        'color' => 'getColor'];

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
        $this->container['status_id'] = isset($data['status_id']) ? $data['status_id'] : null;
        $this->container['is_erasable'] = isset($data['is_erasable']) ? $data['is_erasable'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['is_frontend_visible'] = isset($data['is_frontend_visible']) ? $data['is_frontend_visible'] : null;
        $this->container['is_reorder_visible'] = isset($data['is_reorder_visible']) ? $data['is_reorder_visible'] : null;
        $this->container['is_redistribution_visible'] = isset($data['is_redistribution_visible']) ? $data['is_redistribution_visible'] : null;
        $this->container['color'] = isset($data['color']) ? $data['color'] : null;
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
     * Gets status_id
     *
     * @return BigDecimal
     */
    public function getStatusId()
    {
        return $this->container['status_id'];
    }

    /**
     * Sets status_id
     *
     * @param BigDecimal $status_id The ID of the status.
     *
     * @return $this
     */
    public function setStatusId($status_id)
    {
        $this->container['status_id'] = $status_id;

        return $this;
    }

    /**
     * Gets is_erasable
     *
     * @return bool
     */
    public function getIsErasable()
    {
        return $this->container['is_erasable'];
    }

    /**
     * Sets is_erasable
     *
     * @param bool $is_erasable Flag that indicates whether the status is erasable or not.
     *
     * @return $this
     */
    public function setIsErasable($is_erasable)
    {
        $this->container['is_erasable'] = $is_erasable;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param string $created_at The date, when the status was created.
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param string $updated_at The date, when the status was updated.
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets is_frontend_visible
     *
     * @return bool
     */
    public function getIsFrontendVisible()
    {
        return $this->container['is_frontend_visible'];
    }

    /**
     * Sets is_frontend_visible
     *
     * @param bool $is_frontend_visible Indicates visibility in frontend.
     *
     * @return $this
     */
    public function setIsFrontendVisible($is_frontend_visible)
    {
        $this->container['is_frontend_visible'] = $is_frontend_visible;

        return $this;
    }

    /**
     * Gets is_reorder_visible
     *
     * @return bool
     */
    public function getIsReorderVisible()
    {
        return $this->container['is_reorder_visible'];
    }

    /**
     * Sets is_reorder_visible
     *
     * @param bool $is_reorder_visible Indicates visibility in reorder.
     *
     * @return $this
     */
    public function setIsReorderVisible($is_reorder_visible)
    {
        $this->container['is_reorder_visible'] = $is_reorder_visible;

        return $this;
    }

    /**
     * Gets is_redistribution_visible
     *
     * @return bool
     */
    public function getIsRedistributionVisible()
    {
        return $this->container['is_redistribution_visible'];
    }

    /**
     * Sets is_redistribution_visible
     *
     * @param bool $is_redistribution_visible Indicates visibility in redistribution.
     *
     * @return $this
     */
    public function setIsRedistributionVisible($is_redistribution_visible)
    {
        $this->container['is_redistribution_visible'] = $is_redistribution_visible;

        return $this;
    }

    /**
     * Gets color
     *
     * @return string
     */
    public function getColor()
    {
        return $this->container['color'];
    }

    /**
     * Sets color
     *
     * @param string $color The color of the status.
     *
     * @return $this
     */
    public function setColor($color)
    {
        $this->container['color'] = $color;

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