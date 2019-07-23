<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Order\Shipping\PackageType;

class ShippingPackageType
{
    /**
     *  The ID of the shipping package type
     * @var integer
     */
    public $id;

    /**
     *  The name of the shipping package type
     * @var string
     */
    public $name;

    /**
     *  The width of the shipping package type
     * @var integer
     */
    public $width;

    /**
     *  The height of the shipping package type
     * @var integer
     */
    public $height;

    /**
     *  The length of the shipping package type
     * @var integer
     */
    public $length;

    /**
     *  The unit of the shipping package type dimension
     * @var string
     */
    public $unit;

    /**
     *  The maximum weight of the shipping package type
     * @var integer
     */
    public $maxWeight;

    /**
     *  The maximum volume of the shipping package type
     * @var integer
     */
    public $maxVolume;

    /**
     *  The volume type of the shipping package type
     * @var integer
     */
    public $volumeType;

}
