<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Order\Coupon\Campaign\Code;

class CouponCampaignCode
{
    /**
     *  The coupon code
     * @var string
     */
    public $code;
    
    /**
     *  The ID of the campaign that the code belongs to
     * @var integer
     */
    public $campaignId;
    
    /**
     *  Flag that indicates if a code is active or deactivated.
     * True = the code is deactivated
     * 	False = the code is active
     * @var integer
     */
    public $disable;
    
    /**
     *  Flag that indicates if a code was redeemed or not.
     * True = the code was redeemed
     * 	False = the code is not redeemed
     * @var integer
     */
    public $consumed;
    
    /**
     *  How many times a code has been redeemed
     * @var integer
     */
    public $usedCount;
    
    /**
     *  The amount that is already redeemed. The total amount that can be redeemed is defined in the campaign as coupon value, because the value applies to all codes of a campaign.
     * @var float
     */
    public $usedAmount;
    
    /**
     *  The value of the coupon if it differs from the campaign value. The value is null if the campaign value is used.
     * @var object
     */
    public $value;
    
}
