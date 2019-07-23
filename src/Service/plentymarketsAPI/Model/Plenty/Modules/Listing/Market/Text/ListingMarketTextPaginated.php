<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Listing\Market\Text;

use BSApp\Service\plentymarketsAPI\Model\PaginatedResponse;

class ListingMarketTextPaginated extends PaginatedResponse
{
    /**
     * @var ListingMarketText[]
     */
    public $entries;
}
