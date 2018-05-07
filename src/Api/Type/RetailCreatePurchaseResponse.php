<?php

namespace Pyramid\Api\Type;

use Phpro\SoapClient\Type\ResultInterface;

class RetailCreatePurchaseResponse implements ResultInterface
{

    /**
     * @var string
     */
    protected $PurchaseNo = null;

    /**
     * @var ArrayOfPurchaseRow
     */
    protected $PurchaseRows = null;

    /**
     * @return string
     */
    public function getPurchaseNo()
    {
        return $this->PurchaseNo;
    }

    /**
     * @param string $PurchaseNo
     * @return $this
     */
    public function setPurchaseNo($PurchaseNo)
    {
        $this->PurchaseNo = $PurchaseNo;
        return $this;
    }

    /**
     * @return ArrayOfPurchaseRow
     */
    public function getPurchaseRows()
    {
        return $this->PurchaseRows;
    }

    /**
     * @param ArrayOfPurchaseRow $PurchaseRows
     * @return $this
     */
    public function setPurchaseRows($PurchaseRows)
    {
        $this->PurchaseRows = $PurchaseRows;
        return $this;
    }


}

