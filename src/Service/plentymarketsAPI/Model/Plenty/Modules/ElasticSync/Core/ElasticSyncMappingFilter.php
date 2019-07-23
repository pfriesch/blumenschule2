<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\ElasticSync\Core;

class ElasticSyncMappingFilter
{
    /**
     *  The ID of the elastic sync mapping filter
     * @var integer
     */
    public $id;

    /**
     *  The ID of the elastic sync mapping
     * @var integer
     */
    public $mappingId;

    /**
     *  The type of the elastic sync mapping filter
     * @var string
     */
    public $type;

    /**
     *  The operator of the elastic sync mapping filter
     * @var string
     */
    public $operator;

    /**
     *  The source of the elastic sync mapping filter
     * @var string
     */
    public $source;

    /**
     *  The value of the elastic sync mapping filter
     * @var string
     */
    public $value;

}
