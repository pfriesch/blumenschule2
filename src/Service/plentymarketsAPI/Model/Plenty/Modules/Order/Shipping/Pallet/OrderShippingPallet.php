<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Order\Shipping\Pallet;

class OrderShippingPallet
{
    /**
     *  The ID of the order shipping pallet
     * @var integer
     */
    public $id;
    
    /**
     *  The weight of the order shipping pallet
     * @var float
     */
    public $individualWeight;
    
    /**
     *  The width of the order shipping pallet
     * @var float
     */
    public $width;
    
    /**
     *  The height of the order shipping pallet
     * @var float
     */
    public $height;
    
    /**
     *  The length of the order shipping pallet
     * @var float
     */
    public $length;
    
    /**
     *  Flag to tell if the pallet is stackable or not. If true, another pallet can be placed over the current one
     * @var boolean
     */
    public $isStackable;
    
    /**
     *  Additional info
     * @var integer
     */
    public $additionalInfo;
    
    /**
     *  The barcode
     * @var string
     */
    public $barcode;
    
    /**
     *  Flag to tell if the pallet is closed or not. If true, the information within the pallet should not be changed anymore
     * @var boolean
     */
    public $isClosed;
    
}
