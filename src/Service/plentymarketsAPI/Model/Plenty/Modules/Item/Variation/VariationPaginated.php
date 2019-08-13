<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Item\Variation;

use App\Service\plentymarketsAPI\Model\PaginatedResponse;

class VariationPaginated extends PaginatedResponse
{
    /**
     * @var Variation[]
     */
    public $entries;
}
