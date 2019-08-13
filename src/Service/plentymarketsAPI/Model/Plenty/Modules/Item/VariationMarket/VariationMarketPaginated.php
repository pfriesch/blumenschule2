<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Item\VariationMarket;

use App\Service\plentymarketsAPI\Model\PaginatedResponse;

class VariationMarketPaginated extends PaginatedResponse
{
    /**
     * @var VariationMarket[]
     */
    public $entries;
}
