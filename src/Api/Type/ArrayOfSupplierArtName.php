<?php

namespace Pyramid\Api\Type;

class ArrayOfSupplierArtName
{

    /**
     * @var SupplierArtName
     */
    protected $SupplierArtName = null;

    /**
     * @return SupplierArtName
     */
    public function getSupplierArtName()
    {
        return $this->SupplierArtName;
    }

    /**
     * @param SupplierArtName $SupplierArtName
     * @return $this
     */
    public function setSupplierArtName($SupplierArtName)
    {
        $this->SupplierArtName = $SupplierArtName;
        return $this;
    }


}

