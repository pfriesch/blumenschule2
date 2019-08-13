<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Market\Credentials;

use App\Service\plentymarketsAPI\Model\PaginatedResponse;

class CredentialsPaginated extends PaginatedResponse
{
    /**
     * @var Credentials[]
     */
    public $entries;
}
