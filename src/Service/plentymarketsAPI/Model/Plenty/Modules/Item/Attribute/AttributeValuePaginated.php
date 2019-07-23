<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Item\Attribute;

use BSApp\Service\plentymarketsAPI\Model\PaginatedResponse;

class AttributeValuePaginated extends PaginatedResponse
{
    /**
     * @var AttributeValue[]
     */
    public $entries;
}
