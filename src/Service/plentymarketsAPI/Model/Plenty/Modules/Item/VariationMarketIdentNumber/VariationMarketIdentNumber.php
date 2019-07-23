<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Item\VariationMarketIdentNumber;

class VariationMarketIdentNumber
{
    /**
     *  The unique ID of the market ident number (ASIN/ePID) of a variation
     * @var integer
     */
    public $id;

    /**
     *  The unique ID of the variation
     * @var integer
     */
    public $variationId;

    /**
     *  The country code of the market ident number (ASIN/ePID)
     * @var integer
     */
    public $countryId;

    /**
     *  The type of market ident number (ASIN/ePID)
     * @var string
     */
    public $type;

    /**
     *  The position of the market ident number  (ASIN/ePID)
     * @var integer
     */
    public $position;

    /**
     *  The value of the market ident number (ASIN/ePID)
     * @var string
     */
    public $value;

}
