<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Item\Variation;

use BSApp\Service\plentymarketsAPI\Model\PaginatedResponse;

class VariationPaginated extends PaginatedResponse
{
    /**
     * @var Variation[]
     */
    public $entries;
}
