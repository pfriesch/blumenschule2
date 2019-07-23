<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Item\Attribute;

use BSApp\Service\plentymarketsAPI\Model\PaginatedResponse;

class AttributePaginated extends PaginatedResponse
{
    /**
     * @var Attribute[]
     */
    public $entries;
}
