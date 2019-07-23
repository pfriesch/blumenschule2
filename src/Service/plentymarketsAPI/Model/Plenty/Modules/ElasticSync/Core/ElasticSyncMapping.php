<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\ElasticSync\Core;

class ElasticSyncMapping
{
    /**
     *  The ID of the elastic sync mapping
     * @var integer
     */
    public $id;
    
    /**
     *  The ID of the elastic sync sync
     * @var integer
     */
    public $syncId;
    
    /**
     *  The name of the elastic sync mapping
     * @var string
     */
    public $name;
    
    /**
     *  The position of the elastic sync mapping
     * @var integer
     */
    public $position;
    
    /**
     *  The state of the elastic sync mapping
     * @var boolean
     */
    public $active;
    
}
