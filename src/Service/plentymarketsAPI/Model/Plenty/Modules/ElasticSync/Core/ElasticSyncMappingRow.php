<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\ElasticSync\Core;

class ElasticSyncMappingRow
{
    /**
     *  The ID of the elastic sync mapping row
     * @var integer
     */
    public $id;
    
    /**
     *  The ID of the elastic sync mapping
     * @var integer
     */
    public $mappingId;
    
    /**
     *  The target model of the elastic sync mapping row
     * @var string
     */
    public $targetModel;
    
    /**
     *  The target attribute of the elastic sync mapping row
     * @var string
     */
    public $targetAttribute;
    
    /**
     *  The state of the elastic sync mapping row
     * @var boolean
     */
    public $active;
    
    /**
     *  The entity type of the elastic sync mapping row (array values: 'ownValue', 'ownAssignment', 'regularExpression', 'csvColumn')
     * @var string
     */
    public $entityType;
    
    /**
     *  The value of the elastic sync mapping row
     * @var string
     */
    public $value;
    
    /**
     *  The settings of the elastic sync mapping row
     * @var string
     */
    public $settings;
    
    /**
     *  The identifiers of the elastic sync mapping row
     * @var string
     */
    public $identifiers;
    
}
