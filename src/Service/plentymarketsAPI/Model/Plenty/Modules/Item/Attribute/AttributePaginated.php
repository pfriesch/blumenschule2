<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Item\Attribute;

use App\Service\plentymarketsAPI\Model\PaginatedResponse;

class AttributePaginated extends PaginatedResponse
{
    /**
     * @var Attribute[]
     */
    public $entries;
}
