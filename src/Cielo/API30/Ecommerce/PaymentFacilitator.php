<?php

namespace Cielo\API30\Ecommerce;

/**
 * Class Customer
 *
 * @package Cielo\API30\Ecommerce
 */
class PaymentFacilitator implements \JsonSerializable
{

    private $EstablishmentCode;

    private $SubEstablishment;

    public function __construct($EstablishmentCode = null, $SubEstablishment = null)
    {
        $this->setEstablishmentCode($EstablishmentCode);
        $this->setSubEstablishment($SubEstablishment);

    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return get_object_vars($this);
    }

    public function getEstablishmentCode()
    {
        return $this->EstablishmentCode;
    }

    public function setEstablishmentCode($EstablishmentCode)
    {
        $this->EstablishmentCode = $EstablishmentCode;

        return $this;
    }

    public function getSubEstablishment()
    {
        return $this->SubEstablishment;
    }

    public function setSubEstablishment($SubEstablishment)
    {
        $this->SubEstablishment = $SubEstablishment;

        return $this;
    }


}
