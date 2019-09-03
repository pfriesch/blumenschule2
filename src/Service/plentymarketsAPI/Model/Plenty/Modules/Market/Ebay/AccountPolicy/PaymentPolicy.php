<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Market\Ebay\AccountPolicy;

class PaymentPolicy
{
    /**
     *  The ID of the payment policy.
     * @var string
     */
    public $paymentPolicyId;

    /**
     *  An optional seller-defined description of the payment policy. (Max length: 250)
     * @var string
     */
    public $description;

    /**
     *  Indicate if the payment is due upon receipt or not. (eBay generates a receipt when the buyer agrees to purchase an item)
     * @var boolean
     */
    public $immediatePay;

    /**
     *  The ID of the eBay marketplace to which this return policy applies. If this value is not specified, value defaults to the seller's eBay registration site.
     * @var string
     */
    public $marketplaceId;

    /**
     *  A user-defined name for this payment policy. Names must be unique for policies assigned to the same marketplace. (Max length: 64)
     * @var string
     */
    public $name;

    /**
     *  Allows the seller to give payment instructions to the buyer. These instructions appear on the eBay View Item and Checkout pages.
     * @var string
     */
    public $paymentInstructions;

}
