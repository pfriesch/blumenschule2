<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Listing\Market\Text;

use App\Service\plentymarketsAPI\Model\PaginatedResponse;

class ListingMarketTextPaginated extends PaginatedResponse
{
    /**
     * @var ListingMarketText[]
     */
    public $entries;
}
