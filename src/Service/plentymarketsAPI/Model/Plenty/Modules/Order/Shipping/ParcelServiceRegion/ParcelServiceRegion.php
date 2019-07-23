<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Order\Shipping\ParcelServiceRegion;

class ParcelServiceRegion
{
    /**
     *  The ID of the parcel service region
     * @var integer
     */
    public $id;
    
    /**
     *  The ID of the shipping region
     * @var integer
     */
    public $shippingRegionId;
    
    /**
     *  The ID of the parcel service preset
     * @var integer
     */
    public $parcelServicePresetId;
    
    /**
     *  The name of the shipping region
     * @var string
     */
    public $shippingRegionName;
    
    /**
     *  Type of the parcel service
     * @var integer
     */
    public $serviceType;
    
}
