<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Market\Ebay\AccountPolicy;

class ReturnPolicy
{
    /**
     *  The ID of the return policy.
     * @var string
     */
    public $returnPolicyId;

    /**
     *  An optional seller-defined description of the return policy.
     * @var string
     */
    public $description;

    /**
     *  If this value is set to true, it indicates the seller offers an Extended Holiday Returns policy for their listings.
     * @var boolean
     */
    public $extendedHolidayReturnsOffered;

    /**
     *  The ID of the eBay marketplace to which this return policy applies. If this value is not specified, value defaults to the seller's eBay registration site.
     * @var string
     */
    public $marketplaceId;

    /**
     *  A user-defined name for this fulfillment policy. Names must be unique for policies assigned to the same marketplace.
     * @var string
     */
    public $name;

    /**
     *  Indicates the method the seller uses to compensate the buyer for returned items. The return method specified applies only to remorse returns. Availabel options: `MERCHANDISE_CREDIT`, `MONEY_BACK`.
     * @var string
     */
    public $refundMethod;

    /**
     *  Sellers who accept returns should include this field if they charge buyers a restocking fee when items are returned.
     * @var string
     */
    public $restockingFeePercentage;

    /**
     *  This optional free-form string field lets the seller provide a detailed explanation of the return policy.
     * @var string
     */
    public $returnInstruction;

    /**
     *  This field indicates the method in which the seller handles non-money back return requests for remorse returns. Sellers can specify they either exchange or replace items. Availabel options: `EXCHANGE`, `REPLACEMENT`.
     * @var string
     */
    public $returnMethod;

    /**
     *  Set this value to true to indicate the seller accepts returns.
     * @var boolean
     */
    public $returnsAccepted;

    /**
     *  The seller uses this value to specify whether the buyer or the seller is responsible for paying return shipping charges. The field can be set to either `BUYER` or `SELLER`.
     * @var string
     */
    public $returnShippingCostPayer;

}
