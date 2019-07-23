<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Listing;

use BSApp\Service\plentymarketsAPI\Model\PaginatedResponse;

class ListingPaginated extends PaginatedResponse
{
    /**
     * @var Listing[]
    */
    public $entries;
}
