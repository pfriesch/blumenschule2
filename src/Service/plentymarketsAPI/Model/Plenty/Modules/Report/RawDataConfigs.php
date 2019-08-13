<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Report;

use App\Service\plentymarketsAPI\Model\Plenty\Modules\Report\RawDataConfig;

class RawDataConfigs
{
    /**
     *  System id hash
     * @var string
     */
    public $plentyIdHash;

    /**
     *  List of all saved configurations (List)
     * @var RawDataConfig[]
     */
    public $configs;

}
