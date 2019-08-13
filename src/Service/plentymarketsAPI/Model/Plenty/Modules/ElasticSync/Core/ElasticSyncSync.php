<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\ElasticSync\Core;

class ElasticSyncSync
{
    /**
     *  The ID of the elastic sync sync
     * @var integer
     */
    public $id;

    /**
     *  The name of the elastic sync sync
     * @var string
     */
    public $name;

    /**
     *  The type of the elastic sync sync
     * @var string
     */
    public $syncType;

    /**
     *  The source type of the elastic sync sync
     * @var string
     */
    public $sourceType;

    /**
     *  The source data type of the elastic sync sync
     * @var string
     */
    public $sourceDataType;

}
