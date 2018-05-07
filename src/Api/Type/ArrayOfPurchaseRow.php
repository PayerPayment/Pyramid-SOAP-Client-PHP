<?php

namespace Pyramid\Api\Type;

class ArrayOfPurchaseRow
{

    /**
     * @var PurchaseRow
     */
    protected $PurchaseRow = null;

    /**
     * @return PurchaseRow
     */
    public function getPurchaseRow()
    {
        return $this->PurchaseRow;
    }

    /**
     * @param PurchaseRow $PurchaseRow
     * @return $this
     */
    public function setPurchaseRow($PurchaseRow)
    {
        $this->PurchaseRow = $PurchaseRow;
        return $this;
    }


}

