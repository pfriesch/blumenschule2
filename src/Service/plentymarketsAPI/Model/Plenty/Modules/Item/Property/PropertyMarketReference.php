<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Item\Property;

class PropertyMarketReference
{
    /**
     *  The unique ID of the property
     * @var integer
     */
    public $propertyId;

    /**
     *  The unique ID of the reference for the market
     * @var integer
     */
    public $componentId;

    /**
     *  The unique ID of the market
     * @var float
     */
    public $marketId;

    /**
     *  The external reference of the property
     * @var string
     */
    public $externalComponent;

}
