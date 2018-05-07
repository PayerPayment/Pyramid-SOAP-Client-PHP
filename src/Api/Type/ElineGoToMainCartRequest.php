<?php

namespace Pyramid\Api\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ElineGoToMainCartRequest implements RequestInterface
{

    /**
     * @var string
     */
    protected $ContactNo = null;

    /**
     * @var string
     */
    protected $Language = null;

    /**
     * @var string
     */
    protected $Currency = null;

    /**
     * @var string
     */
    protected $Country = null;

    /**
     * @var string
     */
    protected $Module = null;

    /**
     * @var string
     */
    protected $OrderAmount = null;

    /**
     * @var string
     */
    protected $OrderAmountVat = null;

    /**
     * @var string
     */
    protected $OrderWeight = null;

    /**
     * @var string
     */
    protected $StatusCreditCheck = null;

    /**
     * @var string
     */
    protected $CampaignCode = null;

    /**
     * @var Data
     */
    protected $Data = null;

    /**
     * @var string
     */
    protected $Arg = null;

    /**
     * @return string
     */
    public function getContactNo()
    {
        return $this->ContactNo;
    }

    /**
     * @param string $ContactNo
     * @return $this
     */
    public function setContactNo($ContactNo)
    {
        $this->ContactNo = $ContactNo;
        return $this;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
        return $this->Language;
    }

    /**
     * @param string $Language
     * @return $this
     */
    public function setLanguage($Language)
    {
        $this->Language = $Language;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->Currency;
    }

    /**
     * @param string $Currency
     * @return $this
     */
    public function setCurrency($Currency)
    {
        $this->Currency = $Currency;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->Country;
    }

    /**
     * @param string $Country
     * @return $this
     */
    public function setCountry($Country)
    {
        $this->Country = $Country;
        return $this;
    }

    /**
     * @return string
     */
    public function getModule()
    {
        return $this->Module;
    }

    /**
     * @param string $Module
     * @return $this
     */
    public function setModule($Module)
    {
        $this->Module = $Module;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrderAmount()
    {
        return $this->OrderAmount;
    }

    /**
     * @param string $OrderAmount
     * @return $this
     */
    public function setOrderAmount($OrderAmount)
    {
        $this->OrderAmount = $OrderAmount;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrderAmountVat()
    {
        return $this->OrderAmountVat;
    }

    /**
     * @param string $OrderAmountVat
     * @return $this
     */
    public function setOrderAmountVat($OrderAmountVat)
    {
        $this->OrderAmountVat = $OrderAmountVat;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrderWeight()
    {
        return $this->OrderWeight;
    }

    /**
     * @param string $OrderWeight
     * @return $this
     */
    public function setOrderWeight($OrderWeight)
    {
        $this->OrderWeight = $OrderWeight;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatusCreditCheck()
    {
        return $this->StatusCreditCheck;
    }

    /**
     * @param string $StatusCreditCheck
     * @return $this
     */
    public function setStatusCreditCheck($StatusCreditCheck)
    {
        $this->StatusCreditCheck = $StatusCreditCheck;
        return $this;
    }

    /**
     * @return string
     */
    public function getCampaignCode()
    {
        return $this->CampaignCode;
    }

    /**
     * @param string $CampaignCode
     * @return $this
     */
    public function setCampaignCode($CampaignCode)
    {
        $this->CampaignCode = $CampaignCode;
        return $this;
    }

    /**
     * @return Data
     */
    public function getData()
    {
        return $this->Data;
    }

    /**
     * @param Data $Data
     * @return $this
     */
    public function setData($Data)
    {
        $this->Data = $Data;
        return $this;
    }

    /**
     * @return string
     */
    public function getArg()
    {
        return $this->Arg;
    }

    /**
     * @param string $Arg
     * @return $this
     */
    public function setArg($Arg)
    {
        $this->Arg = $Arg;
        return $this;
    }


}

