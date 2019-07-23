<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Account\Contact;

class ContactType
{
    /**
     *  The ID of the contact type. It is possible to define individual contact types. The following types are available by default and cannot be deleted.
     *
     * 1 = Customer
     * 2 = Sales lead/Interested party
     * 3 = Sales representative
     * 4 = Supplier
     * 5 = Producer/Manufacturer
     * 6 = Partner
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
