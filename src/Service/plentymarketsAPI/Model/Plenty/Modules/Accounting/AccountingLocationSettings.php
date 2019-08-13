<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Accounting;

class AccountingLocationSettings
{
    /**
     *  The ID of the accounting location
     * @var integer
     */
    public $locationId;

    /**
     *  Is the invoice net for EU?
     * @var boolean
     */
    public $isInvoiceEUNet;

    /**
     *  Is the invoice net for export?
     * @var boolean
     */
    public $isInvoiceExportNet;

    /**
     *  Show the vat for shipping costs on the invoice?
     * @var boolean
     */
    public $showShippingVat;

    /**
     *  Is it a small business?
     * @var boolean
     */
    public $isSmallBusiness;

    /**
     *  The number of decimal places for prices
     * @var integer
     */
    public $numberOfDecimalPlaces;

    /**
     *  Do only round totals?
     * @var boolean
     */
    public $roundTotalsOnly;

}
