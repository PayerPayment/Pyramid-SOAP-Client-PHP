<?php

namespace Pyramid\Api\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ElineRegisterSupportComplaintRequest implements RequestInterface
{

    /**
     * @var string
     */
    protected $ContactNo = null;

    /**
     * @var string
     */
    protected $GuestCode = null;

    /**
     * @var string
     */
    protected $Language = null;

    /**
     * @var string
     */
    protected $Business = null;

    /**
     * @var string
     */
    protected $Product = null;

    /**
     * @var string
     */
    protected $Text = null;

    /**
     * @var bool
     */
    protected $LoggedIn = null;

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
    public function getGuestCode()
    {
        return $this->GuestCode;
    }

    /**
     * @param string $GuestCode
     * @return $this
     */
    public function setGuestCode($GuestCode)
    {
        $this->GuestCode = $GuestCode;
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
    public function getBusiness()
    {
        return $this->Business;
    }

    /**
     * @param string $Business
     * @return $this
     */
    public function setBusiness($Business)
    {
        $this->Business = $Business;
        return $this;
    }

    /**
     * @return string
     */
    public function getProduct()
    {
        return $this->Product;
    }

    /**
     * @param string $Product
     * @return $this
     */
    public function setProduct($Product)
    {
        $this->Product = $Product;
        return $this;
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->Text;
    }

    /**
     * @param string $Text
     * @return $this
     */
    public function setText($Text)
    {
        $this->Text = $Text;
        return $this;
    }

    /**
     * @return bool
     */
    public function getLoggedIn()
    {
        return $this->LoggedIn;
    }

    /**
     * @param bool $LoggedIn
     * @return $this
     */
    public function setLoggedIn($LoggedIn)
    {
        $this->LoggedIn = $LoggedIn;
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

