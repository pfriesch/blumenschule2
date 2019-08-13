<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Document;

use App\Service\plentymarketsAPI\Model\PaginatedResponse;

class DocumentPaginated extends PaginatedResponse
{
    /**
     * @var Document[]
     */
    public $entries;
}
