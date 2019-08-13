<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Ticket;

class TicketMessage
{
    /**
     *  The ID of the message
     * @var integer
     */
    public $id;

    /**
     *  The ticket ID the message belongs to
     * @var integer
     */
    public $ticketId;

    /**
     *  The user of the message
     * @var integer
     */
    public $userId;

    /**
     *  The time the ticket message was created as unix timestamp or carbon object
     * @var string
     */
    public $createdAt;

    /**
     *  The content of the message
     * @var string
     */
    public $text;

    /**
     *  The type of the message. Two types are availabel:
     *
     * message (visible for the customer)
     * comment (not visible for the customer)
     *
     * @var array
     */
    public $type;

    /**
     *  The origin of the message. The following sources are availabel by default and cannot be deleted.
     *
     * backend
     * frontend
     * ebay
     * email
     *
     * @var array
     */
    public $source;

    /**
     *  The ID of the topic the message is assigned to
     * @var integer
     */
    public $topicId;

}
