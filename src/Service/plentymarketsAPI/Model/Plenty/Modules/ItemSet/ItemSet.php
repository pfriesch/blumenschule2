<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\ItemSet;

class ItemSet
{
    /**
     *  The item ID of the item set. The ID must be unique.
     * @var integer
     */
    public $id;

    /**
     *  The name of the item set. The default language of the system is used.
     * @var string
     */
    public $name;

    /**
     *  The array with categories of the item set. The category ID key  "categoryId" must be specified. Example for JSON Object:  "categories":[{"categoryId":"34"},{"categoryId":"35"}]}]
     * @var array
     */
    public $categories;

}
