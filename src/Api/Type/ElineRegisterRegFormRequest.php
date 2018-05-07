<?php

namespace Pyramid\Api\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ElineRegisterRegFormRequest implements RequestInterface
{

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
    protected $Type = null;

    /**
     * @var bool
     */
    protected $Bonus = null;

    /**
     * @var Data
     */
    protected $Data = null;

    /**
     * @var string
     */
    protected $CampaignCode = null;

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
     * @return bool
     */
    public function getBonus()
    {
        return $this->Bonus;
    }

    /**
     * @param bool $Bonus
     * @return $this
     */
    public function setBonus($Bonus)
    {
        $this->Bonus = $Bonus;
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


}

