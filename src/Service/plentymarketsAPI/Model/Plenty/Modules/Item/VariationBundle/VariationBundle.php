<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Item\VariationBundle;

class VariationBundle
{
    /**
     *  The unique ID of the link that marks a variation as a bundle component
     * @var integer
     */
    public $id;

    /**
     *  The unique ID of the variation to which other variations are added to create a bundle
     * @var integer
     */
    public $variationId;

    /**
     *  The unique ID of the variation added as bundle component
     * @var integer
     */
    public $componentVariationId;

    /**
     *  The quantity of the variation to be added as bundle component
     * @var integer
     */
    public $componentQuantity;

    /**
     *  The time the bundle was last updated.
     * @var string
     */
    public $lastUpdatedTimestamp;

    /**
     *  The time the bundle was created.
     * @var string
     */
    public $createdAt;

}
