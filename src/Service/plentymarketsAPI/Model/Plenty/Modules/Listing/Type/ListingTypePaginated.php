<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Listing\Type;

use App\Service\plentymarketsAPI\Model\PaginatedResponse;

class ListingTypePaginated extends PaginatedResponse
{
    /**
     * @var ListingType[]
     */
    public $entries;
}
