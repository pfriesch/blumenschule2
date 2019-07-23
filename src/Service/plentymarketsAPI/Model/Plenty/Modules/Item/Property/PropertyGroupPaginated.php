<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Item\Property;

use BSApp\Service\plentymarketsAPI\Model\PaginatedResponse;

class PropertyGroupPaginated extends PaginatedResponse
{
    /**
     * @var PropertyGroup[]
    */
    public $entries;
}
