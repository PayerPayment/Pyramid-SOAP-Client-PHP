<?php

namespace Pyramid\Api\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ElineCheckOrderResponse implements ResultInterface
{

    /**
     * @var int
     */
    protected $StatusCode = null;

    /**
     * @var string
     */
    protected $StatusMessage = null;

    /**
     * @var int
     */
    protected $CreditCheckStatus = null;

    /**
     * @var string
     */
    protected $CreditCheckDate = null;

    /**
     * @var string
     */
    protected $CreditCheckFirstname = null;

    /**
     * @var string
     */
    protected $CreditCheckLastname = null;

    /**
     * @var string
     */
    protected $CreditCheckAddress = null;

    /**
     * @var string
     */
    protected $CreditCheckZip = null;

    /**
     * @var string
     */
    protected $CreditCheckTown = null;

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
    public function getStatusMessage()
    {
        return $this->StatusMessage;
    }

    /**
     * @param string $StatusMessage
     * @return $this
     */
    public function setStatusMessage($StatusMessage)
    {
        $this->StatusMessage = $StatusMessage;
        return $this;
    }

    /**
     * @return int
     */
    public function getCreditCheckStatus()
    {
        return $this->CreditCheckStatus;
    }

    /**
     * @param int $CreditCheckStatus
     * @return $this
     */
    public function setCreditCheckStatus($CreditCheckStatus)
    {
        $this->CreditCheckStatus = $CreditCheckStatus;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreditCheckDate()
    {
        return $this->CreditCheckDate;
    }

    /**
     * @param string $CreditCheckDate
     * @return $this
     */
    public function setCreditCheckDate($CreditCheckDate)
    {
        $this->CreditCheckDate = $CreditCheckDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreditCheckFirstname()
    {
        return $this->CreditCheckFirstname;
    }

    /**
     * @param string $CreditCheckFirstname
     * @return $this
     */
    public function setCreditCheckFirstname($CreditCheckFirstname)
    {
        $this->CreditCheckFirstname = $CreditCheckFirstname;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreditCheckLastname()
    {
        return $this->CreditCheckLastname;
    }

    /**
     * @param string $CreditCheckLastname
     * @return $this
     */
    public function setCreditCheckLastname($CreditCheckLastname)
    {
        $this->CreditCheckLastname = $CreditCheckLastname;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreditCheckAddress()
    {
        return $this->CreditCheckAddress;
    }

    /**
     * @param string $CreditCheckAddress
     * @return $this
     */
    public function setCreditCheckAddress($CreditCheckAddress)
    {
        $this->CreditCheckAddress = $CreditCheckAddress;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreditCheckZip()
    {
        return $this->CreditCheckZip;
    }

    /**
     * @param string $CreditCheckZip
     * @return $this
     */
    public function setCreditCheckZip($CreditCheckZip)
    {
        $this->CreditCheckZip = $CreditCheckZip;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreditCheckTown()
    {
        return $this->CreditCheckTown;
    }

    /**
     * @param string $CreditCheckTown
     * @return $this
     */
    public function setCreditCheckTown($CreditCheckTown)
    {
        $this->CreditCheckTown = $CreditCheckTown;
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

