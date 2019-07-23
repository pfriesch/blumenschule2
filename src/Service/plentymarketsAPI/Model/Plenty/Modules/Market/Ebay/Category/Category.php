<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Market\Ebay\Category;

class Category
{
    /**
     *  The ID of the category.
     * @var integer
     */
    public $id;
    
    /**
     *  The parent category ID.
     * @var integer
     */
    public $parentId;
    
    /**
     *  The name of the category.
     * @var string
     */
    public $name;
    
    /**
     *  Tells if the category is leaf.
     * @var boolean
     */
    public $isLeaf;
    
    /**
     *  Child categories.
     * @var array
     */
    public $children;
    
    /**
     *  The category path.
     * @var array
     */
    public $path;
    
}
