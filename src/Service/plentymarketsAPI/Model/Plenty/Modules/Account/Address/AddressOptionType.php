<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Account\Address;

class AddressOptionType
{
    /**
     *  The ID of the address option type. It is possible to define individual types. The following types are availabel by default:
     *
     * 1 = VAT number
     * 2 = External address ID
     * 3 = Entry certificate
     * 4 = Telephone
     * 5 = Email
     * 6 = Post number
     * 7 = Personal id
     * 8 = BBFC (age rating)
     * 9 = Birthday
     * 10 = Session ID
     * 11 = Title
     * 12 = Contact person
     *
     * @var integer
     */
    public $id;

    /**
     *  The position for sorting
     * @var integer
     */
    public $position;

    /**
     *  Flag that indicates if the type can be deleted
     * @var integer
     */
    public $nonErasable;

}
