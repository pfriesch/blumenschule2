<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Market\Credentials;

use BSApp\Service\plentymarketsAPI\Model\PaginatedResponse;

class CredentialsPaginated extends PaginatedResponse
{
    /**
     * @var Credentials[]
     */
    public $entries;
}
