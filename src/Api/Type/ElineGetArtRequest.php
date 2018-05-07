<?php

namespace Pyramid\Api\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ElineGetArtRequest implements RequestInterface
{

    /**
     * @var string
     */
    protected $ArtCode = null;

    /**
     * @var bool
     */
    protected $Type = null;

    /**
     * @var string
     */
    protected $Dim1 = null;

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
    protected $Currency = null;

    /**
     * @var string
     */
    protected $Country = null;

    /**
     * @var string
     */
    protected $CampaignCode = null;

    /**
     * @var string
     */
    protected $Module = null;

    /**
     * @var string
     */
    protected $DnrList = null;

    /**
     * @var string
     */
    protected $Arg = null;

    /**
     * @return string
     */
    public function getArtCode()
    {
        return $this->ArtCode;
    }

    /**
     * @param string $ArtCode
     * @return $this
     */
    public function setArtCode($ArtCode)
    {
        $this->ArtCode = $ArtCode;
        return $this;
    }

    /**
     * @return bool
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * @param bool $Type
     * @return $this
     */
    public function setType($Type)
    {
        $this->Type = $Type;
        return $this;
    }

    /**
     * @return string
     */
    public function getDim1()
    {
        return $this->Dim1;
    }

    /**
     * @param string $Dim1
     * @return $this
     */
    public function setDim1($Dim1)
    {
        $this->Dim1 = $Dim1;
        return $this;
    }

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
    public function getDnrList()
    {
        return $this->DnrList;
    }

    /**
     * @param string $DnrList
     * @return $this
     */
    public function setDnrList($DnrList)
    {
        $this->DnrList = $DnrList;
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

