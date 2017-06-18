<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Descriptive data regarding an express freight service pickup request.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 *
 * @property \FedEx\PickupService\SimpleType\ServiceType|string $Service
 * @property string $BookingNumber
 * @property Dimensions $Dimensions
 * @property \FedEx\PickupService\SimpleType\TruckType|string $TruckType
 * @property \FedEx\PickupService\SimpleType\TrailerSizeType|string $TrailerSize

 */
class ExpressFreightPickupDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ExpressFreightPickupDetail';

    /**
     * Identifies the collection of available FedEx transportation service options. Must be a valid FedEx freight service identifier.
     *
     * @param \FedEx\PickupService\SimpleType\ServiceType|string $service
     * @return $this
     */
    public function setService($service)
    {
        $this->values['Service'] = $service;
        return $this;
    }

    /**
     * Identifies the FedEx freight booking number. This element should contain numeric values only.
     *
     * @param string $bookingNumber
     * @return $this
     */
    public function setBookingNumber($bookingNumber)
    {
        $this->values['BookingNumber'] = $bookingNumber;
        return $this;
    }

    /**
     * Descriptive data detailing the length, width, and height of the freight package or shipment being picked up by FedEx.
     *
     * @param Dimensions $dimensions
     * @return $this
     */
    public function setDimensions(Dimensions $dimensions)
    {
        $this->values['Dimensions'] = $dimensions;
        return $this;
    }

    /**
     * Identifies the type of truck that is needed for FedEx to pick up the freight shipment. See TruckType for valid values.
     *
     * @param \FedEx\PickupService\SimpleType\TruckType|string $truckType
     * @return $this
     */
    public function setTruckType($truckType)
    {
        $this->values['TruckType'] = $truckType;
        return $this;
    }

    /**
     * Identifies the tailer size needed for FedEx to pick up a freight shipment. See TrailerSizeType for valid values.
     *
     * @param \FedEx\PickupService\SimpleType\TrailerSizeType|string $trailerSize
     * @return $this
     */
    public function setTrailerSize($trailerSize)
    {
        $this->values['TrailerSize'] = $trailerSize;
        return $this;
    }
}
