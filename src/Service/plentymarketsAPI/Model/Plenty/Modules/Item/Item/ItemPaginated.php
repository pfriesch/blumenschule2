<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Item\Item;

use BSApp\Service\plentymarketsAPI\Model\PaginatedResponse;

class ItemPaginated extends PaginatedResponse
{
    /**
     * @var Item[]
    */
    public $entries;
}
