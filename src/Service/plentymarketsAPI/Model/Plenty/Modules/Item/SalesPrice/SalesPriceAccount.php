<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Item\SalesPrice;

class SalesPriceAccount
{
    /**
     *  The unique ID of the sales price
     * @var integer
     */
    public $salesPriceId;
    
    /**
     *  The ID of the referrer linked to the sales price
     * @var integer
     */
    public $referrerId;
    
    /**
     *  The ID of the referrer account linked to the sales price
     * @var integer
     */
    public $accountId;
    
    /**
     *  The time the referrer account was linked to the sales price.
     * @var string
     */
    public $createdAt;
    
    /**
     *  The time the link was last updated.
     * @var string
     */
    public $updatedAt;
    
}
