<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Item\VariationSalesPrice;

class VariationSalesPrice
{
    /**
     *  The unique ID of the variation
     * @var integer
     */
    public $variationId;

    /**
     *  The unique ID of the sales price
     * @var integer
     */
    public $salesPriceId;

    /**
     *  The price of the variation saved for this sales price
     * @var float
     */
    public $price;

}
