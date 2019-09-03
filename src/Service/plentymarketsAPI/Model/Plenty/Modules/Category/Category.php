<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Category;

use App\Service\plentymarketsAPI\Model\Plenty\Modules\Category\CategoryClient;
use App\Service\plentymarketsAPI\Model\Plenty\Modules\Category\CategoryDetails;
use App\Service\plentymarketsAPI\Model\Plenty\Modules\Category\CategoryProperty;

class Category
{
    /**
     *  The unique ID of the category
     * @var integer
     */
    public $id;

    /**
     *  The ID of the category's parent category. Value is <strong>null</strong> if category level is 1.
     * @var integer
     */
    public $parentCategoryId;

    /**
     *  The category level of this category. This information is used for the sitemap.
     * @var integer
     */
    public $level;

    /**
     *  The category type of the category
     * @var string
     */
    public $type;

    /**
     *  Flag that indicates if the category will be displayed in the online store's navigation.
     * @var string
     */
    public $linklist;

    /**
     *  Flag that indicates who can see this category. all = Category is
     * visible to all visitors of the online store.customer = Category and all of its subcategories are visible to
     * visitors of the online store that have logged in only. Visitors that are not logged in are redirected to the login page.
     * @var string
     */
    public $right;

    /**
     *  Flag that indicates if the category will be included in the sitemap.
     * @var string
     */
    public $sitemap;

    /**
     *  The updated at timestamp of the category.
     * @var string
     */
    public $updatedAt;

    /**
     *  Collection of the clients (stores) that belong to this category (List)
     * @var CategoryClient[]
     */
    public $clients;

    /**
     *  Collection of the category details that belong to this category (List)
     * @var CategoryDetails[]
     */
    public $details;

    /**
     *  The linked elmar (List)
     * @var CategoryProperty[]
     */
    public $elmarCategories;

}
