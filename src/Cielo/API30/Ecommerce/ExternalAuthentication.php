<?php

namespace Cielo\API30\Ecommerce;

/**
 * Class Customer
 *
 * @package Cielo\API30\Ecommerce
 */
class ExternalAuthentication implements \JsonSerializable
{

    private $Cavv;
    private $Xid;
    private $Eci;
    private $Version;
    private $ReferenceId;

    /**
     * @param $Cavv
     * @param $Xid
     * @param $Eci
     * @param $Version
     * @param $ReferenceId
     */
    public function __construct($Cavv=null, $Xid=null, $Eci=null, $Version=null, $ReferenceId=null)
    {
        $this->Cavv = $Cavv;
        $this->Xid = $Xid;
        $this->Eci = $Eci;
        $this->Version = $Version;
        $this->ReferenceId = $ReferenceId;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return get_object_vars($this);
    }

    /**
     * @return mixed|null
     */
    public function getCavv()
    {
        return $this->Cavv;
    }

    /**
     * @param mixed|null $Cavv
     */
    public function setCavv($Cavv)
    {
        $this->Cavv = $Cavv;

        return $this;
    }

    /**
     * @return mixed|null
     */
    public function getXid()
    {
        return $this->Xid;
    }

    /**
     * @param mixed|null $Xid
     */
    public function setXid($Xid)
    {
        $this->Xid = $Xid;

        return $this;
    }

    /**
     * @return mixed|null
     */
    public function getEci()
    {
        return $this->Eci;
    }

    /**
     * @param mixed|null $Eci
     */
    public function setEci($Eci)
    {
        $this->Eci = $Eci;

        return $this;
    }

    /**
     * @return mixed|null
     */
    public function getVersion()
    {
        return $this->Version;
    }

    /**
     * @param mixed|null $Version
     */
    public function setVersion($Version)
    {
        $this->Version = $Version;

        return $this;
    }

    /**
     * @return mixed|null
     */
    public function getReferenceId()
    {
        return $this->ReferenceId;
    }

    /**
     * @param mixed|null $ReferenceId
     */
    public function setReferenceId($ReferenceId)
    {
        $this->ReferenceId = $ReferenceId;

        return $this;
    }




}
