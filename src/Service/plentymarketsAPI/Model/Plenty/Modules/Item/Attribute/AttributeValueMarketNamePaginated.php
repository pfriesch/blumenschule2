<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Item\Attribute;

use App\Service\plentymarketsAPI\Model\PaginatedResponse;

class AttributeValueMarketNamePaginated extends PaginatedResponse
{
    /**
     * @var AttributeValueMarketName[]
     */
    public $entries;
}
