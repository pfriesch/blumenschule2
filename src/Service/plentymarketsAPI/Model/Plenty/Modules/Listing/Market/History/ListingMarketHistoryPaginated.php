<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Listing\Market\History;

use App\Service\plentymarketsAPI\Model\PaginatedResponse;

class ListingMarketHistoryPaginated extends PaginatedResponse
{
    /**
     * @var ListingMarketHistory[]
     */
    public $entries;
}
