<?php

namespace Pyramid\Api\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetAllStampResponse implements ResultInterface
{

    /**
     * @var string
     */
    protected $Id = null;

    /**
     * @var string
     */
    protected $Sign = null;

    /**
     * @var string
     */
    protected $Namn = null;

    /**
     * @var string
     */
    protected $Personnummer = null;

    /**
     * @var string
     */
    protected $DatumIn = null;

    /**
     * @var string
     */
    protected $DatumUt = null;

    /**
     * @var string
     */
    protected $TidIn = null;

    /**
     * @var string
     */
    protected $TidUt = null;

    /**
     * @var string
     */
    protected $Order = null;

    /**
     * @var string
     */
    protected $Leveransadress1 = null;

    /**
     * @var string
     */
    protected $Leveransadress2 = null;

    /**
     * @var string
     */
    protected $Leveransadress3 = null;

    /**
     * @var string
     */
    protected $Leveransadress4 = null;

    /**
     * @var string
     */
    protected $Leveransadress5 = null;

    /**
     * @var string
     */
    protected $Leveransadress6 = null;

    /**
     * @var string
     */
    protected $Kommentar = null;

    /**
     * @var string
     */
    protected $Meddelande = null;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param string $Id
     * @return $this
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return string
     */
    public function getSign()
    {
        return $this->Sign;
    }

    /**
     * @param string $Sign
     * @return $this
     */
    public function setSign($Sign)
    {
        $this->Sign = $Sign;
        return $this;
    }

    /**
     * @return string
     */
    public function getNamn()
    {
        return $this->Namn;
    }

    /**
     * @param string $Namn
     * @return $this
     */
    public function setNamn($Namn)
    {
        $this->Namn = $Namn;
        return $this;
    }

    /**
     * @return string
     */
    public function getPersonnummer()
    {
        return $this->Personnummer;
    }

    /**
     * @param string $Personnummer
     * @return $this
     */
    public function setPersonnummer($Personnummer)
    {
        $this->Personnummer = $Personnummer;
        return $this;
    }

    /**
     * @return string
     */
    public function getDatumIn()
    {
        return $this->DatumIn;
    }

    /**
     * @param string $DatumIn
     * @return $this
     */
    public function setDatumIn($DatumIn)
    {
        $this->DatumIn = $DatumIn;
        return $this;
    }

    /**
     * @return string
     */
    public function getDatumUt()
    {
        return $this->DatumUt;
    }

    /**
     * @param string $DatumUt
     * @return $this
     */
    public function setDatumUt($DatumUt)
    {
        $this->DatumUt = $DatumUt;
        return $this;
    }

    /**
     * @return string
     */
    public function getTidIn()
    {
        return $this->TidIn;
    }

    /**
     * @param string $TidIn
     * @return $this
     */
    public function setTidIn($TidIn)
    {
        $this->TidIn = $TidIn;
        return $this;
    }

    /**
     * @return string
     */
    public function getTidUt()
    {
        return $this->TidUt;
    }

    /**
     * @param string $TidUt
     * @return $this
     */
    public function setTidUt($TidUt)
    {
        $this->TidUt = $TidUt;
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
    public function getLeveransadress1()
    {
        return $this->Leveransadress1;
    }

    /**
     * @param string $Leveransadress1
     * @return $this
     */
    public function setLeveransadress1($Leveransadress1)
    {
        $this->Leveransadress1 = $Leveransadress1;
        return $this;
    }

    /**
     * @return string
     */
    public function getLeveransadress2()
    {
        return $this->Leveransadress2;
    }

    /**
     * @param string $Leveransadress2
     * @return $this
     */
    public function setLeveransadress2($Leveransadress2)
    {
        $this->Leveransadress2 = $Leveransadress2;
        return $this;
    }

    /**
     * @return string
     */
    public function getLeveransadress3()
    {
        return $this->Leveransadress3;
    }

    /**
     * @param string $Leveransadress3
     * @return $this
     */
    public function setLeveransadress3($Leveransadress3)
    {
        $this->Leveransadress3 = $Leveransadress3;
        return $this;
    }

    /**
     * @return string
     */
    public function getLeveransadress4()
    {
        return $this->Leveransadress4;
    }

    /**
     * @param string $Leveransadress4
     * @return $this
     */
    public function setLeveransadress4($Leveransadress4)
    {
        $this->Leveransadress4 = $Leveransadress4;
        return $this;
    }

    /**
     * @return string
     */
    public function getLeveransadress5()
    {
        return $this->Leveransadress5;
    }

    /**
     * @param string $Leveransadress5
     * @return $this
     */
    public function setLeveransadress5($Leveransadress5)
    {
        $this->Leveransadress5 = $Leveransadress5;
        return $this;
    }

    /**
     * @return string
     */
    public function getLeveransadress6()
    {
        return $this->Leveransadress6;
    }

    /**
     * @param string $Leveransadress6
     * @return $this
     */
    public function setLeveransadress6($Leveransadress6)
    {
        $this->Leveransadress6 = $Leveransadress6;
        return $this;
    }

    /**
     * @return string
     */
    public function getKommentar()
    {
        return $this->Kommentar;
    }

    /**
     * @param string $Kommentar
     * @return $this
     */
    public function setKommentar($Kommentar)
    {
        $this->Kommentar = $Kommentar;
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

