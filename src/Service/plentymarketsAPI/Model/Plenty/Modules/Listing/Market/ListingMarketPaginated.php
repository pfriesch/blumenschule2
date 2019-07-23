<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Listing\Market;

use BSApp\Service\plentymarketsAPI\Model\PaginatedResponse;

class ListingMarketPaginated extends PaginatedResponse
{
    /**
     * @var ListingMarket[]
    */
    public $entries;
}
