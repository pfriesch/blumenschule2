<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Payment;

class PaymentPropertyType
{
    /**
     *  The ID of the property type
     * @var integer
     */
    public $id;

    /**
     *  Specifies whether the property type can be deleted. Property types that can be deleted have the value 1. Default property types cannot be deleted.
     * @var integer
     */
    public $erasable;

    /**
     *  The position number of the property type
     * @var integer
     */
    public $position;

}
