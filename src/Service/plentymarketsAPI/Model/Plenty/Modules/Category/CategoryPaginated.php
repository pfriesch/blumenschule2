<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Category;

use BSApp\Service\plentymarketsAPI\Model\PaginatedResponse;

class CategoryPaginated extends PaginatedResponse
{
    /**
     * @var Category[]
     */
    public $entries;
}
