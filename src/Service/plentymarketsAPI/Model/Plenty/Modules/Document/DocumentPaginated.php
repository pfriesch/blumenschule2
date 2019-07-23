<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Document;

use BSApp\Service\plentymarketsAPI\Model\PaginatedResponse;

class DocumentPaginated extends PaginatedResponse
{
    /**
     * @var Document[]
     */
    public $entries;
}
