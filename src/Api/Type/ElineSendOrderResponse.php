<?php

namespace Pyramid\Api\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ElineSendOrderResponse implements ResultInterface
{

    /**
     * @var int
     */
    protected $StatusCode = null;

    /**
     * @var string
     */
    protected $OrderNo = null;

    /**
     * @var string
     */
    protected $ReceiptText = null;

    /**
     * @var Result
     */
    protected $Result = null;

    /**
     * @return int
     */
    public function getStatusCode()
    {
        return $this->StatusCode;
    }

    /**
     * @param int $StatusCode
     * @return $this
     */
    public function setStatusCode($StatusCode)
    {
        $this->StatusCode = $StatusCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrderNo()
    {
        return $this->OrderNo;
    }

    /**
     * @param string $OrderNo
     * @return $this
     */
    public function setOrderNo($OrderNo)
    {
        $this->OrderNo = $OrderNo;
        return $this;
    }

    /**
     * @return string
     */
    public function getReceiptText()
    {
        return $this->ReceiptText;
    }

    /**
     * @param string $ReceiptText
     * @return $this
     */
    public function setReceiptText($ReceiptText)
    {
        $this->ReceiptText = $ReceiptText;
        return $this;
    }

    /**
     * @return Result
     */
    public function getResult()
    {
        return $this->Result;
    }

    /**
     * @param Result $Result
     * @return $this
     */
    public function setResult($Result)
    {
        $this->Result = $Result;
        return $this;
    }


}

