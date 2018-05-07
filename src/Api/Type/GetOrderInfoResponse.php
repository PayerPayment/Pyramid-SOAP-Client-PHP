<?php

namespace Pyramid\Api\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetOrderInfoResponse implements ResultInterface
{

    /**
     * @var string
     */
    protected $Projektnamn = null;

    /**
     * @var string
     */
    protected $Kundkod = null;

    /**
     * @var string
     */
    protected $Kundnamn = null;

    /**
     * @var string
     */
    protected $Utdelningsadress = null;

    /**
     * @var string
     */
    protected $Postadress = null;

    /**
     * @var string
     */
    protected $Telefon = null;

    /**
     * @var string
     */
    protected $Referens = null;

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
    protected $Ordertext = null;

    /**
     * @var string
     */
    protected $Utlevinfo = null;

    /**
     * @var string
     */
    protected $Status = null;

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
    public function getKundkod()
    {
        return $this->Kundkod;
    }

    /**
     * @param string $Kundkod
     * @return $this
     */
    public function setKundkod($Kundkod)
    {
        $this->Kundkod = $Kundkod;
        return $this;
    }

    /**
     * @return string
     */
    public function getKundnamn()
    {
        return $this->Kundnamn;
    }

    /**
     * @param string $Kundnamn
     * @return $this
     */
    public function setKundnamn($Kundnamn)
    {
        $this->Kundnamn = $Kundnamn;
        return $this;
    }

    /**
     * @return string
     */
    public function getUtdelningsadress()
    {
        return $this->Utdelningsadress;
    }

    /**
     * @param string $Utdelningsadress
     * @return $this
     */
    public function setUtdelningsadress($Utdelningsadress)
    {
        $this->Utdelningsadress = $Utdelningsadress;
        return $this;
    }

    /**
     * @return string
     */
    public function getPostadress()
    {
        return $this->Postadress;
    }

    /**
     * @param string $Postadress
     * @return $this
     */
    public function setPostadress($Postadress)
    {
        $this->Postadress = $Postadress;
        return $this;
    }

    /**
     * @return string
     */
    public function getTelefon()
    {
        return $this->Telefon;
    }

    /**
     * @param string $Telefon
     * @return $this
     */
    public function setTelefon($Telefon)
    {
        $this->Telefon = $Telefon;
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


}

