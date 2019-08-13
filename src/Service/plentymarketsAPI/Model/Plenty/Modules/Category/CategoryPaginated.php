<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Category;

use App\Service\plentymarketsAPI\Model\PaginatedResponse;

class CategoryPaginated extends PaginatedResponse
{
    /**
     * @var Category[]
     */
    public $entries;
}
