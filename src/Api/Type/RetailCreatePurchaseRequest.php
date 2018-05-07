<?php

namespace Pyramid\Api\Type;

use Phpro\SoapClient\Type\RequestInterface;

class RetailCreatePurchaseRequest implements RequestInterface
{

    /**
     * @var string
     */
    protected $SupplierCode = null;

    /**
     * @var string
     */
    protected $DeliveryWeek = null;

    /**
     * @var string
     */
    protected $Reference = null;

    /**
     * @var string
     */
    protected $OrderNr = null;

    /**
     * @var string
     */
    protected $StoreID = null;

    /**
     * @var ArrayOfOrderRow
     */
    protected $OrderRows = null;

    /**
     * @return string
     */
    public function getSupplierCode()
    {
        return $this->SupplierCode;
    }

    /**
     * @param string $SupplierCode
     * @return $this
     */
    public function setSupplierCode($SupplierCode)
    {
        $this->SupplierCode = $SupplierCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryWeek()
    {
        return $this->DeliveryWeek;
    }

    /**
     * @param string $DeliveryWeek
     * @return $this
     */
    public function setDeliveryWeek($DeliveryWeek)
    {
        $this->DeliveryWeek = $DeliveryWeek;
        return $this;
    }

    /**
     * @return string
     */
    public function getReference()
    {
        return $this->Reference;
    }

    /**
     * @param string $Reference
     * @return $this
     */
    public function setReference($Reference)
    {
        $this->Reference = $Reference;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrderNr()
    {
        return $this->OrderNr;
    }

    /**
     * @param string $OrderNr
     * @return $this
     */
    public function setOrderNr($OrderNr)
    {
        $this->OrderNr = $OrderNr;
        return $this;
    }

    /**
     * @return string
     */
    public function getStoreID()
    {
        return $this->StoreID;
    }

    /**
     * @param string $StoreID
     * @return $this
     */
    public function setStoreID($StoreID)
    {
        $this->StoreID = $StoreID;
        return $this;
    }

    /**
     * @return ArrayOfOrderRow
     */
    public function getOrderRows()
    {
        return $this->OrderRows;
    }

    /**
     * @param ArrayOfOrderRow $OrderRows
     * @return $this
     */
    public function setOrderRows($OrderRows)
    {
        $this->OrderRows = $OrderRows;
        return $this;
    }


}

