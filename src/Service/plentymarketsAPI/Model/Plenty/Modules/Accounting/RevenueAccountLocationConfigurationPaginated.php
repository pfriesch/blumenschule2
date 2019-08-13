<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Accounting;

use App\Service\plentymarketsAPI\Model\PaginatedResponse;

class RevenueAccountLocationConfigurationPaginated extends PaginatedResponse
{
    /**
     * @var RevenueAccountLocationConfiguration[]
     */
    public $entries;
}
