<?php

namespace Pyramid\Api\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ElineInitUserBonusResponse implements ResultInterface
{

    /**
     * @var int
     */
    protected $StatusCode = null;

    /**
     * @var string
     */
    protected $SystemCurrency = null;

    /**
     * @var string
     */
    protected $Text = null;

    /**
     * @var string
     */
    protected $BonusPoints = null;

    /**
     * @var string
     */
    protected $BonusAmount = null;

    /**
     * @var string
     */
    protected $DeductedAmount = null;

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
    public function getSystemCurrency()
    {
        return $this->SystemCurrency;
    }

    /**
     * @param string $SystemCurrency
     * @return $this
     */
    public function setSystemCurrency($SystemCurrency)
    {
        $this->SystemCurrency = $SystemCurrency;
        return $this;
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->Text;
    }

    /**
     * @param string $Text
     * @return $this
     */
    public function setText($Text)
    {
        $this->Text = $Text;
        return $this;
    }

    /**
     * @return string
     */
    public function getBonusPoints()
    {
        return $this->BonusPoints;
    }

    /**
     * @param string $BonusPoints
     * @return $this
     */
    public function setBonusPoints($BonusPoints)
    {
        $this->BonusPoints = $BonusPoints;
        return $this;
    }

    /**
     * @return string
     */
    public function getBonusAmount()
    {
        return $this->BonusAmount;
    }

    /**
     * @param string $BonusAmount
     * @return $this
     */
    public function setBonusAmount($BonusAmount)
    {
        $this->BonusAmount = $BonusAmount;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeductedAmount()
    {
        return $this->DeductedAmount;
    }

    /**
     * @param string $DeductedAmount
     * @return $this
     */
    public function setDeductedAmount($DeductedAmount)
    {
        $this->DeductedAmount = $DeductedAmount;
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

