<?php

namespace Pyramid\Api\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ElineBackInStockRequest implements RequestInterface
{

    /**
     * @var string
     */
    protected $Email = null;

    /**
     * @var string
     */
    protected $MobileNo = null;

    /**
     * @var string
     */
    protected $Article = null;

    /**
     * @var string
     */
    protected $ProdPageLink = null;

    /**
     * @var string
     */
    protected $ImageLink = null;

    /**
     * @var string
     */
    protected $Language = null;

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * @param string $Email
     * @return $this
     */
    public function setEmail($Email)
    {
        $this->Email = $Email;
        return $this;
    }

    /**
     * @return string
     */
    public function getMobileNo()
    {
        return $this->MobileNo;
    }

    /**
     * @param string $MobileNo
     * @return $this
     */
    public function setMobileNo($MobileNo)
    {
        $this->MobileNo = $MobileNo;
        return $this;
    }

    /**
     * @return string
     */
    public function getArticle()
    {
        return $this->Article;
    }

    /**
     * @param string $Article
     * @return $this
     */
    public function setArticle($Article)
    {
        $this->Article = $Article;
        return $this;
    }

    /**
     * @return string
     */
    public function getProdPageLink()
    {
        return $this->ProdPageLink;
    }

    /**
     * @param string $ProdPageLink
     * @return $this
     */
    public function setProdPageLink($ProdPageLink)
    {
        $this->ProdPageLink = $ProdPageLink;
        return $this;
    }

    /**
     * @return string
     */
    public function getImageLink()
    {
        return $this->ImageLink;
    }

    /**
     * @param string $ImageLink
     * @return $this
     */
    public function setImageLink($ImageLink)
    {
        $this->ImageLink = $ImageLink;
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


}

