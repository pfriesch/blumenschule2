<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Item\SalesPrice;

class SalesPriceReferrer
{
    /**
     *  The unique ID of the sales price
     * @var integer
     */
    public $salesPriceId;

    /**
     *  The unique ID of the referrer
     * @var float
     */
    public $referrerId;

    /**
     *  The time the referrer was activated.
     * @var string
     */
    public $createdAt;

    /**
     *  The time the relationship between referrer and sales price was last updated.
     * @var string
     */
    public $updatedAt;

}
