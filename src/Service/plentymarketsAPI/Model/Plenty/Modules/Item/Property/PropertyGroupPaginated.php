<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Item\Property;

use App\Service\plentymarketsAPI\Model\PaginatedResponse;

class PropertyGroupPaginated extends PaginatedResponse
{
    /**
     * @var PropertyGroup[]
     */
    public $entries;
}
