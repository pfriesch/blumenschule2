<?php
/**
 * PlentyModulesPaymentModelsPayment
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
 * PlentyModulesPaymentModelsPayment Class Doc Comment
 *
 * @category Class
 * @package  BSApp\Service\plentymarketsAPI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PlentyModulesPaymentModelsPayment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'Plenty\Modules\Payment\Models\Payment';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'id' => 'int',
        'amount' => 'BigDecimal',
        'exchange_ratio' => 'BigDecimal',
        'parent_id' => 'int',
        'deleted' => 'int',
        'unaccountable' => 'int',
        'currency' => 'string',
        'type' => 'string',
        'hash' => 'string',
        'origin' => 'int',
        'received_at' => 'string',
        'imported_at' => 'string',
        'status' => 'int',
        'transaction_type' => 'int',
        'mop_id' => 'int',
        'regenerate_hash' => 'bool',
        'update_order_payment_status' => 'bool',
        'is_system_currency' => 'bool'];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'id' => null,
        'amount' => null,
        'exchange_ratio' => null,
        'parent_id' => null,
        'deleted' => null,
        'unaccountable' => null,
        'currency' => null,
        'type' => null,
        'hash' => null,
        'origin' => null,
        'received_at' => null,
        'imported_at' => null,
        'status' => null,
        'transaction_type' => null,
        'mop_id' => null,
        'regenerate_hash' => null,
        'update_order_payment_status' => null,
        'is_system_currency' => null];

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
        'amount' => 'amount',
        'exchange_ratio' => 'exchangeRatio',
        'parent_id' => 'parentId',
        'deleted' => 'deleted',
        'unaccountable' => 'unaccountable',
        'currency' => 'currency',
        'type' => 'type',
        'hash' => 'hash',
        'origin' => 'origin',
        'received_at' => 'receivedAt',
        'imported_at' => 'importedAt',
        'status' => 'status',
        'transaction_type' => 'transactionType',
        'mop_id' => 'mopId',
        'regenerate_hash' => 'regenerateHash',
        'update_order_payment_status' => 'updateOrderPaymentStatus',
        'is_system_currency' => 'isSystemCurrency'];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'amount' => 'setAmount',
        'exchange_ratio' => 'setExchangeRatio',
        'parent_id' => 'setParentId',
        'deleted' => 'setDeleted',
        'unaccountable' => 'setUnaccountable',
        'currency' => 'setCurrency',
        'type' => 'setType',
        'hash' => 'setHash',
        'origin' => 'setOrigin',
        'received_at' => 'setReceivedAt',
        'imported_at' => 'setImportedAt',
        'status' => 'setStatus',
        'transaction_type' => 'setTransactionType',
        'mop_id' => 'setMopId',
        'regenerate_hash' => 'setRegenerateHash',
        'update_order_payment_status' => 'setUpdateOrderPaymentStatus',
        'is_system_currency' => 'setIsSystemCurrency'];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'amount' => 'getAmount',
        'exchange_ratio' => 'getExchangeRatio',
        'parent_id' => 'getParentId',
        'deleted' => 'getDeleted',
        'unaccountable' => 'getUnaccountable',
        'currency' => 'getCurrency',
        'type' => 'getType',
        'hash' => 'getHash',
        'origin' => 'getOrigin',
        'received_at' => 'getReceivedAt',
        'imported_at' => 'getImportedAt',
        'status' => 'getStatus',
        'transaction_type' => 'getTransactionType',
        'mop_id' => 'getMopId',
        'regenerate_hash' => 'getRegenerateHash',
        'update_order_payment_status' => 'getUpdateOrderPaymentStatus',
        'is_system_currency' => 'getIsSystemCurrency'];

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
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['exchange_ratio'] = isset($data['exchange_ratio']) ? $data['exchange_ratio'] : null;
        $this->container['parent_id'] = isset($data['parent_id']) ? $data['parent_id'] : null;
        $this->container['deleted'] = isset($data['deleted']) ? $data['deleted'] : null;
        $this->container['unaccountable'] = isset($data['unaccountable']) ? $data['unaccountable'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['hash'] = isset($data['hash']) ? $data['hash'] : null;
        $this->container['origin'] = isset($data['origin']) ? $data['origin'] : null;
        $this->container['received_at'] = isset($data['received_at']) ? $data['received_at'] : null;
        $this->container['imported_at'] = isset($data['imported_at']) ? $data['imported_at'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['transaction_type'] = isset($data['transaction_type']) ? $data['transaction_type'] : null;
        $this->container['mop_id'] = isset($data['mop_id']) ? $data['mop_id'] : null;
        $this->container['regenerate_hash'] = isset($data['regenerate_hash']) ? $data['regenerate_hash'] : null;
        $this->container['update_order_payment_status'] = isset($data['update_order_payment_status']) ? $data['update_order_payment_status'] : null;
        $this->container['is_system_currency'] = isset($data['is_system_currency']) ? $data['is_system_currency'] : null;
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
     * @param int $id The ID of the payment
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return BigDecimal
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param BigDecimal $amount The amount of the payment
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets exchange_ratio
     *
     * @return BigDecimal
     */
    public function getExchangeRatio()
    {
        return $this->container['exchange_ratio'];
    }

    /**
     * Sets exchange_ratio
     *
     * @param BigDecimal $exchange_ratio The exchange rate. Exchange rates are used if the default currency saved in plentymarkets differs from the currency of the order.
     *
     * @return $this
     */
    public function setExchangeRatio($exchange_ratio)
    {
        $this->container['exchange_ratio'] = $exchange_ratio;

        return $this;
    }

    /**
     * Gets parent_id
     *
     * @return int
     */
    public function getParentId()
    {
        return $this->container['parent_id'];
    }

    /**
     * Sets parent_id
     *
     * @param int $parent_id The ID of the parent payment
     *
     * @return $this
     */
    public function setParentId($parent_id)
    {
        $this->container['parent_id'] = $parent_id;

        return $this;
    }

    /**
     * Gets deleted
     *
     * @return int
     */
    public function getDeleted()
    {
        return $this->container['deleted'];
    }

    /**
     * Sets deleted
     *
     * @param int $deleted A deleted payment. Deleted payments have the value 1 and are not displayed in the plentymarkets back end.
     *
     * @return $this
     */
    public function setDeleted($deleted)
    {
        $this->container['deleted'] = $deleted;

        return $this;
    }

    /**
     * Gets unaccountable
     *
     * @return int
     */
    public function getUnaccountable()
    {
        return $this->container['unaccountable'];
    }

    /**
     * Sets unaccountable
     *
     * @param int $unaccountable An unassigned payment. Unassigned payments have the value 1.
     *
     * @return $this
     */
    public function setUnaccountable($unaccountable)
    {
        $this->container['unaccountable'] = $unaccountable;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency The currency of the payment in ISO 4217 code.
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type The payment type. Available types are credit and debit.
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets hash
     *
     * @return string
     */
    public function getHash()
    {
        return $this->container['hash'];
    }

    /**
     * Sets hash
     *
     * @param string $hash The hash code of the payment. The hash code consists of 32 characters and is automatically generated.
     *
     * @return $this
     */
    public function setHash($hash)
    {
        $this->container['hash'] = $hash;

        return $this;
    }

    /**
     * Gets origin
     *
     * @return int
     */
    public function getOrigin()
    {
        return $this->container['origin'];
    }

    /**
     * Sets origin
     *
     * @param int $origin The origin of the payment. The following origins are available: <ul>     <li>Undefined = 0</li>     <li>System = 1</li>     <li>Manually = 2</li>     <li>SOAP = 3</li>     <li>Import = 4</li>     <li>Split payment = 5</li>     <li>Plugin = 6</li>     <li>POS = 7</li> </ul>
     *
     * @return $this
     */
    public function setOrigin($origin)
    {
        $this->container['origin'] = $origin;

        return $this;
    }

    /**
     * Gets received_at
     *
     * @return string
     */
    public function getReceivedAt()
    {
        return $this->container['received_at'];
    }

    /**
     * Sets received_at
     *
     * @param string $received_at The time the payment was received
     *
     * @return $this
     */
    public function setReceivedAt($received_at)
    {
        $this->container['received_at'] = $received_at;

        return $this;
    }

    /**
     * Gets imported_at
     *
     * @return string
     */
    public function getImportedAt()
    {
        return $this->container['imported_at'];
    }

    /**
     * Sets imported_at
     *
     * @param string $imported_at The time the payment was imported
     *
     * @return $this
     */
    public function setImportedAt($imported_at)
    {
        $this->container['imported_at'] = $imported_at;

        return $this;
    }

    /**
     * Gets status
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param int $status The <a href=\"https://developers.plentymarkets.com/rest-doc/introduction#payment-statuses\"  target=\"_blank\">status</a> of the payment
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets transaction_type
     *
     * @return int
     */
    public function getTransactionType()
    {
        return $this->container['transaction_type'];
    }

    /**
     * Sets transaction_type
     *
     * @param int $transaction_type The transaction type of the payment. The following transaction types are available: <ul>     <li>Interim transaction report = 1</li>     <li>Booked payment = 2</li>     <li>Split payment = 3</li> </ul>
     *
     * @return $this
     */
    public function setTransactionType($transaction_type)
    {
        $this->container['transaction_type'] = $transaction_type;

        return $this;
    }

    /**
     * Gets mop_id
     *
     * @return int
     */
    public function getMopId()
    {
        return $this->container['mop_id'];
    }

    /**
     * Sets mop_id
     *
     * @param int $mop_id The ID of the payment method
     *
     * @return $this
     */
    public function setMopId($mop_id)
    {
        $this->container['mop_id'] = $mop_id;

        return $this;
    }

    /**
     * Gets regenerate_hash
     *
     * @return bool
     */
    public function getRegenerateHash()
    {
        return $this->container['regenerate_hash'];
    }

    /**
     * Sets regenerate_hash
     *
     * @param bool $regenerate_hash If $regenerateHash is true, regenerate the payment hash value. Default is false.
     *
     * @return $this
     */
    public function setRegenerateHash($regenerate_hash)
    {
        $this->container['regenerate_hash'] = $regenerate_hash;

        return $this;
    }

    /**
     * Gets update_order_payment_status
     *
     * @return bool
     */
    public function getUpdateOrderPaymentStatus()
    {
        return $this->container['update_order_payment_status'];
    }

    /**
     * Sets update_order_payment_status
     *
     * @param bool $update_order_payment_status If $updateOrderPaymentStatus is true, update the order payment status. Default is false.
     *
     * @return $this
     */
    public function setUpdateOrderPaymentStatus($update_order_payment_status)
    {
        $this->container['update_order_payment_status'] = $update_order_payment_status;

        return $this;
    }

    /**
     * Gets is_system_currency
     *
     * @return bool
     */
    public function getIsSystemCurrency()
    {
        return $this->container['is_system_currency'];
    }

    /**
     * Sets is_system_currency
     *
     * @param bool $is_system_currency If $isSystemCurrency is false, the value will be converted to the standard currency with the provided exchange rate. If $isSystemCurrency is false, the value is not converted. Default is true.
     *
     * @return $this
     */
    public function setIsSystemCurrency($is_system_currency)
    {
        $this->container['is_system_currency'] = $is_system_currency;

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
