<?php

namespace Pyramid\Api\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ExampleGetSuppliersArtNameResponse implements ResultInterface
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
     * @var ArrayOfSupplierArtName
     */
    protected $SupplierArtNames = null;

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

    /**
     * @return ArrayOfSupplierArtName
     */
    public function getSupplierArtNames()
    {
        return $this->SupplierArtNames;
    }

    /**
     * @param ArrayOfSupplierArtName $SupplierArtNames
     * @return $this
     */
    public function setSupplierArtNames($SupplierArtNames)
    {
        $this->SupplierArtNames = $SupplierArtNames;
        return $this;
    }


}

