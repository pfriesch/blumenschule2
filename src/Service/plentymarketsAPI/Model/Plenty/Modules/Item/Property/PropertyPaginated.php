<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Item\Property;

use BSApp\Service\plentymarketsAPI\Model\PaginatedResponse;

class PropertyPaginated extends PaginatedResponse
{
    /**
     * @var Property[]
     */
    public $entries;
}
