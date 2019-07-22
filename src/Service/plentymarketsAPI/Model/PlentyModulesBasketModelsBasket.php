<?php
/**
 * PlentyModulesBasketModelsBasket
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
 * PlentyModulesBasketModelsBasket Class Doc Comment
 *
 * @category Class
 * @package  BSApp\Service\plentymarketsAPI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PlentyModulesBasketModelsBasket implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'Plenty\Modules\Basket\Models\Basket';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'id' => 'int',
        'session_id' => 'string',
        'order_id' => 'int',
        'customer_id' => 'int',
        'customer_invoice_address_id' => 'int',
        'customer_shipping_address_id' => 'int',
        'currency' => 'string',
        'referrer_id' => 'float',
        'shipping_country_id' => 'int',
        'method_of_payment_id' => 'int',
        'shipping_provider_id' => 'int',
        'shipping_profile_id' => 'int',
        'item_sum' => 'float',
        'item_sum_net' => 'float',
        'basket_amount' => 'float',
        'basket_amount_net' => 'float',
        'shipping_amount' => 'float',
        'shipping_amount_net' => 'float',
        'payment_amount' => 'float',
        'coupon_code' => 'string',
        'coupon_discount' => 'float',
        'shipping_delete_by_coupon' => 'bool',
        'basket_rebate' => 'float',
        'basket_rebate_type' => 'int',
        'max_fsk' => 'int',
        'order_timestamp' => 'int',
        'created_at' => 'string',
        'updated_at' => 'string'];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'id' => null,
        'session_id' => null,
        'order_id' => null,
        'customer_id' => null,
        'customer_invoice_address_id' => null,
        'customer_shipping_address_id' => null,
        'currency' => null,
        'referrer_id' => null,
        'shipping_country_id' => null,
        'method_of_payment_id' => null,
        'shipping_provider_id' => null,
        'shipping_profile_id' => null,
        'item_sum' => null,
        'item_sum_net' => null,
        'basket_amount' => null,
        'basket_amount_net' => null,
        'shipping_amount' => null,
        'shipping_amount_net' => null,
        'payment_amount' => null,
        'coupon_code' => null,
        'coupon_discount' => null,
        'shipping_delete_by_coupon' => null,
        'basket_rebate' => null,
        'basket_rebate_type' => null,
        'max_fsk' => null,
        'order_timestamp' => null,
        'created_at' => null,
        'updated_at' => null];

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
        'session_id' => 'sessionId',
        'order_id' => 'orderId',
        'customer_id' => 'customerId',
        'customer_invoice_address_id' => 'customerInvoiceAddressId',
        'customer_shipping_address_id' => 'customerShippingAddressId',
        'currency' => 'currency',
        'referrer_id' => 'referrerId',
        'shipping_country_id' => 'shippingCountryId',
        'method_of_payment_id' => 'methodOfPaymentId',
        'shipping_provider_id' => 'shippingProviderId',
        'shipping_profile_id' => 'shippingProfileId',
        'item_sum' => 'itemSum',
        'item_sum_net' => 'itemSumNet',
        'basket_amount' => 'basketAmount',
        'basket_amount_net' => 'basketAmountNet',
        'shipping_amount' => 'shippingAmount',
        'shipping_amount_net' => 'shippingAmountNet',
        'payment_amount' => 'paymentAmount',
        'coupon_code' => 'couponCode',
        'coupon_discount' => 'couponDiscount',
        'shipping_delete_by_coupon' => 'shippingDeleteByCoupon',
        'basket_rebate' => 'basketRebate',
        'basket_rebate_type' => 'basketRebateType',
        'max_fsk' => 'maxFsk',
        'order_timestamp' => 'orderTimestamp',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt'];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'session_id' => 'setSessionId',
        'order_id' => 'setOrderId',
        'customer_id' => 'setCustomerId',
        'customer_invoice_address_id' => 'setCustomerInvoiceAddressId',
        'customer_shipping_address_id' => 'setCustomerShippingAddressId',
        'currency' => 'setCurrency',
        'referrer_id' => 'setReferrerId',
        'shipping_country_id' => 'setShippingCountryId',
        'method_of_payment_id' => 'setMethodOfPaymentId',
        'shipping_provider_id' => 'setShippingProviderId',
        'shipping_profile_id' => 'setShippingProfileId',
        'item_sum' => 'setItemSum',
        'item_sum_net' => 'setItemSumNet',
        'basket_amount' => 'setBasketAmount',
        'basket_amount_net' => 'setBasketAmountNet',
        'shipping_amount' => 'setShippingAmount',
        'shipping_amount_net' => 'setShippingAmountNet',
        'payment_amount' => 'setPaymentAmount',
        'coupon_code' => 'setCouponCode',
        'coupon_discount' => 'setCouponDiscount',
        'shipping_delete_by_coupon' => 'setShippingDeleteByCoupon',
        'basket_rebate' => 'setBasketRebate',
        'basket_rebate_type' => 'setBasketRebateType',
        'max_fsk' => 'setMaxFsk',
        'order_timestamp' => 'setOrderTimestamp',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt'];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'session_id' => 'getSessionId',
        'order_id' => 'getOrderId',
        'customer_id' => 'getCustomerId',
        'customer_invoice_address_id' => 'getCustomerInvoiceAddressId',
        'customer_shipping_address_id' => 'getCustomerShippingAddressId',
        'currency' => 'getCurrency',
        'referrer_id' => 'getReferrerId',
        'shipping_country_id' => 'getShippingCountryId',
        'method_of_payment_id' => 'getMethodOfPaymentId',
        'shipping_provider_id' => 'getShippingProviderId',
        'shipping_profile_id' => 'getShippingProfileId',
        'item_sum' => 'getItemSum',
        'item_sum_net' => 'getItemSumNet',
        'basket_amount' => 'getBasketAmount',
        'basket_amount_net' => 'getBasketAmountNet',
        'shipping_amount' => 'getShippingAmount',
        'shipping_amount_net' => 'getShippingAmountNet',
        'payment_amount' => 'getPaymentAmount',
        'coupon_code' => 'getCouponCode',
        'coupon_discount' => 'getCouponDiscount',
        'shipping_delete_by_coupon' => 'getShippingDeleteByCoupon',
        'basket_rebate' => 'getBasketRebate',
        'basket_rebate_type' => 'getBasketRebateType',
        'max_fsk' => 'getMaxFsk',
        'order_timestamp' => 'getOrderTimestamp',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt'];

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
        $this->container['session_id'] = isset($data['session_id']) ? $data['session_id'] : null;
        $this->container['order_id'] = isset($data['order_id']) ? $data['order_id'] : null;
        $this->container['customer_id'] = isset($data['customer_id']) ? $data['customer_id'] : null;
        $this->container['customer_invoice_address_id'] = isset($data['customer_invoice_address_id']) ? $data['customer_invoice_address_id'] : null;
        $this->container['customer_shipping_address_id'] = isset($data['customer_shipping_address_id']) ? $data['customer_shipping_address_id'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['referrer_id'] = isset($data['referrer_id']) ? $data['referrer_id'] : null;
        $this->container['shipping_country_id'] = isset($data['shipping_country_id']) ? $data['shipping_country_id'] : null;
        $this->container['method_of_payment_id'] = isset($data['method_of_payment_id']) ? $data['method_of_payment_id'] : null;
        $this->container['shipping_provider_id'] = isset($data['shipping_provider_id']) ? $data['shipping_provider_id'] : null;
        $this->container['shipping_profile_id'] = isset($data['shipping_profile_id']) ? $data['shipping_profile_id'] : null;
        $this->container['item_sum'] = isset($data['item_sum']) ? $data['item_sum'] : null;
        $this->container['item_sum_net'] = isset($data['item_sum_net']) ? $data['item_sum_net'] : null;
        $this->container['basket_amount'] = isset($data['basket_amount']) ? $data['basket_amount'] : null;
        $this->container['basket_amount_net'] = isset($data['basket_amount_net']) ? $data['basket_amount_net'] : null;
        $this->container['shipping_amount'] = isset($data['shipping_amount']) ? $data['shipping_amount'] : null;
        $this->container['shipping_amount_net'] = isset($data['shipping_amount_net']) ? $data['shipping_amount_net'] : null;
        $this->container['payment_amount'] = isset($data['payment_amount']) ? $data['payment_amount'] : null;
        $this->container['coupon_code'] = isset($data['coupon_code']) ? $data['coupon_code'] : null;
        $this->container['coupon_discount'] = isset($data['coupon_discount']) ? $data['coupon_discount'] : null;
        $this->container['shipping_delete_by_coupon'] = isset($data['shipping_delete_by_coupon']) ? $data['shipping_delete_by_coupon'] : null;
        $this->container['basket_rebate'] = isset($data['basket_rebate']) ? $data['basket_rebate'] : null;
        $this->container['basket_rebate_type'] = isset($data['basket_rebate_type']) ? $data['basket_rebate_type'] : null;
        $this->container['max_fsk'] = isset($data['max_fsk']) ? $data['max_fsk'] : null;
        $this->container['order_timestamp'] = isset($data['order_timestamp']) ? $data['order_timestamp'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
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
     * @param int $id The ID of the shopping cart. The ID increases by 1 when a new customer enters the online store and adds an item to the shopping cart.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets session_id
     *
     * @return string
     */
    public function getSessionId()
    {
        return $this->container['session_id'];
    }

    /**
     * Sets session_id
     *
     * @param string $session_id The ID of the current customer session
     *
     * @return $this
     */
    public function setSessionId($session_id)
    {
        $this->container['session_id'] = $session_id;

        return $this;
    }

    /**
     * Gets order_id
     *
     * @return int
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param int $order_id The ID of the order
     *
     * @return $this
     */
    public function setOrderId($order_id)
    {
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets customer_id
     *
     * @return int
     */
    public function getCustomerId()
    {
        return $this->container['customer_id'];
    }

    /**
     * Sets customer_id
     *
     * @param int $customer_id The ID of the customer
     *
     * @return $this
     */
    public function setCustomerId($customer_id)
    {
        $this->container['customer_id'] = $customer_id;

        return $this;
    }

    /**
     * Gets customer_invoice_address_id
     *
     * @return int
     */
    public function getCustomerInvoiceAddressId()
    {
        return $this->container['customer_invoice_address_id'];
    }

    /**
     * Sets customer_invoice_address_id
     *
     * @param int $customer_invoice_address_id The ID of the customer's invoice address
     *
     * @return $this
     */
    public function setCustomerInvoiceAddressId($customer_invoice_address_id)
    {
        $this->container['customer_invoice_address_id'] = $customer_invoice_address_id;

        return $this;
    }

    /**
     * Gets customer_shipping_address_id
     *
     * @return int
     */
    public function getCustomerShippingAddressId()
    {
        return $this->container['customer_shipping_address_id'];
    }

    /**
     * Sets customer_shipping_address_id
     *
     * @param int $customer_shipping_address_id The ID of the customer's shipping address
     *
     * @return $this
     */
    public function setCustomerShippingAddressId($customer_shipping_address_id)
    {
        $this->container['customer_shipping_address_id'] = $customer_shipping_address_id;

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
     * @param string $currency The currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets referrer_id
     *
     * @return float
     */
    public function getReferrerId()
    {
        return $this->container['referrer_id'];
    }

    /**
     * Sets referrer_id
     *
     * @param float $referrer_id The ID of the order referrer
     *
     * @return $this
     */
    public function setReferrerId($referrer_id)
    {
        $this->container['referrer_id'] = $referrer_id;

        return $this;
    }

    /**
     * Gets shipping_country_id
     *
     * @return int
     */
    public function getShippingCountryId()
    {
        return $this->container['shipping_country_id'];
    }

    /**
     * Sets shipping_country_id
     *
     * @param int $shipping_country_id The ID of the shipping country
     *
     * @return $this
     */
    public function setShippingCountryId($shipping_country_id)
    {
        $this->container['shipping_country_id'] = $shipping_country_id;

        return $this;
    }

    /**
     * Gets method_of_payment_id
     *
     * @return int
     */
    public function getMethodOfPaymentId()
    {
        return $this->container['method_of_payment_id'];
    }

    /**
     * Sets method_of_payment_id
     *
     * @param int $method_of_payment_id The ID of the payment method
     *
     * @return $this
     */
    public function setMethodOfPaymentId($method_of_payment_id)
    {
        $this->container['method_of_payment_id'] = $method_of_payment_id;

        return $this;
    }

    /**
     * Gets shipping_provider_id
     *
     * @return int
     */
    public function getShippingProviderId()
    {
        return $this->container['shipping_provider_id'];
    }

    /**
     * Sets shipping_provider_id
     *
     * @param int $shipping_provider_id The ID of the shipping provider
     *
     * @return $this
     */
    public function setShippingProviderId($shipping_provider_id)
    {
        $this->container['shipping_provider_id'] = $shipping_provider_id;

        return $this;
    }

    /**
     * Gets shipping_profile_id
     *
     * @return int
     */
    public function getShippingProfileId()
    {
        return $this->container['shipping_profile_id'];
    }

    /**
     * Sets shipping_profile_id
     *
     * @param int $shipping_profile_id The ID of the shipping profile
     *
     * @return $this
     */
    public function setShippingProfileId($shipping_profile_id)
    {
        $this->container['shipping_profile_id'] = $shipping_profile_id;

        return $this;
    }

    /**
     * Gets item_sum
     *
     * @return float
     */
    public function getItemSum()
    {
        return $this->container['item_sum'];
    }

    /**
     * Sets item_sum
     *
     * @param float $item_sum The gross value of items in the shopping cart
     *
     * @return $this
     */
    public function setItemSum($item_sum)
    {
        $this->container['item_sum'] = $item_sum;

        return $this;
    }

    /**
     * Gets item_sum_net
     *
     * @return float
     */
    public function getItemSumNet()
    {
        return $this->container['item_sum_net'];
    }

    /**
     * Sets item_sum_net
     *
     * @param float $item_sum_net The net value of items in the shopping cart
     *
     * @return $this
     */
    public function setItemSumNet($item_sum_net)
    {
        $this->container['item_sum_net'] = $item_sum_net;

        return $this;
    }

    /**
     * Gets basket_amount
     *
     * @return float
     */
    public function getBasketAmount()
    {
        return $this->container['basket_amount'];
    }

    /**
     * Sets basket_amount
     *
     * @param float $basket_amount The total gross value of the shopping cart
     *
     * @return $this
     */
    public function setBasketAmount($basket_amount)
    {
        $this->container['basket_amount'] = $basket_amount;

        return $this;
    }

    /**
     * Gets basket_amount_net
     *
     * @return float
     */
    public function getBasketAmountNet()
    {
        return $this->container['basket_amount_net'];
    }

    /**
     * Sets basket_amount_net
     *
     * @param float $basket_amount_net The total net value of the shopping cart
     *
     * @return $this
     */
    public function setBasketAmountNet($basket_amount_net)
    {
        $this->container['basket_amount_net'] = $basket_amount_net;

        return $this;
    }

    /**
     * Gets shipping_amount
     *
     * @return float
     */
    public function getShippingAmount()
    {
        return $this->container['shipping_amount'];
    }

    /**
     * Sets shipping_amount
     *
     * @param float $shipping_amount The gross shipping costs
     *
     * @return $this
     */
    public function setShippingAmount($shipping_amount)
    {
        $this->container['shipping_amount'] = $shipping_amount;

        return $this;
    }

    /**
     * Gets shipping_amount_net
     *
     * @return float
     */
    public function getShippingAmountNet()
    {
        return $this->container['shipping_amount_net'];
    }

    /**
     * Sets shipping_amount_net
     *
     * @param float $shipping_amount_net The net shipping costs
     *
     * @return $this
     */
    public function setShippingAmountNet($shipping_amount_net)
    {
        $this->container['shipping_amount_net'] = $shipping_amount_net;

        return $this;
    }

    /**
     * Gets payment_amount
     *
     * @return float
     */
    public function getPaymentAmount()
    {
        return $this->container['payment_amount'];
    }

    /**
     * Sets payment_amount
     *
     * @param float $payment_amount The amount of the payment
     *
     * @return $this
     */
    public function setPaymentAmount($payment_amount)
    {
        $this->container['payment_amount'] = $payment_amount;

        return $this;
    }

    /**
     * Gets coupon_code
     *
     * @return string
     */
    public function getCouponCode()
    {
        return $this->container['coupon_code'];
    }

    /**
     * Sets coupon_code
     *
     * @param string $coupon_code The entered coupon code
     *
     * @return $this
     */
    public function setCouponCode($coupon_code)
    {
        $this->container['coupon_code'] = $coupon_code;

        return $this;
    }

    /**
     * Gets coupon_discount
     *
     * @return float
     */
    public function getCouponDiscount()
    {
        return $this->container['coupon_discount'];
    }

    /**
     * Sets coupon_discount
     *
     * @param float $coupon_discount The received discount due to the coupon code
     *
     * @return $this
     */
    public function setCouponDiscount($coupon_discount)
    {
        $this->container['coupon_discount'] = $coupon_discount;

        return $this;
    }

    /**
     * Gets shipping_delete_by_coupon
     *
     * @return bool
     */
    public function getShippingDeleteByCoupon()
    {
        return $this->container['shipping_delete_by_coupon'];
    }

    /**
     * Sets shipping_delete_by_coupon
     *
     * @param bool $shipping_delete_by_coupon Shows whether the shipping costs are subtracted due to a coupon code. Shopping carts that are free of shipping costs have the value true.
     *
     * @return $this
     */
    public function setShippingDeleteByCoupon($shipping_delete_by_coupon)
    {
        $this->container['shipping_delete_by_coupon'] = $shipping_delete_by_coupon;

        return $this;
    }

    /**
     * Gets basket_rebate
     *
     * @return float
     */
    public function getBasketRebate()
    {
        return $this->container['basket_rebate'];
    }

    /**
     * Sets basket_rebate
     *
     * @param float $basket_rebate The discount to the shopping cart value. The discount can either be set as a discount scale for items, as a customer class discount or as a discount based on the payment method.
     *
     * @return $this
     */
    public function setBasketRebate($basket_rebate)
    {
        $this->container['basket_rebate'] = $basket_rebate;

        return $this;
    }

    /**
     * Gets basket_rebate_type
     *
     * @return int
     */
    public function getBasketRebateType()
    {
        return $this->container['basket_rebate_type'];
    }

    /**
     * Sets basket_rebate_type
     *
     * @param int $basket_rebate_type The discount type. The following types are available: <ul>     <li>Discount scale based on net value of items = 4</li>     <li>    Discount based on method of payment = 5</li> </ul>
     *
     * @return $this
     */
    public function setBasketRebateType($basket_rebate_type)
    {
        $this->container['basket_rebate_type'] = $basket_rebate_type;

        return $this;
    }

    /**
     * Gets max_fsk
     *
     * @return int
     */
    public function getMaxFsk()
    {
        return $this->container['max_fsk'];
    }

    /**
     * Sets max_fsk
     *
     * @param int $max_fsk The age rating
     *
     * @return $this
     */
    public function setMaxFsk($max_fsk)
    {
        $this->container['max_fsk'] = $max_fsk;

        return $this;
    }

    /**
     * Gets order_timestamp
     *
     * @return int
     */
    public function getOrderTimestamp()
    {
        return $this->container['order_timestamp'];
    }

    /**
     * Sets order_timestamp
     *
     * @param int $order_timestamp The timestamp of the order
     *
     * @return $this
     */
    public function setOrderTimestamp($order_timestamp)
    {
        $this->container['order_timestamp'] = $order_timestamp;

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
     * @param string $created_at The date that the shopping cart was created.
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
     * @param string $updated_at The date that the shopping cart was updated last.
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

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
