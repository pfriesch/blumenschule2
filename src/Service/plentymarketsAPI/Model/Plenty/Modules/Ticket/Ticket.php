<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Ticket;

class Ticket
{
    /**
     *  The ID of the ticket
     * @var integer
     */
    public $id;
    
    /**
     *  The type ID of the ticket
     * @var integer
     */
    public $typeId;
    
    /**
     *  The priority ID of the ticket
     * @var integer
     */
    public $priorityId;
    
    /**
     *  The ID of the parent ticket
     * @var integer
     */
    public $parentTicketId;
    
    /**
     *  The status ID of the ticket
     * @var integer
     */
    public $statusId;
    
    /**
     *  The confidential value. Displays 1 if the ticket is confidential. Displays 0 if the ticket is not confidential.
     * @var array
     */
    public $confidential;
    
    /**
     *  The ID of the contact that is linked with the ticket
     * @var integer
     */
    public $contactId;
    
    /**
     *  The ID of the order linked with the ticket
     * @var integer
     */
    public $orderId;
    
    /**
     *  The time the ticket was created as unix timestamp or carbon object
     * @var string
     */
    public $createdAt;
    
    /**
     *  The time the ticket was last updated as unix timestamp or carbon object
     * @var string
     */
    public $updatedAt;
    
    /**
     *  The time the contact was last updated
     * @var string
     */
    public $contactLastUpdateAt;
    
    /**
     *  The date of the ticket deadline
     * @var string
     */
    public $deadlineAt;
    
    /**
     *  The date the ticket is solved and displays 100 percent in the progress bar
     * @var string
     */
    public $finishedAt;
    
    /**
     *  The title of the ticket
     * @var string
     */
    public $title;
    
    /**
     *  The progress of the ticket in percent
     * @var integer
     */
    public $progress;
    
    /**
     *  The ID of the client (store)
     * @var integer
     */
    public $plentyId;
    
    /**
     *  The source of the ticket. Possible values are 'frontend', 'backend', 'ebay' and 'email'.
     * @var array
     */
    public $source;
    
    /**
     *  The number of documents that are attached to the ticket
     * @var integer
     */
    public $documentsCount;
    
    /**
     *  Displays 1 if the ticket has one or more documents. Displays 0 if the ticket has no document.
     * @var integer
     */
    public $hasDocuments;
    
    /**
     *  The number of child tickets
     * @var integer
     */
    public $childrenCount;
    
    /**
     *  The date the ticket should be resubmitted
     * @var string
     */
    public $resubmissionAt;
    
    /**
     *  The ParseData from the ticket
     * @var string
     */
    public $parseData;
    
}
