<?php

namespace Pyramid\Api\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ElineCheckLoginRequest implements RequestInterface
{

    /**
     * @var string
     */
    protected $Username = null;

    /**
     * @var string
     */
    protected $Password = null;

    /**
     * @var Data
     */
    protected $Data = null;

    /**
     * @var string
     */
    protected $CampaignCode = null;

    /**
     * @var string
     */
    protected $Language = null;

    /**
     * @var string
     */
    protected $Module = null;

    /**
     * @var string
     */
    protected $Arg = null;

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->Username;
    }

    /**
     * @param string $Username
     * @return $this
     */
    public function setUsername($Username)
    {
        $this->Username = $Username;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->Password;
    }

    /**
     * @param string $Password
     * @return $this
     */
    public function setPassword($Password)
    {
        $this->Password = $Password;
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

