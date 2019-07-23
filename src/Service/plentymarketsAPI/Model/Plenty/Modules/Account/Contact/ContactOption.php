<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Account\Contact;

class ContactOption
{
    /**
     *  The ID of the contact option
     * @var integer
     */
    public $id;

    /**
     *  The ID of the contact the option belongs to
     * @var integer
     */
    public $contactId;

    /**
     *  The type ID of the contact option. It is possible to define individual contact option types. The following types are available by default and cannot be deleted:
     *
     * 1 = Telephone
     * 2 = Email
     * 3 = Telefax
     * 4 = Web page
     * 5 = Marketplace
     * 6 = Identification number
     * 7 = Payment
     * 8 = User name
     * 9 = Group
     * 10 = Access
     * 11 = Additional
     *
     * @var integer
     */
    public $typeId;

    /**
     *  The sub-type ID of the contact option. It is possible to define individual contact option sub-types. The following types are available by default and cannot be deleted:
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
    public $subTypeId;

    /**
     *  The value of the option. Depends on the type/sub-type.
     * @var string
     */
    public $value;

    /**
     *  The priority for sorting
     * @var integer
     */
    public $priority;

    /**
     *  The time the option was created as unix timestamp
     * @var string
     */
    public $createdAt;

    /**
     *  The time the option was last updated as unix timestamp
     * @var string
     */
    public $updatedAt;

}
