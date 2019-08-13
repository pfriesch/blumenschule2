<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Category;

class CategoryBranch
{
    /**
     *  The ID of the category
     * @var integer
     */
    public $categoryId;

    /**
     *  The ID of the category tree's 1st level. If 1st value is identical to category ID, category is of this level.
     * @var integer
     */
    public $category1Id;

    /**
     *  The ID of the category tree's 2nd level. If 2nd level value is identical to category ID, category is of this level. If 2nd level value is <strong>null</strong>, category is of a higher level.
     * @var integer
     */
    public $category2Id;

    /**
     *  The ID of the category tree's 3rd level. If 3rd level value is identical to category ID, category is of this level. If 2nd level value is <strong>null</strong>, category is of a higher level.
     * @var integer
     */
    public $category3Id;

    /**
     *  The ID of the category tree's 4th level. If 4th level value is identical to category ID, category is of this level. If 2nd level value is <strong>null</strong>, category is of a higher level.
     * @var integer
     */
    public $category4Id;

    /**
     *  The ID of the category tree's 5th level. If 5th level value is identical to category ID, category is of this level. If 2nd level value is <strong>null</strong>, category is of a higher level.
     * @var integer
     */
    public $category5Id;

    /**
     *  The ID of the category tree's 6th level. If 6th level value is identical to category ID, category is of this level. If 2nd level value is <strong>null</strong>, category is of a higher level.
     * @var integer
     */
    public $category6Id;

}
