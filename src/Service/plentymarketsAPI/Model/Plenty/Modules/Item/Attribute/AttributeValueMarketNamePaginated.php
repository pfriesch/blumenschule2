<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Item\Attribute;

use BSApp\Service\plentymarketsAPI\Model\PaginatedResponse;

class AttributeValueMarketNamePaginated extends PaginatedResponse
{
    /**
     * @var AttributeValueMarketName[]
     */
    public $entries;
}
