<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Item\VariationClient;

class VariationClient
{
    /**
     *  The unique ID of the variation
     * @var integer
     */
    public $variationId;

    /**
     *  The unique ID of the client (store)
     * @var integer
     */
    public $plentyId;

    /**
     *  The time at which the client (store) was linked to the variation.
     * @var string
     */
    public $createdAt;

}
