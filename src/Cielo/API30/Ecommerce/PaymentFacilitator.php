<?php

namespace Cielo\API30\Ecommerce;

/**
 * Class Customer
 *
 * @package Cielo\API30\Ecommerce
 */
class PaymentFacilitator implements \JsonSerializable
{

    private $establishment_code;

    private $sub_establishment;

    public function __construct($establishment_code = null, $sub_establishment = null)
    {
        $this->setEstablishmentCode($establishment_code);
        $this->setSubEstablishment($sub_establishment);

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
        return $this->establishment_code;
    }

    public function setEstablishmentCode($establishment_code)
    {
        $this->establishment_code = $establishment_code;

        return $this;
    }

    public function getSubEstablishment()
    {
        return $this->sub_establishment;
    }

    public function setSubEstablishment($sub_establishment)
    {
        $this->sub_establishment = $sub_establishment;

        return $this;
    }


}
