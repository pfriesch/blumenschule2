<?php
/**
 * PlentyModulesItemVariationSkuModelsVariationSku
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
 * PlentyModulesItemVariationSkuModelsVariationSku Class Doc Comment
 *
 * @category Class
 * @package  BSApp\Service\plentymarketsAPI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PlentyModulesItemVariationSkuModelsVariationSku implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'Plenty\Modules\Item\VariationSku\Models\VariationSku';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'id' => 'int',
        'variation_id' => 'int',
        'market_id' => 'BigDecimal',
        'account_id' => 'int',
        'initial_sku' => 'string',
        'sku' => 'string',
        'parent_sku' => 'string',
        'is_active' => 'bool',
        'created_at' => 'string',
        'updated_at' => 'string',
        'exported_at' => 'string',
        'stock_updated_at' => 'string',
        'deleted_at' => 'string',
        'status' => 'string',
        'additional_information' => 'string'];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'id' => null,
        'variation_id' => null,
        'market_id' => null,
        'account_id' => null,
        'initial_sku' => null,
        'sku' => null,
        'parent_sku' => null,
        'is_active' => null,
        'created_at' => null,
        'updated_at' => null,
        'exported_at' => null,
        'stock_updated_at' => null,
        'deleted_at' => null,
        'status' => null,
        'additional_information' => null];

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
        'market_id' => 'marketId',
        'account_id' => 'accountId',
        'initial_sku' => 'initialSku',
        'sku' => 'sku',
        'parent_sku' => 'parentSku',
        'is_active' => 'isActive',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt',
        'exported_at' => 'exportedAt',
        'stock_updated_at' => 'stockUpdatedAt',
        'deleted_at' => 'deletedAt',
        'status' => 'status',
        'additional_information' => 'additionalInformation'];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'variation_id' => 'setVariationId',
        'market_id' => 'setMarketId',
        'account_id' => 'setAccountId',
        'initial_sku' => 'setInitialSku',
        'sku' => 'setSku',
        'parent_sku' => 'setParentSku',
        'is_active' => 'setIsActive',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'exported_at' => 'setExportedAt',
        'stock_updated_at' => 'setStockUpdatedAt',
        'deleted_at' => 'setDeletedAt',
        'status' => 'setStatus',
        'additional_information' => 'setAdditionalInformation'];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'variation_id' => 'getVariationId',
        'market_id' => 'getMarketId',
        'account_id' => 'getAccountId',
        'initial_sku' => 'getInitialSku',
        'sku' => 'getSku',
        'parent_sku' => 'getParentSku',
        'is_active' => 'getIsActive',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'exported_at' => 'getExportedAt',
        'stock_updated_at' => 'getStockUpdatedAt',
        'deleted_at' => 'getDeletedAt',
        'status' => 'getStatus',
        'additional_information' => 'getAdditionalInformation'];

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
        $this->container['market_id'] = isset($data['market_id']) ? $data['market_id'] : null;
        $this->container['account_id'] = isset($data['account_id']) ? $data['account_id'] : null;
        $this->container['initial_sku'] = isset($data['initial_sku']) ? $data['initial_sku'] : null;
        $this->container['sku'] = isset($data['sku']) ? $data['sku'] : null;
        $this->container['parent_sku'] = isset($data['parent_sku']) ? $data['parent_sku'] : null;
        $this->container['is_active'] = isset($data['is_active']) ? $data['is_active'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['exported_at'] = isset($data['exported_at']) ? $data['exported_at'] : null;
        $this->container['stock_updated_at'] = isset($data['stock_updated_at']) ? $data['stock_updated_at'] : null;
        $this->container['deleted_at'] = isset($data['deleted_at']) ? $data['deleted_at'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['additional_information'] = isset($data['additional_information']) ? $data['additional_information'] : null;
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
     * @param int $id The row ID of the table plenty_item_variation_market_status
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
     * @param int $variation_id The ID of the variation
     *
     * @return $this
     */
    public function setVariationId($variation_id)
    {
        $this->container['variation_id'] = $variation_id;

        return $this;
    }

    /**
     * Gets market_id
     *
     * @return BigDecimal
     */
    public function getMarketId()
    {
        return $this->container['market_id'];
    }

    /**
     * Sets market_id
     *
     * @param BigDecimal $market_id The ID of the market
     *
     * @return $this
     */
    public function setMarketId($market_id)
    {
        $this->container['market_id'] = $market_id;

        return $this;
    }

    /**
     * Gets account_id
     *
     * @return int
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     *
     * @param int $account_id The ID of the market account
     *
     * @return $this
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets initial_sku
     *
     * @return string
     */
    public function getInitialSku()
    {
        return $this->container['initial_sku'];
    }

    /**
     * Sets initial_sku
     *
     * @param string $initial_sku The initial SKU of the variation. The initial SKU cannot be modified even if the variation SKU is changed. However, it is possible to reset the variation SKU to the initial SKU.
     *
     * @return $this
     */
    public function setInitialSku($initial_sku)
    {
        $this->container['initial_sku'] = $initial_sku;

        return $this;
    }

    /**
     * Gets sku
     *
     * @return string
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string $sku The SKU of the variation. The SKU is adjustable but may not exist twice for the combination of market Id and account Id.
     *
     * @return $this
     */
    public function setSku($sku)
    {
        $this->container['sku'] = $sku;

        return $this;
    }

    /**
     * Gets parent_sku
     *
     * @return string
     */
    public function getParentSku()
    {
        return $this->container['parent_sku'];
    }

    /**
     * Sets parent_sku
     *
     * @param string $parent_sku The Parent SKU of the variation. The Parent SKU is adjustable. The same Parent SKU value should be used on variations of same article.
     *
     * @return $this
     */
    public function setParentSku($parent_sku)
    {
        $this->container['parent_sku'] = $parent_sku;

        return $this;
    }

    /**
     * Gets is_active
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->container['is_active'];
    }

    /**
     * Sets is_active
     *
     * @param bool $is_active Flag that indicates if the item is ready for export (currently not in use).
     *
     * @return $this
     */
    public function setIsActive($is_active)
    {
        $this->container['is_active'] = $is_active;

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
     * @param string $created_at The time the SKU was created (YYYY-MM-DD HH:MM:SS).
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
     * @param string $updated_at The time the SKU was updated (YYYY-MM-DD HH:MM:SS).
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets exported_at
     *
     * @return string
     */
    public function getExportedAt()
    {
        return $this->container['exported_at'];
    }

    /**
     * Sets exported_at
     *
     * @param string $exported_at The time the variation was last exported (YYYY-MM-DD HH:MM:SS).
     *
     * @return $this
     */
    public function setExportedAt($exported_at)
    {
        $this->container['exported_at'] = $exported_at;

        return $this;
    }

    /**
     * Gets stock_updated_at
     *
     * @return string
     */
    public function getStockUpdatedAt()
    {
        return $this->container['stock_updated_at'];
    }

    /**
     * Sets stock_updated_at
     *
     * @param string $stock_updated_at stock_updated_at
     *
     * @return $this
     */
    public function setStockUpdatedAt($stock_updated_at)
    {
        $this->container['stock_updated_at'] = $stock_updated_at;

        return $this;
    }

    /**
     * Gets deleted_at
     *
     * @return string
     */
    public function getDeletedAt()
    {
        return $this->container['deleted_at'];
    }

    /**
     * Sets deleted_at
     *
     * @param string $deleted_at The time the variation was deleted (YYYY-MM-DD HH:MM:SS).
     *
     * @return $this
     */
    public function setDeletedAt($deleted_at)
    {
        $this->container['deleted_at'] = $deleted_at;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status The status of the variation after the export. Possible entries are INACTIVE, ERROR, SENT and ACTIVE.
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets additional_information
     *
     * @return string
     */
    public function getAdditionalInformation()
    {
        return $this->container['additional_information'];
    }

    /**
     * Sets additional_information
     *
     * @param string $additional_information The field that contains additional information.
     *
     * @return $this
     */
    public function setAdditionalInformation($additional_information)
    {
        $this->container['additional_information'] = $additional_information;

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
