<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Item\ItemImage;

class ItemImageAvailability
{
    /**
     *  The ID of the image. The ID must be unique.
     * @var integer
     */
    public $imageId;

    /**
     *  The type of referrer for which the image is availabel. Possible types: mandant = The image can be made availabel for clients (stores).marketplace = The image can be made availabel for markets.listing = The image can be made availabel for listings.
     * @var string
     */
    public $type;

    /**
     *  For the type <b>mandant</b>, this is the plentyID of the client (store) for which the image is availabel. For the types <b>marketplace</b> and <b>listing</b>, this is the ID of the referrer for which the image is availabel. <strong>-1.00</strong> = The image is availabel for all referrers of this type.
     * @var float
     */
    public $value;

}
