<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Account\Contact;

class Contact
{
    /**
     *  The ID of the contact
     * @var integer
     */
    public $id;

    /**
     *  The external ID of the contact
     * @var string
     */
    public $externalId;

    /**
     *  The number of the contact (previous customer number)
     * @var string
     */
    public $number;

    /**
     *  The ID of the contact type
     * @var integer
     */
    public $typeId;

    /**
     *  The first name of the contact
     * @var string
     */
    public $firstName;

    /**
     *  The last name of the contact
     * @var string
     */
    public $lastName;

    /**
     *  The full name of the contact. A concatenation of first and last name.
     * @var string
     */
    public $fullName;

    /**
     *  The private email address of the contact
     * @var string
     */
    public $email;

    /**
     *  The secondary private email address of the contact
     * @var string
     */
    public $secondaryEmail;

    /**
     *  The gender of the contact ("female", "male" or "diverse")
     * @var string
     */
    public $gender;

    /**
     *  The title of the contact, e.g. a doctorate
     * @var string
     */
    public $title;

    /**
     *  The form of address for the contact
     * @var string
     */
    public $formOfAddress;

    /**
     *  The time the contact registered for the newsletter as unix timestamp
     * @var string
     */
    public $newsletterAllowanceAt;

    /**
     *  The ID of the contact class
     * @var integer
     */
    public $classId;

    /**
     *  The blocked status of the contact. Contacts can be blocked for a specific client (store). Possible values:
     *
     *  0 = not blocked
     *  1 = blocked
     *
     * @var integer
     */
    public $blocked;

    /**
     *  The rating of the contact. This rating is for internal use only. 5 red stars are for the worst and 5 yellow stars for the best rating. Possible values:
     *
     * -5 = 5 red stars (worst rating)
     * -4 = 4 red stars
     * -3 = 3 red stars
     * -2 = 2 red stars
     * -1 = 1 red star
     * 0 = 5 grey stars, no rating saved for the contact
     * 1 = 1 yellow star
     * 2 = 2 yellow stars
     * 3 = 3 yellow stars
     * 4 = 4 yellow stars
     * 5 = 5 yellow stars (best rating)
     *
     * @var integer
     */
    public $rating;

    /**
     *  The book account (debtor account) of the contact. An additional, separate number that generally corresponds to the customer number or the debtor number in your financial accounting.
     * @var string
     */
    public $bookAccount;

    /**
     *  The language of the contact
     * @var string
     */
    public $lang;

    /**
     *  The origin of the contact
     * @var float
     */
    public $referrerId;

    /**
     *  The client (store) that is assigned to the contact
     * @var integer
     */
    public $plentyId;

    /**
     *  The owner ID of the contact
     * @var integer
     */
    public $userId;

    /**
     *  The date of birth of the contact
     * @var string
     */
    public $birthdayAt;

    /**
     *  The date of the last login of the contact
     * @var string
     */
    public $lastLoginAt;

    /**
     *  The date of the last login of the contact
     * @var string
     */
    public $lastLoginAtTimestamp;

    /**
     *  The date of the last order
     * @var string
     */
    public $lastOrderAt;

    /**
     *  The date the contact was created
     * @var string
     */
    public $createdAt;

    /**
     *  The date the contact was last updated
     * @var string
     */
    public $updatedAt;

    /**
     *  The private phone number of the contact
     * @var string
     */
    public $privatePhone;

    /**
     *  The private fax number of the contact
     * @var string
     */
    public $privateFax;

    /**
     *  The private mobile phone number of the contact
     * @var string
     */
    public $privateMobile;

    /**
     *  The eBay account name of the contact
     * @var string
     */
    public $ebayName;

    /**
     *  The email address of the PayPal account of the contact
     * @var string
     */
    public $paypalEmail;

    /**
     *  The PayPal payer id of the contact
     * @var string
     */
    public $paypalPayerId;

    /**
     *  The Klarna personal id of the contact
     * @var string
     */
    public $klarnaPersonalId;

    /**
     *  The DHL PostIdent of the contact
     * @var string
     */
    public $dhlPostIdent;

    /**
     *  The user name of the contact in the forum
     * @var string
     */
    public $forumUsername;

    /**
     *  The ID of the forum group that is assigned to the contact
     * @var string
     */
    public $forumGroupId;

    /**
     *  The access type of the contact
     * @var string
     */
    public $singleAccess;

    /**
     *  The contact person of the contact
     * @var string
     */
    public $contactPerson;

    /**
     *  The marketplace partner status of the contact
     * @var string
     */
    public $marketplacePartner;

    /**
     *  The foreign currency of the contact
     * @var integer
     */
    public $valuta;

    /**
     *  The early payment discount period in days specified for the account
     * @var integer
     */
    public $discountDays;

    /**
     *  The early payment discount in percent specified for the account
     * @var float
     */
    public $discountPercent;

    /**
     *  The payment due date in days specified for the account
     * @var integer
     */
    public $timeForPaymentAllowedDays;

    /**
     *  The salesRepresentative ID of the contact
     * @var integer
     */
    public $salesRepresentativeContactId;

}
