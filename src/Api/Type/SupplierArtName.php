<?php

namespace Pyramid\Api\Type;

class SupplierArtName
{

    /**
     * @var string
     */
    protected $Supplier = null;

    /**
     * @var string
     */
    protected $ArtCode = null;

    /**
     * @var string
     */
    protected $ArtName = null;

    /**
     * @return string
     */
    public function getSupplier()
    {
        return $this->Supplier;
    }

    /**
     * @param string $Supplier
     * @return $this
     */
    public function setSupplier($Supplier)
    {
        $this->Supplier = $Supplier;
        return $this;
    }

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
    public function getArtName()
    {
        return $this->ArtName;
    }

    /**
     * @param string $ArtName
     * @return $this
     */
    public function setArtName($ArtName)
    {
        $this->ArtName = $ArtName;
        return $this;
    }


}

