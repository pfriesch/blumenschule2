<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Account\Contact;

class ContactOptionSubType
{
    /**
     *  The ID of the contact option sub-type. It is possible to define individual option sub-types. The following types are availabel by default and cannot be deleted.
     *
     * 1 = Work
     * 2 = Mobile private
     * 3 = Mobile work
     * 4 = Private
     * 5 = PayPal
     * 6 = Ebay
     * 7 = Amazon
     * 8 = Klarna
     * 9 = DHL
     * 10 = Forum
     * 11 = Guest
     * 12 = Contact person
     * 13 = Marketplace partner
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
     *  Flag that indicates if the option sub-type can be deleted
     * @var integer
     */
    public $nonErasable;

}
