<?php

namespace Pyramid\Api\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetOrdersResponse implements ResultInterface
{

    /**
     * @var string
     */
    protected $Ordernummer = null;

    /**
     * @var string
     */
    protected $Projektnamn = null;

    /**
     * @var string
     */
    protected $Foretagskod = null;

    /**
     * @var string
     */
    protected $Foretagsnamn = null;

    /**
     * @var string
     */
    protected $Projektdatum = null;

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
    protected $Referens = null;

    /**
     * @var string
     */
    protected $Referens_epost = null;

    /**
     * @var string
     */
    protected $Referens_telefon = null;

    /**
     * @var string
     */
    protected $Projekttyp = null;

    /**
     * @var string
     */
    protected $Status = null;

    /**
     * @var string
     */
    protected $Budgetbelopp = null;

    /**
     * @var string
     */
    protected $Ordertext = null;

    /**
     * @var string
     */
    protected $Meddelande = null;

    /**
     * @var string
     */
    protected $Utlevinfo = null;

    /**
     * @return string
     */
    public function getOrdernummer()
    {
        return $this->Ordernummer;
    }

    /**
     * @param string $Ordernummer
     * @return $this
     */
    public function setOrdernummer($Ordernummer)
    {
        $this->Ordernummer = $Ordernummer;
        return $this;
    }

    /**
     * @return string
     */
    public function getProjektnamn()
    {
        return $this->Projektnamn;
    }

    /**
     * @param string $Projektnamn
     * @return $this
     */
    public function setProjektnamn($Projektnamn)
    {
        $this->Projektnamn = $Projektnamn;
        return $this;
    }

    /**
     * @return string
     */
    public function getForetagskod()
    {
        return $this->Foretagskod;
    }

    /**
     * @param string $Foretagskod
     * @return $this
     */
    public function setForetagskod($Foretagskod)
    {
        $this->Foretagskod = $Foretagskod;
        return $this;
    }

    /**
     * @return string
     */
    public function getForetagsnamn()
    {
        return $this->Foretagsnamn;
    }

    /**
     * @param string $Foretagsnamn
     * @return $this
     */
    public function setForetagsnamn($Foretagsnamn)
    {
        $this->Foretagsnamn = $Foretagsnamn;
        return $this;
    }

    /**
     * @return string
     */
    public function getProjektdatum()
    {
        return $this->Projektdatum;
    }

    /**
     * @param string $Projektdatum
     * @return $this
     */
    public function setProjektdatum($Projektdatum)
    {
        $this->Projektdatum = $Projektdatum;
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
    public function getReferens()
    {
        return $this->Referens;
    }

    /**
     * @param string $Referens
     * @return $this
     */
    public function setReferens($Referens)
    {
        $this->Referens = $Referens;
        return $this;
    }

    /**
     * @return string
     */
    public function getReferens_epost()
    {
        return $this->Referens_epost;
    }

    /**
     * @param string $Referens_epost
     * @return $this
     */
    public function setReferens_epost($Referens_epost)
    {
        $this->Referens_epost = $Referens_epost;
        return $this;
    }

    /**
     * @return string
     */
    public function getReferens_telefon()
    {
        return $this->Referens_telefon;
    }

    /**
     * @param string $Referens_telefon
     * @return $this
     */
    public function setReferens_telefon($Referens_telefon)
    {
        $this->Referens_telefon = $Referens_telefon;
        return $this;
    }

    /**
     * @return string
     */
    public function getProjekttyp()
    {
        return $this->Projekttyp;
    }

    /**
     * @param string $Projekttyp
     * @return $this
     */
    public function setProjekttyp($Projekttyp)
    {
        $this->Projekttyp = $Projekttyp;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param string $Status
     * @return $this
     */
    public function setStatus($Status)
    {
        $this->Status = $Status;
        return $this;
    }

    /**
     * @return string
     */
    public function getBudgetbelopp()
    {
        return $this->Budgetbelopp;
    }

    /**
     * @param string $Budgetbelopp
     * @return $this
     */
    public function setBudgetbelopp($Budgetbelopp)
    {
        $this->Budgetbelopp = $Budgetbelopp;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrdertext()
    {
        return $this->Ordertext;
    }

    /**
     * @param string $Ordertext
     * @return $this
     */
    public function setOrdertext($Ordertext)
    {
        $this->Ordertext = $Ordertext;
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

    /**
     * @return string
     */
    public function getUtlevinfo()
    {
        return $this->Utlevinfo;
    }

    /**
     * @param string $Utlevinfo
     * @return $this
     */
    public function setUtlevinfo($Utlevinfo)
    {
        $this->Utlevinfo = $Utlevinfo;
        return $this;
    }


}

