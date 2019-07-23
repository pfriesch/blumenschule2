<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Order\Date;

class OrderDateTypeName
{
    /**
     *  The ID of the order date type name
     * @var integer
     */
    public $id;

    /**
     *  The ID of the date type that this name belongs to. The following date types are available:
     *
     * Deleted on = 1
     * Created on = 2
     * Paid date = 3
     * Last update = 4
     * Completed on = 5
     * Return date = 6
     * Payment due date = 7
     * Estimated shipping date = 8
     * Start date = 9
     * End date = 10
     * Possible delivery date = 11
     * Market transfer date = 12
     *
     * @var integer
     */
    public $typeId;

    /**
     *  The ISO 639-1 language code for the name, e.g. "en" for English
     * @var string
     */
    public $lang;

    /**
     *  The name of the order date type
     * @var string
     */
    public $name;

}
