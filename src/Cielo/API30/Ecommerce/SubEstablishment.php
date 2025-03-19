<?php

namespace Cielo\API30\Ecommerce;

/**
 * Class Customer
 *
 * @package Cielo\API30\Ecommerce
 */
class SubEstablishment implements \JsonSerializable
{

    private $EstablishmentCode;
    private $Identity;
    private $CompanyName;
    private $Mcc;
    private $Address;
    private $City;
    private $State;
    private $CountryCode;
    private $PostalCode;
    private $PhoneNumber;


    public function __construct($establishment_code = null)
    {
        $this->setEstablishmentCode($establishment_code);
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

    /**
     * @return mixed
     */
    public function getIdentity()
    {
        return $this->Identity;
    }

    /**
     * @param mixed $Identity
     */
    public function setIdentity($Identity)
    {
        $this->Identity = $Identity;
    }

    /**
     * @return mixed
     */
    public function getMcc()
    {
        return $this->Mcc;
    }

    /**
     * @param mixed $Mcc
     */
    public function setMcc($Mcc)
    {
        $this->Mcc = $Mcc;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->Address;
    }

    /**
     * @param mixed $Address
     */
    public function setAddress($Address)
    {
        $this->Address = $Address;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->City;
    }

    /**
     * @param mixed $City
     */
    public function setCity($City)
    {
        $this->City = $City;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->State;
    }

    /**
     * @param mixed $State
     */
    public function setState($State)
    {
        $this->State = $State;
    }

    /**
     * @return mixed
     */
    public function getCountryCode()
    {
        return $this->CountryCode;
    }

    /**
     * @param mixed $CountryCode
     */
    public function setCountryCode($CountryCode)
    {
        $this->CountryCode = $CountryCode;
    }

    /**
     * @return mixed
     */
    public function getPostalCode()
    {
        return $this->PostalCode;
    }

    /**
     * @param mixed $PostalCode
     */
    public function setPostalCode($PostalCode)
    {
        $this->PostalCode = $PostalCode;
    }

    /**
     * @return mixed
     */
    public function getPhoneNumber()
    {
        return $this->PhoneNumber;
    }

    /**
     * @param mixed $PhoneNumber
     */
    public function setPhoneNumber($PhoneNumber)
    {
        $this->PhoneNumber = $PhoneNumber;
    }

    /**
     * @return mixed
     */
    public function getCompanyName()
    {
        return $this->CompanyName;
    }

    /**
     * @param mixed $CompanyName
     */
    public function setCompanyName($CompanyName)
    {
        $this->CompanyName = $CompanyName;
    }

}
