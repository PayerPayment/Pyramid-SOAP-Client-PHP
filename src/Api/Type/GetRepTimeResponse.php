<?php

namespace Pyramid\Api\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetRepTimeResponse implements ResultInterface
{

    /**
     * @var string
     */
    protected $Datum = null;

    /**
     * @var string
     */
    protected $Antal = null;

    /**
     * @var string
     */
    protected $Artkod = null;

    /**
     * @var string
     */
    protected $Order = null;

    /**
     * @var string
     */
    protected $Orderrad = null;

    /**
     * @var string
     */
    protected $Debiterbar = null;

    /**
     * @var string
     */
    protected $Meddelande = null;

    /**
     * @return string
     */
    public function getDatum()
    {
        return $this->Datum;
    }

    /**
     * @param string $Datum
     * @return $this
     */
    public function setDatum($Datum)
    {
        $this->Datum = $Datum;
        return $this;
    }

    /**
     * @return string
     */
    public function getAntal()
    {
        return $this->Antal;
    }

    /**
     * @param string $Antal
     * @return $this
     */
    public function setAntal($Antal)
    {
        $this->Antal = $Antal;
        return $this;
    }

    /**
     * @return string
     */
    public function getArtkod()
    {
        return $this->Artkod;
    }

    /**
     * @param string $Artkod
     * @return $this
     */
    public function setArtkod($Artkod)
    {
        $this->Artkod = $Artkod;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrder()
    {
        return $this->Order;
    }

    /**
     * @param string $Order
     * @return $this
     */
    public function setOrder($Order)
    {
        $this->Order = $Order;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrderrad()
    {
        return $this->Orderrad;
    }

    /**
     * @param string $Orderrad
     * @return $this
     */
    public function setOrderrad($Orderrad)
    {
        $this->Orderrad = $Orderrad;
        return $this;
    }

    /**
     * @return string
     */
    public function getDebiterbar()
    {
        return $this->Debiterbar;
    }

    /**
     * @param string $Debiterbar
     * @return $this
     */
    public function setDebiterbar($Debiterbar)
    {
        $this->Debiterbar = $Debiterbar;
        return $this;
    }

    /**
     * @return string
     */
    public function getMeddelande()
    {
        return $this->Meddelande;
    }

    /**
     * @param string $Meddelande
     * @return $this
     */
    public function setMeddelande($Meddelande)
    {
        $this->Meddelande = $Meddelande;
        return $this;
    }


}

