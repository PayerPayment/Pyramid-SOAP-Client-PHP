<?php

namespace Pyramid\Api\Type;

use Phpro\SoapClient\Type\ResultInterface;

class RetailGetStoreItemResponse implements ResultInterface
{

    /**
     * @var string
     */
    protected $Balance = null;

    /**
     * @var string
     */
    protected $Reserved = null;

    /**
     * @var string
     */
    protected $Ordered = null;

    /**
     * @var string
     */
    protected $StockPlace = null;

    /**
     * @var string
     */
    protected $LeadTime = null;

    /**
     * @var int
     */
    protected $SecretStock = null;

    /**
     * @return string
     */
    public function getBalance()
    {
        return $this->Balance;
    }

    /**
     * @param string $Balance
     * @return $this
     */
    public function setBalance($Balance)
    {
        $this->Balance = $Balance;
        return $this;
    }

    /**
     * @return string
     */
    public function getReserved()
    {
        return $this->Reserved;
    }

    /**
     * @param string $Reserved
     * @return $this
     */
    public function setReserved($Reserved)
    {
        $this->Reserved = $Reserved;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrdered()
    {
        return $this->Ordered;
    }

    /**
     * @param string $Ordered
     * @return $this
     */
    public function setOrdered($Ordered)
    {
        $this->Ordered = $Ordered;
        return $this;
    }

    /**
     * @return string
     */
    public function getStockPlace()
    {
        return $this->StockPlace;
    }

    /**
     * @param string $StockPlace
     * @return $this
     */
    public function setStockPlace($StockPlace)
    {
        $this->StockPlace = $StockPlace;
        return $this;
    }

    /**
     * @return string
     */
    public function getLeadTime()
    {
        return $this->LeadTime;
    }

    /**
     * @param string $LeadTime
     * @return $this
     */
    public function setLeadTime($LeadTime)
    {
        $this->LeadTime = $LeadTime;
        return $this;
    }

    /**
     * @return int
     */
    public function getSecretStock()
    {
        return $this->SecretStock;
    }

    /**
     * @param int $SecretStock
     * @return $this
     */
    public function setSecretStock($SecretStock)
    {
        $this->SecretStock = $SecretStock;
        return $this;
    }


}

