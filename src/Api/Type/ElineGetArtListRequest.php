<?php

namespace Pyramid\Api\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ElineGetArtListRequest implements RequestInterface
{

    /**
     * @var string
     */
    protected $Code = null;

    /**
     * @var string
     */
    protected $Type = null;

    /**
     * @var string
     */
    protected $View = null;

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
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * @param string $Code
     * @return $this
     */
    public function setCode($Code)
    {
        $this->Code = $Code;
        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * @param string $Type
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
    public function getView()
    {
        return $this->View;
    }

    /**
     * @param string $View
     * @return $this
     */
    public function setView($View)
    {
        $this->View = $View;
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

