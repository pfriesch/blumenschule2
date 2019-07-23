<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Report;

use BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Report\RawDataConfig;

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
