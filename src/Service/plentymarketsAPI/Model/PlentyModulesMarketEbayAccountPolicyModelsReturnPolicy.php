<?php
/**
 * PlentyModulesMarketEbayAccountPolicyModelsReturnPolicy
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
 * PlentyModulesMarketEbayAccountPolicyModelsReturnPolicy Class Doc Comment
 *
 * @category Class
 * @package  BSApp\Service\plentymarketsAPI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PlentyModulesMarketEbayAccountPolicyModelsReturnPolicy implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'Plenty\Modules\Market\Ebay\AccountPolicy\Models\ReturnPolicy';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'return_policy_id' => 'string',
        'description' => 'string',
        'extended_holiday_returns_offered' => 'bool',
        'marketplace_id' => 'string',
        'name' => 'string',
        'refund_method' => 'string',
        'restocking_fee_percentage' => 'string',
        'return_instruction' => 'string',
        'return_method' => 'string',
        'returns_accepted' => 'bool',
        'return_shipping_cost_payer' => 'string'];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'return_policy_id' => null,
        'description' => null,
        'extended_holiday_returns_offered' => null,
        'marketplace_id' => null,
        'name' => null,
        'refund_method' => null,
        'restocking_fee_percentage' => null,
        'return_instruction' => null,
        'return_method' => null,
        'returns_accepted' => null,
        'return_shipping_cost_payer' => null];

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
        'return_policy_id' => 'returnPolicyId',
        'description' => 'description',
        'extended_holiday_returns_offered' => 'extendedHolidayReturnsOffered',
        'marketplace_id' => 'marketplaceId',
        'name' => 'name',
        'refund_method' => 'refundMethod',
        'restocking_fee_percentage' => 'restockingFeePercentage',
        'return_instruction' => 'returnInstruction',
        'return_method' => 'returnMethod',
        'returns_accepted' => 'returnsAccepted',
        'return_shipping_cost_payer' => 'returnShippingCostPayer'];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'return_policy_id' => 'setReturnPolicyId',
        'description' => 'setDescription',
        'extended_holiday_returns_offered' => 'setExtendedHolidayReturnsOffered',
        'marketplace_id' => 'setMarketplaceId',
        'name' => 'setName',
        'refund_method' => 'setRefundMethod',
        'restocking_fee_percentage' => 'setRestockingFeePercentage',
        'return_instruction' => 'setReturnInstruction',
        'return_method' => 'setReturnMethod',
        'returns_accepted' => 'setReturnsAccepted',
        'return_shipping_cost_payer' => 'setReturnShippingCostPayer'];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'return_policy_id' => 'getReturnPolicyId',
        'description' => 'getDescription',
        'extended_holiday_returns_offered' => 'getExtendedHolidayReturnsOffered',
        'marketplace_id' => 'getMarketplaceId',
        'name' => 'getName',
        'refund_method' => 'getRefundMethod',
        'restocking_fee_percentage' => 'getRestockingFeePercentage',
        'return_instruction' => 'getReturnInstruction',
        'return_method' => 'getReturnMethod',
        'returns_accepted' => 'getReturnsAccepted',
        'return_shipping_cost_payer' => 'getReturnShippingCostPayer'];

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
        $this->container['return_policy_id'] = isset($data['return_policy_id']) ? $data['return_policy_id'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['extended_holiday_returns_offered'] = isset($data['extended_holiday_returns_offered']) ? $data['extended_holiday_returns_offered'] : null;
        $this->container['marketplace_id'] = isset($data['marketplace_id']) ? $data['marketplace_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['refund_method'] = isset($data['refund_method']) ? $data['refund_method'] : null;
        $this->container['restocking_fee_percentage'] = isset($data['restocking_fee_percentage']) ? $data['restocking_fee_percentage'] : null;
        $this->container['return_instruction'] = isset($data['return_instruction']) ? $data['return_instruction'] : null;
        $this->container['return_method'] = isset($data['return_method']) ? $data['return_method'] : null;
        $this->container['returns_accepted'] = isset($data['returns_accepted']) ? $data['returns_accepted'] : null;
        $this->container['return_shipping_cost_payer'] = isset($data['return_shipping_cost_payer']) ? $data['return_shipping_cost_payer'] : null;
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
     * Gets return_policy_id
     *
     * @return string
     */
    public function getReturnPolicyId()
    {
        return $this->container['return_policy_id'];
    }

    /**
     * Sets return_policy_id
     *
     * @param string $return_policy_id The ID of the return policy.
     *
     * @return $this
     */
    public function setReturnPolicyId($return_policy_id)
    {
        $this->container['return_policy_id'] = $return_policy_id;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description An optional seller-defined description of the return policy.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets extended_holiday_returns_offered
     *
     * @return bool
     */
    public function getExtendedHolidayReturnsOffered()
    {
        return $this->container['extended_holiday_returns_offered'];
    }

    /**
     * Sets extended_holiday_returns_offered
     *
     * @param bool $extended_holiday_returns_offered If this value is set to true, it indicates the seller offers an Extended Holiday Returns policy for their listings.
     *
     * @return $this
     */
    public function setExtendedHolidayReturnsOffered($extended_holiday_returns_offered)
    {
        $this->container['extended_holiday_returns_offered'] = $extended_holiday_returns_offered;

        return $this;
    }

    /**
     * Gets marketplace_id
     *
     * @return string
     */
    public function getMarketplaceId()
    {
        return $this->container['marketplace_id'];
    }

    /**
     * Sets marketplace_id
     *
     * @param string $marketplace_id The ID of the eBay marketplace to which this return policy applies. If this value is not specified, value defaults to the seller's eBay registration site.
     *
     * @return $this
     */
    public function setMarketplaceId($marketplace_id)
    {
        $this->container['marketplace_id'] = $marketplace_id;

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
     * @param string $name A user-defined name for this fulfillment policy. Names must be unique for policies assigned to the same marketplace.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets refund_method
     *
     * @return string
     */
    public function getRefundMethod()
    {
        return $this->container['refund_method'];
    }

    /**
     * Sets refund_method
     *
     * @param string $refund_method Indicates the method the seller uses to compensate the buyer for returned items. The return method specified applies only to remorse returns. Available options: `MERCHANDISE_CREDIT`, `MONEY_BACK`.
     *
     * @return $this
     */
    public function setRefundMethod($refund_method)
    {
        $this->container['refund_method'] = $refund_method;

        return $this;
    }

    /**
     * Gets restocking_fee_percentage
     *
     * @return string
     */
    public function getRestockingFeePercentage()
    {
        return $this->container['restocking_fee_percentage'];
    }

    /**
     * Sets restocking_fee_percentage
     *
     * @param string $restocking_fee_percentage Sellers who accept returns should include this field if they charge buyers a restocking fee when items are returned.
     *
     * @return $this
     */
    public function setRestockingFeePercentage($restocking_fee_percentage)
    {
        $this->container['restocking_fee_percentage'] = $restocking_fee_percentage;

        return $this;
    }

    /**
     * Gets return_instruction
     *
     * @return string
     */
    public function getReturnInstruction()
    {
        return $this->container['return_instruction'];
    }

    /**
     * Sets return_instruction
     *
     * @param string $return_instruction This optional free-form string field lets the seller provide a detailed explanation of the return policy.
     *
     * @return $this
     */
    public function setReturnInstruction($return_instruction)
    {
        $this->container['return_instruction'] = $return_instruction;

        return $this;
    }

    /**
     * Gets return_method
     *
     * @return string
     */
    public function getReturnMethod()
    {
        return $this->container['return_method'];
    }

    /**
     * Sets return_method
     *
     * @param string $return_method This field indicates the method in which the seller handles non-money back return requests for remorse returns. Sellers can specify they either exchange or replace items. Available options: `EXCHANGE`, `REPLACEMENT`.
     *
     * @return $this
     */
    public function setReturnMethod($return_method)
    {
        $this->container['return_method'] = $return_method;

        return $this;
    }

    /**
     * Gets returns_accepted
     *
     * @return bool
     */
    public function getReturnsAccepted()
    {
        return $this->container['returns_accepted'];
    }

    /**
     * Sets returns_accepted
     *
     * @param bool $returns_accepted Set this value to true to indicate the seller accepts returns.
     *
     * @return $this
     */
    public function setReturnsAccepted($returns_accepted)
    {
        $this->container['returns_accepted'] = $returns_accepted;

        return $this;
    }

    /**
     * Gets return_shipping_cost_payer
     *
     * @return string
     */
    public function getReturnShippingCostPayer()
    {
        return $this->container['return_shipping_cost_payer'];
    }

    /**
     * Sets return_shipping_cost_payer
     *
     * @param string $return_shipping_cost_payer The seller uses this value to specify whether the buyer or the seller is responsible for paying return shipping charges. The field can be set to either `BUYER` or `SELLER`.
     *
     * @return $this
     */
    public function setReturnShippingCostPayer($return_shipping_cost_payer)
    {
        $this->container['return_shipping_cost_payer'] = $return_shipping_cost_payer;

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
