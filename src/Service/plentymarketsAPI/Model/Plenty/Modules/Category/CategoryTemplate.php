<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Category;

class CategoryTemplate
{
    /**
     *  The unique ID of the category
     * @var integer
     */
    public $categoryId;

    /**
     *  The unique plenty ID of the client (store)
     * @var integer
     */
    public $plentyId;

    /**
     *  The language of the template
     * @var string
     */
    public $lang;

    /**
     *  The content of the template
     * @var string
     */
    public $content;

}
