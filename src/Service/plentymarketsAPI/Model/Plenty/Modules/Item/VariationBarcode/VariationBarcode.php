<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Item\VariationBarcode;

class VariationBarcode
{
    /**
     *  The code of the variation's barcode. The combination of code and barcode ID must be unique.
     * @var string
     */
    public $code;
    
    /**
     *  The unique ID of the barcode linked to the variation. The combination of code and barcode ID must be unique.
     * @var integer
     */
    public $barcodeId;
    
    /**
     *  The unique ID of the variation
     * @var integer
     */
    public $variationId;
    
    /**
     *  The time the variation's code was created.
     * @var string
     */
    public $createdAt;
    
    /**
     *  The barcode of the variation's barcode (Object)
     * @var object
     */
    public $barcode;
    
}
