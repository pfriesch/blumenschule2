<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Item\Property;

use App\Service\plentymarketsAPI\Model\PaginatedResponse;

class PropertyPaginated extends PaginatedResponse
{
    /**
     * @var Property[]
     */
    public $entries;
}
