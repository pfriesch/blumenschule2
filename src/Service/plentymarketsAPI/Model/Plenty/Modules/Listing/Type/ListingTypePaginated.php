<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Listing\Type;

use BSApp\Service\plentymarketsAPI\Model\PaginatedResponse;

class ListingTypePaginated extends PaginatedResponse
{
    /**
     * @var ListingType[]
     */
    public $entries;
}
