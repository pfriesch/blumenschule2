<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Basket;

class Basket
{
    /**
     *  The ID of the shopping cart. The ID increases by 1 when a new customer enters the online store and adds an item to the shopping cart.
     * @var integer
     */
    public $id;

    /**
     *  The ID of the current customer session
     * @var string
     */
    public $sessionId;

    /**
     *  The ID of the order
     * @var integer
     */
    public $orderId;

    /**
     *  The ID of the customer
     * @var integer
     */
    public $customerId;

    /**
     *  The ID of the customer's invoice address
     * @var integer
     */
    public $customerInvoiceAddressId;

    /**
     *  The ID of the customer's shipping address
     * @var integer
     */
    public $customerShippingAddressId;

    /**
     *  The currency
     * @var string
     */
    public $currency;

    /**
     *  The ID of the order referrer
     * @var float
     */
    public $referrerId;

    /**
     *  The ID of the shipping country
     * @var integer
     */
    public $shippingCountryId;

    /**
     *  The ID of the payment method
     * @var integer
     */
    public $methodOfPaymentId;

    /**
     *  The ID of the shipping provider
     * @var integer
     */
    public $shippingProviderId;

    /**
     *  The ID of the shipping profile
     * @var integer
     */
    public $shippingProfileId;

    /**
     *  The gross value of items in the shopping cart
     * @var float
     */
    public $itemSum;

    /**
     *  The net value of items in the shopping cart
     * @var float
     */
    public $itemSumNet;

    /**
     *  The total gross value of the shopping cart
     * @var float
     */
    public $basketAmount;

    /**
     *  The total net value of the shopping cart
     * @var float
     */
    public $basketAmountNet;

    /**
     *  The gross shipping costs
     * @var float
     */
    public $shippingAmount;

    /**
     *  The net shipping costs
     * @var float
     */
    public $shippingAmountNet;

    /**
     *  The amount of the payment
     * @var float
     */
    public $paymentAmount;

    /**
     *  The entered coupon code
     * @var string
     */
    public $couponCode;

    /**
     *  The received discount due to the coupon code
     * @var float
     */
    public $couponDiscount;

    /**
     *  Shows whether the shipping costs are subtracted due to a coupon code. Shopping carts that are free of shipping costs have the value true.
     * @var boolean
     */
    public $shippingDeleteByCoupon;

    /**
     *  The discount to the shopping cart value. The discount can either be set as a discount scale for items, as a customer class discount or as a discount based on the payment method.
     * @var float
     */
    public $basketRebate;

    /**
     *  The discount type. The following types are availabel:
     *
     *     Discount scale based on net value of items = 4
     *         Discount based on method of payment = 5
     *
     * @var integer
     */
    public $basketRebateType;

    /**
     *  The age rating
     * @var integer
     */
    public $maxFsk;

    /**
     *  The timestamp of the order
     * @var integer
     */
    public $orderTimestamp;

    /**
     *  The date that the shopping cart was created.
     * @var string
     */
    public $createdAt;

    /**
     *  The date that the shopping cart was updated last.
     * @var string
     */
    public $updatedAt;

}
