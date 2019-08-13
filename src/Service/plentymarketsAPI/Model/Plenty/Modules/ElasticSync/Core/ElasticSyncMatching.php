<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\ElasticSync\Core;

class ElasticSyncMatching
{
    /**
     *  The ID of the elastic sync matching
     * @var integer
     */
    public $id;

    /**
     *  The ID of the elastic sync sync
     * @var integer
     */
    public $syncId;

    /**
     *  The target of the elastic sync matching
     * @var string
     */
    public $target;

    /**
     *  The source of the elastic sync matching
     * @var string
     */
    public $source;

    /**
     *  The additional value of the elastic sync matching
     * @var string
     */
    public $additionalValue;

}
