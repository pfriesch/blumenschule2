<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Accounting;

class RevenueAccountLocationConfiguration
{
    /**
     *  The ID of the revenue account configuration
     * @var integer
     */
    public $id;

    /**
     *  The ID of the accounting location that the configuration belongs to
     * @var integer
     */
    public $locationId;

    /**
     *  The account used for revenues that are exempt from VAT and that were sold within the European Union
     * @var string
     */
    public $accountEu;

    /**
     *  The account used for revenues that are exempt from VAT and that were sold to outside the European Union
     * @var string
     */
    public $accountExport;

}
