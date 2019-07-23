<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Item\VariationCategory;

class VariationCategory
{
    /**
     *  The unique ID of the variation
     * @var integer
     */
    public $variationId;
    
    /**
     *  The unique ID of the category
     * @var integer
     */
    public $categoryId;
    
    /**
     *  The position of the category
     * @var integer
     */
    public $position;
    
    /**
     *  Flag that indicates if the category is the primary category for the market Neckermann for this variation.
     * @var string
     */
    public $isNeckermannPrimary;
    
}
