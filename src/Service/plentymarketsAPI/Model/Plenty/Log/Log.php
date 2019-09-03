<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Log;

class Log
{
    /**
     *  The ID of the log entry
     * @var string
     */
    public $id;

    /**
     *  The date when the log entry was created
     * @var string
     */
    public $createdAt;

    /**
     *  The integration key used for the log entry. Used as a first level allocation.
     * @var string
     */
    public $integration;

    /**
     *  The identifier used for the log entry. Used as a second level allocation.
     * @var string
     */
    public $identifier;

    /**
     *  The code for this current log entry. For log entries with level "debug", "info", "notice", "warning" and "report" this needs to have an translation in order to be stored.
     * @var string
     */
    public $code;

    /**
     *  Deprecated field, see the <code>references</code> field instead.
     * @var string
     */
    public $referenceType;

    /**
     *  Deprecated field, see the <code>references</code> field instead.
     * @var string
     */
    public $referenceValue;

    /**
     *  The level this current log entry belongs to. Notice! When storing log entries with level "report" the entries will actually be stored as level "info". The difference between "report" and "info" is that log entries with level "report" do not need prior activation.
     * @var string
     */
    public $level;

    /**
     *  Additional information that need to also be stored. Can be an int, string or object.
     * @var string
     */
    public $additionalInfo;

    /**
     *
     * @var string
     */
    public $callerFunction;

    /**
     *
     * @var integer
     */
    public $callerLine;

    /**
     *  All the reference types and values correlated with this log entry.
     * @var array
     */
    public $references;

}
