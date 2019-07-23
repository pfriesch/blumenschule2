<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Plugin;

use BSApp\Service\plentymarketsAPI\Model\PaginatedResponse;

class PluginPaginated extends PaginatedResponse
{
    /**
     * @var Plugin[]
     */
    public $entries;
}
