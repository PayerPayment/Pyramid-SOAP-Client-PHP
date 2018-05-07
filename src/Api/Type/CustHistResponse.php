<?php

namespace Pyramid\Api\Type;

use Phpro\SoapClient\Type\ResultInterface;

class CustHistResponse implements ResultInterface
{

    /**
     * @var string
     */
    protected $Ordernummer = null;

    /**
     * @var string
     */
    protected $orderdate = null;

    /**
     * @var string
     */
    protected $deliverydate = null;

    /**
     * @var string
     */
    protected $planneddeliverydate = null;

    /**
     * @var string
     */
    protected $ordersum = null;

    /**
     * @var string
     */
    protected $packageid = null;

    /**
     * @var string
     */
    protected $delname = null;

    /**
     * @var string
     */
    protected $delstreet = null;

    /**
     * @var string
     */
    protected $delzip_city = null;

    /**
     * @var string
     */
    protected $del_country = null;

    /**
     * @var string
     */
    protected $invocename = null;

    /**
     * @var string
     */
    protected $invoicestreet = null;

    /**
     * @var string
     */
    protected $invoicezip_city = null;

    /**
     * @var string
     */
    protected $invoicecountry = null;

    /**
     * @return string
     */
    public function getOrdernummer()
    {
        return $this->Ordernummer;
    }

    /**
     * @param string $Ordernummer
     * @return $this
     */
    public function setOrdernummer($Ordernummer)
    {
        $this->Ordernummer = $Ordernummer;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrderdate()
    {
        return $this->orderdate;
    }

    /**
     * @param string $orderdate
     * @return $this
     */
    public function setOrderdate($orderdate)
    {
        $this->orderdate = $orderdate;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeliverydate()
    {
        return $this->deliverydate;
    }

    /**
     * @param string $deliverydate
     * @return $this
     */
    public function setDeliverydate($deliverydate)
    {
        $this->deliverydate = $deliverydate;
        return $this;
    }

    /**
     * @return string
     */
    public function getPlanneddeliverydate()
    {
        return $this->planneddeliverydate;
    }

    /**
     * @param string $planneddeliverydate
     * @return $this
     */
    public function setPlanneddeliverydate($planneddeliverydate)
    {
        $this->planneddeliverydate = $planneddeliverydate;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrdersum()
    {
        return $this->ordersum;
    }

    /**
     * @param string $ordersum
     * @return $this
     */
    public function setOrdersum($ordersum)
    {
        $this->ordersum = $ordersum;
        return $this;
    }

    /**
     * @return string
     */
    public function getPackageid()
    {
        return $this->packageid;
    }

    /**
     * @param string $packageid
     * @return $this
     */
    public function setPackageid($packageid)
    {
        $this->packageid = $packageid;
        return $this;
    }

    /**
     * @return string
     */
    public function getDelname()
    {
        return $this->delname;
    }

    /**
     * @param string $delname
     * @return $this
     */
    public function setDelname($delname)
    {
        $this->delname = $delname;
        return $this;
    }

    /**
     * @return string
     */
    public function getDelstreet()
    {
        return $this->delstreet;
    }

    /**
     * @param string $delstreet
     * @return $this
     */
    public function setDelstreet($delstreet)
    {
        $this->delstreet = $delstreet;
        return $this;
    }

    /**
     * @return string
     */
    public function getDelzip_city()
    {
        return $this->delzip_city;
    }

    /**
     * @param string $delzip_city
     * @return $this
     */
    public function setDelzip_city($delzip_city)
    {
        $this->delzip_city = $delzip_city;
        return $this;
    }

    /**
     * @return string
     */
    public function getDel_country()
    {
        return $this->del_country;
    }

    /**
     * @param string $del_country
     * @return $this
     */
    public function setDel_country($del_country)
    {
        $this->del_country = $del_country;
        return $this;
    }

    /**
     * @return string
     */
    public function getInvocename()
    {
        return $this->invocename;
    }

    /**
     * @param string $invocename
     * @return $this
     */
    public function setInvocename($invocename)
    {
        $this->invocename = $invocename;
        return $this;
    }

    /**
     * @return string
     */
    public function getInvoicestreet()
    {
        return $this->invoicestreet;
    }

    /**
     * @param string $invoicestreet
     * @return $this
     */
    public function setInvoicestreet($invoicestreet)
    {
        $this->invoicestreet = $invoicestreet;
        return $this;
    }

    /**
     * @return string
     */
    public function getInvoicezip_city()
    {
        return $this->invoicezip_city;
    }

    /**
     * @param string $invoicezip_city
     * @return $this
     */
    public function setInvoicezip_city($invoicezip_city)
    {
        $this->invoicezip_city = $invoicezip_city;
        return $this;
    }

    /**
     * @return string
     */
    public function getInvoicecountry()
    {
        return $this->invoicecountry;
    }

    /**
     * @param string $invoicecountry
     * @return $this
     */
    public function setInvoicecountry($invoicecountry)
    {
        $this->invoicecountry = $invoicecountry;
        return $this;
    }


}

