<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Report;

class RawDataConfig
{
    /**
     *  The raw data name
     * @var string
     */
    public $dataName;

    /**
     *  If active, raw data is generated daily
     * @var integer
     */
    public $active;

    /**
     *
     * @var integer
     */
    public $deleteRawDataAfterDays;

}
