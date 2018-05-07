<?php

namespace Pyramid\Api\Type;

use Phpro\SoapClient\Type\RequestInterface;

class RetailGetStoreItemRequest implements RequestInterface
{

    /**
     * @var string
     */
    protected $ArtCode = null;

    /**
     * @var string
     */
    protected $Stock = null;

    /**
     * @var string
     */
    protected $Store = null;

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
     * @return string
     */
    public function getStock()
    {
        return $this->Stock;
    }

    /**
     * @param string $Stock
     * @return $this
     */
    public function setStock($Stock)
    {
        $this->Stock = $Stock;
        return $this;
    }

    /**
     * @return string
     */
    public function getStore()
    {
        return $this->Store;
    }

    /**
     * @param string $Store
     * @return $this
     */
    public function setStore($Store)
    {
        $this->Store = $Store;
        return $this;
    }


}

