<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\ElasticSync\Core;

class ElasticSyncOption
{
    /**
     *  The ID of the elastic sync option
     * @var integer
     */
    public $id;

    /**
     *  The ID of the elastic sync sync
     * @var integer
     */
    public $syncId;

    /**
     *  The option identifier of the elastic sync option
     * @var string
     */
    public $optionIdentifier;

    /**
     *  The key of the elastic sync option
     * @var string
     */
    public $key;

    /**
     *  The value of the elastic sync option
     * @var string
     */
    public $value;

}
