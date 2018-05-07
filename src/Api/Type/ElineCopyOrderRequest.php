<?php

namespace Pyramid\Api\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ElineCopyOrderRequest implements RequestInterface
{

    /**
     * @var string
     */
    protected $ContactNo = null;

    /**
     * @var string
     */
    protected $OrderNo = null;

    /**
     * @var string
     */
    protected $Currency = null;

    /**
     * @var string
     */
    protected $Language = null;

    /**
     * @var string
     */
    protected $Country = null;

    /**
     * @var string
     */
    protected $CampaignCode = null;

    /**
     * @var Data
     */
    protected $Data = null;

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
    public function getOrderNo()
    {
        return $this->OrderNo;
    }

    /**
     * @param string $OrderNo
     * @return $this
     */
    public function setOrderNo($OrderNo)
    {
        $this->OrderNo = $OrderNo;
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


}

