<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Category;

class CategoryClient
{
    /**
     *  The unique plenty ID of the client (store) in which the category is visible. Several IDs can be separated by commas. If a subcategory is linked to a client, its parent categories will be linked to this client as well.
     * @var integer
     */
    public $plentyId;

}
