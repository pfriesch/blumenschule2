<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Item\Attribute;

use App\Service\plentymarketsAPI\Model\PaginatedResponse;

class AttributeValuePaginated extends PaginatedResponse
{
    /**
     * @var AttributeValue[]
     */
    public $entries;
}
