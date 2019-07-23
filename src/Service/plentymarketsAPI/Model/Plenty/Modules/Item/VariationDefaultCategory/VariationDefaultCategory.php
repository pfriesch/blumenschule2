<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Item\VariationDefaultCategory;

class VariationDefaultCategory
{
    /**
     *  The unique ID of the variation
     * @var integer
     */
    public $variationId;
    
    /**
     *  The unique ID of the category branch
     * @var integer
     */
    public $branchId;
    
    /**
     *  The unique plenty ID of the client (store)
     * @var integer
     */
    public $plentyId;
    
    /**
     *  
     * @var string
     */
    public $manually;
    
}
