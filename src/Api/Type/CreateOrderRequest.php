<?php

namespace Pyramid\Api\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CreateOrderRequest implements RequestInterface
{

    /**
     * @var string
     */
    protected $CustomerCode = null;

    /**
     * @var string
     */
    protected $SupplierStore = null;

    /**
     * @var string
     */
    protected $YourOrder = null;

    /**
     * @var string
     */
    protected $YourRef = null;

    /**
     * @var string
     */
    protected $DeliveryWeek = null;

    /**
     * @var string
     */
    protected $DeliveryAddress1 = null;

    /**
     * @var string
     */
    protected $DeliveryAddress2 = null;

    /**
     * @var string
     */
    protected $DeliveryAddress3 = null;

    /**
     * @var string
     */
    protected $DeliveryAddress4 = null;

    /**
     * @var string
     */
    protected $DeliveryAddress5 = null;

    /**
     * @var string
     */
    protected $DeliveryAddress6 = null;

    /**
     * @var string
     */
    protected $CountryCode = null;

    /**
     * @var ArrayOfOrderRows
     */
    protected $OrderRows = null;

    /**
     * @return string
     */
    public function getCustomerCode()
    {
        return $this->CustomerCode;
    }

    /**
     * @param string $CustomerCode
     * @return $this
     */
    public function setCustomerCode($CustomerCode)
    {
        $this->CustomerCode = $CustomerCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getSupplierStore()
    {
        return $this->SupplierStore;
    }

    /**
     * @param string $SupplierStore
     * @return $this
     */
    public function setSupplierStore($SupplierStore)
    {
        $this->SupplierStore = $SupplierStore;
        return $this;
    }

    /**
     * @return string
     */
    public function getYourOrder()
    {
        return $this->YourOrder;
    }

    /**
     * @param string $YourOrder
     * @return $this
     */
    public function setYourOrder($YourOrder)
    {
        $this->YourOrder = $YourOrder;
        return $this;
    }

    /**
     * @return string
     */
    public function getYourRef()
    {
        return $this->YourRef;
    }

    /**
     * @param string $YourRef
     * @return $this
     */
    public function setYourRef($YourRef)
    {
        $this->YourRef = $YourRef;
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
    public function getDeliveryAddress1()
    {
        return $this->DeliveryAddress1;
    }

    /**
     * @param string $DeliveryAddress1
     * @return $this
     */
    public function setDeliveryAddress1($DeliveryAddress1)
    {
        $this->DeliveryAddress1 = $DeliveryAddress1;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryAddress2()
    {
        return $this->DeliveryAddress2;
    }

    /**
     * @param string $DeliveryAddress2
     * @return $this
     */
    public function setDeliveryAddress2($DeliveryAddress2)
    {
        $this->DeliveryAddress2 = $DeliveryAddress2;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryAddress3()
    {
        return $this->DeliveryAddress3;
    }

    /**
     * @param string $DeliveryAddress3
     * @return $this
     */
    public function setDeliveryAddress3($DeliveryAddress3)
    {
        $this->DeliveryAddress3 = $DeliveryAddress3;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryAddress4()
    {
        return $this->DeliveryAddress4;
    }

    /**
     * @param string $DeliveryAddress4
     * @return $this
     */
    public function setDeliveryAddress4($DeliveryAddress4)
    {
        $this->DeliveryAddress4 = $DeliveryAddress4;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryAddress5()
    {
        return $this->DeliveryAddress5;
    }

    /**
     * @param string $DeliveryAddress5
     * @return $this
     */
    public function setDeliveryAddress5($DeliveryAddress5)
    {
        $this->DeliveryAddress5 = $DeliveryAddress5;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryAddress6()
    {
        return $this->DeliveryAddress6;
    }

    /**
     * @param string $DeliveryAddress6
     * @return $this
     */
    public function setDeliveryAddress6($DeliveryAddress6)
    {
        $this->DeliveryAddress6 = $DeliveryAddress6;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
        return $this->CountryCode;
    }

    /**
     * @param string $CountryCode
     * @return $this
     */
    public function setCountryCode($CountryCode)
    {
        $this->CountryCode = $CountryCode;
        return $this;
    }

    /**
     * @return ArrayOfOrderRows
     */
    public function getOrderRows()
    {
        return $this->OrderRows;
    }

    /**
     * @param ArrayOfOrderRows $OrderRows
     * @return $this
     */
    public function setOrderRows($OrderRows)
    {
        $this->OrderRows = $OrderRows;
        return $this;
    }


}

