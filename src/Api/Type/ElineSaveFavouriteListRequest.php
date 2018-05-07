<?php

namespace Pyramid\Api\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ElineSaveFavouriteListRequest implements RequestInterface
{

    /**
     * @var string
     */
    protected $ContactNo = null;

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
    protected $ListNo = null;

    /**
     * @var string
     */
    protected $ListName = null;

    /**
     * @var bool
     */
    protected $SaveCart = null;

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
    public function getListNo()
    {
        return $this->ListNo;
    }

    /**
     * @param string $ListNo
     * @return $this
     */
    public function setListNo($ListNo)
    {
        $this->ListNo = $ListNo;
        return $this;
    }

    /**
     * @return string
     */
    public function getListName()
    {
        return $this->ListName;
    }

    /**
     * @param string $ListName
     * @return $this
     */
    public function setListName($ListName)
    {
        $this->ListName = $ListName;
        return $this;
    }

    /**
     * @return bool
     */
    public function getSaveCart()
    {
        return $this->SaveCart;
    }

    /**
     * @param bool $SaveCart
     * @return $this
     */
    public function setSaveCart($SaveCart)
    {
        $this->SaveCart = $SaveCart;
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

