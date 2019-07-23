<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Listing\Market\History;

use BSApp\Service\plentymarketsAPI\Model\PaginatedResponse;

class ListingMarketHistoryPaginated extends PaginatedResponse
{
    /**
     * @var ListingMarketHistory[]
    */
    public $entries;
}
