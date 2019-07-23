<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Item\SalesPrice;

use BSApp\Service\plentymarketsAPI\Model\PaginatedResponse;

class SalesPricePaginated extends PaginatedResponse
{
    /**
     * @var SalesPrice[]
    */
    public $entries;
}
