<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Market\Ebay\PartsFitment;

class Fitment
{
    /**
     *  The id of the fitment.
     * @var integer
     */
    public $id;

    /**
     *  The id of the market the fitment belongs to.
     * @var integer
     */
    public $marketId;

    /**
     *  The name of the fitment.
     * @var string
     */
    public $name;

    /**
     *  The id of the category the fitment belongs to.
     * @var integer
     */
    public $categoryId;

}
