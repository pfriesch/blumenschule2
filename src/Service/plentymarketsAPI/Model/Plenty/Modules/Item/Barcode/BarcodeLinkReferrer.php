<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Item\Barcode;

class BarcodeLinkReferrer
{
    /**
     *  The unique ID of the barcode
     * @var integer
     */
    public $barcodeId;

    /**
     *  The unique ID of the referrer. To activate all referrers, the value <strong>-1</strong> must be specified. This value activates all referrers in the system by default, including any referrers added at a later stage.
     * @var float
     */
    public $referrerId;

    /**
     *  The time the barcode was created.
     * @var string
     */
    public $createdAt;

    /**
     *  The time the barcode was last updated.
     * @var string
     */
    public $updatedAt;

    /**
     *   (Object)
     * @var object
     */
    public $barcode;

}
