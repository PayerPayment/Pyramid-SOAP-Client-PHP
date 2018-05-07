<?php

namespace Pyramid\Api\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ElineGetFavouriteListsRequest implements RequestInterface
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
    protected $CampaignCode = null;

    /**
     * @var string
     */
    protected $FavouriteListNo = null;

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
    public function getFavouriteListNo()
    {
        return $this->FavouriteListNo;
    }

    /**
     * @param string $FavouriteListNo
     * @return $this
     */
    public function setFavouriteListNo($FavouriteListNo)
    {
        $this->FavouriteListNo = $FavouriteListNo;
        return $this;
    }


}

