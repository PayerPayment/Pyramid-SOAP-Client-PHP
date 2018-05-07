<?php

namespace Pyramid\Api\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ConfirmPurchaseRequest implements RequestInterface
{

    /**
     * @var string
     */
    protected $Command = null;

    /**
     * @var string
     */
    protected $Purchase = null;

    /**
     * @var string
     */
    protected $PurchaseRow = null;

    /**
     * @var string
     */
    protected $Week = null;

    /**
     * @return string
     */
    public function getCommand()
    {
        return $this->Command;
    }

    /**
     * @param string $Command
     * @return $this
     */
    public function setCommand($Command)
    {
        $this->Command = $Command;
        return $this;
    }

    /**
     * @return string
     */
    public function getPurchase()
    {
        return $this->Purchase;
    }

    /**
     * @param string $Purchase
     * @return $this
     */
    public function setPurchase($Purchase)
    {
        $this->Purchase = $Purchase;
        return $this;
    }

    /**
     * @return string
     */
    public function getPurchaseRow()
    {
        return $this->PurchaseRow;
    }

    /**
     * @param string $PurchaseRow
     * @return $this
     */
    public function setPurchaseRow($PurchaseRow)
    {
        $this->PurchaseRow = $PurchaseRow;
        return $this;
    }

    /**
     * @return string
     */
    public function getWeek()
    {
        return $this->Week;
    }

    /**
     * @param string $Week
     * @return $this
     */
    public function setWeek($Week)
    {
        $this->Week = $Week;
        return $this;
    }


}

