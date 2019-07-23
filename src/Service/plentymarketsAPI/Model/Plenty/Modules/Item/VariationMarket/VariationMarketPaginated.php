<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Item\VariationMarket;

use BSApp\Service\plentymarketsAPI\Model\PaginatedResponse;

class VariationMarketPaginated extends PaginatedResponse
{
    /**
     * @var VariationMarket[]
     */
    public $entries;
}
