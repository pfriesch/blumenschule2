<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\DataExchange;

class Export
{
    /**
     *  export id
     * @var integer
     */
    public $id;
    
    /**
     *  export name
     * @var string
     */
    public $name;
    
    /**
     *  export type
     * @var string
     */
    public $type;
    
    /**
     *  maximum number of entries
     * @var integer
     */
    public $limit;
    
    /**
     *  created at date timestamp
     * @var string
     */
    public $createdAt;
    
    /**
     *  last update date timestamp
     * @var string
     */
    public $updatedAt;
    
    /**
     *  the format key
     * @var string
     */
    public $formatKey;
    
    /**
     *  the output type
     * @var string
     */
    public $outputType;
    
    /**
     *  if cache should be generated
     * @var integer
     */
    public $generateCache;
    
}
