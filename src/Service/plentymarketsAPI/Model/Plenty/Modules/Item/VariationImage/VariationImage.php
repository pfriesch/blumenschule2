<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Item\VariationImage;

class VariationImage
{
    /**
     *  The unique ID of the link between a variation and an image
     * @var integer
     */
    public $id;

    /**
     *  The unique ID of the item
     * @var integer
     */
    public $itemId;

    /**
     *  The unique ID of the variation
     * @var integer
     */
    public $variationId;

    /**
     *  The unique ID of the image
     * @var integer
     */
    public $imageId;

    /**
     *  The time the image was linked to the variation.
     * @var string
     */
    public $createdAt;

    /**
     *  The time the link between an image and a variation was last updated.
     * @var string
     */
    public $updatedAt;

}
