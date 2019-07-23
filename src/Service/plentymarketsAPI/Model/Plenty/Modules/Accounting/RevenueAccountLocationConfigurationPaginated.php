<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Accounting;

use BSApp\Service\plentymarketsAPI\Model\PaginatedResponse;

class RevenueAccountLocationConfigurationPaginated extends PaginatedResponse
{
    /**
     * @var RevenueAccountLocationConfiguration[]
     */
    public $entries;
}
