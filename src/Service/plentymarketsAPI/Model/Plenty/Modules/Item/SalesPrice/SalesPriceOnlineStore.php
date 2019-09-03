<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Item\SalesPrice;

class SalesPriceOnlineStore
{
    /**
     *  The unique ID of the sales price
     * @var integer
     */
    public $salesPriceId;

    /**
     *  The unique ID of the client (store)
     * @var integer
     */
    public $plentyId;

    /**
     *  The time the client (store) was activated.
     * @var string
     */
    public $createdAt;

    /**
     *  The time the relationship between the client (store) and the sales price was last updated.
     * @var string
     */
    public $updatedAt;

}
