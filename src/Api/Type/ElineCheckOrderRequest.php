<?php

namespace Pyramid\Api\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ElineCheckOrderRequest implements RequestInterface
{

    /**
     * @var string
     */
    protected $ContactNo = null;

    /**
     * @var bool
     */
    protected $Invoice = null;

    /**
     * @var bool
     */
    protected $CSCheck = null;

    /**
     * @var string
     */
    protected $OrgNo = null;

    /**
     * @var string
     */
    protected $OrderAmount = null;

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
    protected $Delivery = null;

    /**
     * @var string
     */
    protected $Payment = null;

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
     * @return bool
     */
    public function getInvoice()
    {
        return $this->Invoice;
    }

    /**
     * @param bool $Invoice
     * @return $this
     */
    public function setInvoice($Invoice)
    {
        $this->Invoice = $Invoice;
        return $this;
    }

    /**
     * @return bool
     */
    public function getCSCheck()
    {
        return $this->CSCheck;
    }

    /**
     * @param bool $CSCheck
     * @return $this
     */
    public function setCSCheck($CSCheck)
    {
        $this->CSCheck = $CSCheck;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrgNo()
    {
        return $this->OrgNo;
    }

    /**
     * @param string $OrgNo
     * @return $this
     */
    public function setOrgNo($OrgNo)
    {
        $this->OrgNo = $OrgNo;
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
    public function getDelivery()
    {
        return $this->Delivery;
    }

    /**
     * @param string $Delivery
     * @return $this
     */
    public function setDelivery($Delivery)
    {
        $this->Delivery = $Delivery;
        return $this;
    }

    /**
     * @return string
     */
    public function getPayment()
    {
        return $this->Payment;
    }

    /**
     * @param string $Payment
     * @return $this
     */
    public function setPayment($Payment)
    {
        $this->Payment = $Payment;
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

