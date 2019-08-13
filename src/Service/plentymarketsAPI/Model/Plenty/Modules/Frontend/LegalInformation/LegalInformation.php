<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Frontend\LegalInformation;

class LegalInformation
{
    /**
     *  The unique identifier of the plenty client
     * @var integer
     */
    public $plentyId;

    /**
     *  The language of the legal information text
     * @var string
     */
    public $lang;

    /**
     *  The type of the legal information text. The types availabel are:
     *
     * TermsConditions
     * CancellationRights
     * PrivacyPolicy
     * LegalDisclosure
     * WithdrawalForm
     *
     * @var string
     */
    public $type;

    /**
     *  The text value of the legal information text
     * @var string
     */
    public $plainText;

    /**
     *  The html value of the legal information text
     * @var string
     */
    public $htmlText;

}
