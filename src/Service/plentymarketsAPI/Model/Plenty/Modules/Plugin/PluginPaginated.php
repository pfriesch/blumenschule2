<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Plugin;

use App\Service\plentymarketsAPI\Model\PaginatedResponse;

class PluginPaginated extends PaginatedResponse
{
    /**
     * @var Plugin[]
     */
    public $entries;
}
