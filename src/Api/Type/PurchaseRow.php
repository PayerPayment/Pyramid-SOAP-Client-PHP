<?php

namespace Pyramid\Api\Type;

class PurchaseRow
{

    /**
     * @var string
     */
    protected $ArtCode = null;

    /**
     * @var string
     */
    protected $RowNr = null;

    /**
     * @var string
     */
    protected $PurOrderRowNo = null;

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
    public function getRowNr()
    {
        return $this->RowNr;
    }

    /**
     * @param string $RowNr
     * @return $this
     */
    public function setRowNr($RowNr)
    {
        $this->RowNr = $RowNr;
        return $this;
    }

    /**
     * @return string
     */
    public function getPurOrderRowNo()
    {
        return $this->PurOrderRowNo;
    }

    /**
     * @param string $PurOrderRowNo
     * @return $this
     */
    public function setPurOrderRowNo($PurOrderRowNo)
    {
        $this->PurOrderRowNo = $PurOrderRowNo;
        return $this;
    }


}

