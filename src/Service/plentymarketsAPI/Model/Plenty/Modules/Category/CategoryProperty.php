<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Category;

class CategoryProperty
{
    /**
     *  The unique ID of the category
     * @var integer
     */
    public $categoryId;

    /**
     *  The unique ID of the referrer
     * @var float
     */
    public $marketId;

    /**
     *  The unique plenty ID of the client (store)
     * @var integer
     */
    public $plentyId;

    /**
     *  The category of the referrer
     * @var string
     */
    public $value;

}
