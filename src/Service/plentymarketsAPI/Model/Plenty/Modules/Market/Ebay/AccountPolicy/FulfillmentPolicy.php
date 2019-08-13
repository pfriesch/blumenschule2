<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Market\Ebay\AccountPolicy;

class FulfillmentPolicy
{
    /**
     *  The ID of the fulfillment policy.
     * @var string
     */
    public $fulfillmentPolicyId;

    /**
     *  An optional seller-defined description of the fulfillment policy.
     * @var string
     */
    public $description;

    /**
     *  Set this value to true to indicate the seller offers freight shipping.
     * @var boolean
     */
    public $freightShipping;

    /**
     *  If this value is set to true, it indicates the seller has opted-in to the eBay Global Shipping Program and that they use that service for thier internation shipments.
     * @var boolean
     */
    public $globalShipping;

    /**
     *  If this value is set to true, it indicates the seller offers local pickup of their items.
     * @var boolean
     */
    public $localPickup;

    /**
     *  The ID of the eBay marketplace to which this fulfillment policy applies. If this value is not specified, value defaults to the seller's eBay registration site.
     * @var string
     */
    public $marketplaceId;

    /**
     *  A user-defined name for this fulfillment policy. Names must be unique for policies assigned to the same marketplace.
     * @var string
     */
    public $name;

    /**
     *  If this value is set to true, it indicates the seller offers the "Click and Collect" feature.
     * @var boolean
     */
    public $pickupDropOff;

}
