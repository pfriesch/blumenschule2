<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Item\Barcode;

use BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Item\Barcode\BarcodeLinkReferrer;

class Barcode
{
    /**
     *  The unique ID of the barcode
     * @var integer
     */
    public $id;
    
    /**
     *  The name of the barcode
     * @var string
     */
    public $name;
    
    /**
     *  The type of the barcode. Possible values: GTIN_8, GTIN_13, GTIN_14, GTIN_128, ISBN, QR, CODE_128, UPC
     * @var string
     */
    public $type;
    
    /**
     *  The time the code was created.
     * @var string
     */
    public $createdAt;
    
    /**
     *   (List)
     * @var BarcodeLinkReferrer[]
     */
    public $referrers;
    
}
