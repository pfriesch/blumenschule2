<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Document;

class Document
{
    /**
     *  The ID of the document
     * @var integer
     */
    public $id;

    /**
     *  The type of the document. The following types are available:
     *
     *     admin
     *     blog
     *  category
     *  correction_document
     *  credit_note
     *     credit_note_external
     *        customer
     *  delivery_note
     *     dunning_letter
     *        ebics_hash
     *     facet
     *     invoice
     *     invoice_external
     *                                pos_invoice
     *                                pos_invoice_cancellation
     *  item
     *  multi_credit_note
     *     multi_invoice
     *        offer
     *     order_confirmation
     *        pickup_delivery
     *     receipt
     *                                refund_reversal
     *     reorder
     *     repair_bill
     *     return_note
     *        reversal_document
     *        settlement_report
     *     success_confirmation
     *     ticket
     *     webshop
     *   webshop_customer
     *     z_report
     *     shipping_label
     *     shipping_export_label
     *     returns_label
     *
     * @var string
     */
    public $type;

    /**
     *  The document number
     * @var integer
     */
    public $number;

    /**
     *  The document number with prefix
     * @var string
     */
    public $numberWithPrefix;

    /**
     *  The path to the document
     * @var string
     */
    public $path;

    /**
     *  The ID of the user
     * @var integer
     */
    public $userId;

    /**
     *  The source where the document was generated. Possible sources are 'klarna', 'soap', 'admin', 'hitmeister', 'paypal' and 'rest'.
     * @var string
     */
    public $source;

    /**
     *  The date displayed on the document
     * @var string
     */
    public $displayDate;

    /**
     *  The base64 encodedcontent of the document.
     * @var string
     */
    public $content;

}
