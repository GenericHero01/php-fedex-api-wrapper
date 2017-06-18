<?php
namespace FedEx\LocatorService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The descriptive data regarding the results of the submitted transaction.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Locator Service
 *
 * @property \FedEx\LocatorService\SimpleType\NotificationSeverityType|string $Severity
 * @property string $Source
 * @property string $Code
 * @property string $Message
 * @property string $LocalizedMessage
 * @property NotificationParameter[] $MessageParameters

 */
class Notification extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'Notification';

    /**
     * Identifies the severity of the Notification item. See NotificationSeverityType for list of returned values.
     *
     * @param \FedEx\LocatorService\SimpleType\NotificationSeverityType|string $severity
     * @return $this
     */
    public function setSeverity($severity)
    {
        $this->values['Severity'] = $severity;
        return $this;
    }

    /**
     * Identifies the source - what FedEx system, sub-system, or component generated the Notification item.
     *
     * @param string $source
     * @return $this
     */
    public function setSource($source)
    {
        $this->values['Source'] = $source;
        return $this;
    }

    /**
     * Identifies the error code generated by the FedEx system, sub-system or component.
     *
     * @param string $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->values['Code'] = $code;
        return $this;
    }

    /**
     * Identifies the error message text.
     *
     * @param string $message
     * @return $this
     */
    public function setMessage($message)
    {
        $this->values['Message'] = $message;
        return $this;
    }

    /**
     * Identifies the error message text in the localization requested. Currently not supported.
     *
     * @param string $localizedMessage
     * @return $this
     */
    public function setLocalizedMessage($localizedMessage)
    {
        $this->values['LocalizedMessage'] = $localizedMessage;
        return $this;
    }

    /**
     * Used internally by FedEx systems for message translation.
     *
     * @param NotificationParameter[] $messageParameters
     * @return $this
     */
    public function setMessageParameters(array $messageParameters)
    {
        $this->values['MessageParameters'] = $messageParameters;
        return $this;
    }
}
