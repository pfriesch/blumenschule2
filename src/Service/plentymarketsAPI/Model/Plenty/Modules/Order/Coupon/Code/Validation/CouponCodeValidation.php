<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Order\Coupon\Code\Validation;

class CouponCodeValidation
{
    /**
     *  The ID of the campaign
     * @var integer
     */
    public $campaignId;

    /**
     *  The type of the campaign. Currently the only type availabel is plentymarkets.
     * @var string
     */
    public $validationType;

    /**
     *  The ID of the contact that wants to redeem the coupon
     * @var integer
     */
    public $contactId;

    /**
     *  The coupon code
     * @var string
     */
    public $couponCode;

    /**
     *  The currency of the purchase
     * @var string
     */
    public $currency;

    /**
     *  The order referrer
     * @var float
     */
    public $referrer;

    /**
     *  The total discount from a coupon applied to an order. The discount is given as gross amount.
     * @var float
     */
    public $salesDiscount;

    /**
     *  The net discount from a coupon applied to an order. The net discount is the total discount minus the vat amount.
     * @var float
     */
    public $salesDiscountNet;

    /**
     *  The discount amount applied to items.
     * @var float
     */
    public $itemDiscount;

    /**
     *  The net discount applied to items.
     * @var float
     */
    public $itemDiscountNet;

    /**
     *  The discount applied to shipping costs.
     * @var float
     */
    public $shippingDiscount;

    /**
     *  The net discount applied to shipping costs.
     * @var float
     */
    public $shippingDiscountNet;

    /**
     *  The vat fields used for the validation
     * @var array
     */
    public $usedVatFields;

    /**
     *  The remaining coupon amount
     * @var float
     */
    public $restCouponAmount;

    /**
     *  The list of variations that passed the validation
     * @var array
     */
    public $checkedItems;

    /**
     *  Validation parameters
     * @var array
     */
    public $validateParams;

    /**
     *  The campaign type
     * @var string
     */
    public $couponCampaignType;

}
