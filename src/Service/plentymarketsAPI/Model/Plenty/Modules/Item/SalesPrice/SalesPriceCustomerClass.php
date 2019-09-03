<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Item\SalesPrice;

class SalesPriceCustomerClass
{
    /**
     *  The unique ID of the sales price
     * @var integer
     */
    public $salesPriceId;

    /**
     *  The unique ID of the customer class
     * @var integer
     */
    public $customerClassId;

    /**
     *  The time the customer class was activated.
     * @var string
     */
    public $createdAt;

    /**
     *  The time the relationship between customer class and sales price was last updated.
     * @var string
     */
    public $updatedAt;

}
