<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Listing\Market;

use App\Service\plentymarketsAPI\Model\PaginatedResponse;

class ListingMarketPaginated extends PaginatedResponse
{
    /**
     * @var ListingMarket[]
     */
    public $entries;
}
