<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Listing;

use App\Service\plentymarketsAPI\Model\PaginatedResponse;

class ListingPaginated extends PaginatedResponse
{
    /**
     * @var Listing[]
     */
    public $entries;
}
