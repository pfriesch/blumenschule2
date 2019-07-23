<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Account\Contact\ContactEvent;

class ContactEvent
{
    /**
     *  The ID of the event
     * @var integer
     */
    public $eventId;
    
    /**
     *  The ID of the contact this event belongs to
     * @var integer
     */
    public $contactId;
    
    /**
     *  The ID of the user this event belongs to
     * @var integer
     */
    public $userId;
    
    /**
     *  The duration of the event in seconds
     * @var integer
     */
    public $eventDuration;
    
    /**
     *  The type of the event. Possible values are call, ticket, email, meeting, webinar, development and design.
     * @var string
     */
    public $eventType;
    
    /**
     *  
     * @var integer
     */
    public $orderRowId;
    
    /**
     *  Informational text about the event
     * @var string
     */
    public $eventInfo;
    
    /**
     *  Billable if set to 1
     * @var boolean
     */
    public $billable;
    
    /**
     *  The date the event was created at as unix timestamp
     * @var string
     */
    public $eventInsertedAt;
    
    /**
     *  The date the event was billed at as unix timestamp
     * @var string
     */
    public $eventBilledAt;
    
    /**
     *  The date the provision was paid at as unix timestamp
     * @var string
     */
    public $eventProvisionPaidAt;
    
    /**
     *  The credit value of the event
     * @var float
     */
    public $eventCreditValue;
    
}
