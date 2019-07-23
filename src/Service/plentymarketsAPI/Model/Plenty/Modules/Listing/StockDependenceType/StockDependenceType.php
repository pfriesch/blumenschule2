<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Listing\StockDependenceType;

class StockDependenceType
{
    /**
     *  The ID of the listing stock dependence type.
     * @var integer
     */
    public $id;
    
    /**
     *  Flag that indicates if the type can be deleted.
     * @var integer
     */
    public $isErasable;
    
    /**
     *  The position for sorting.
     * @var integer
     */
    public $position;
    
}
