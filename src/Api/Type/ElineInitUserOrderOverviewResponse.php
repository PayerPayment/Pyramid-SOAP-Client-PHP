<?php

namespace Pyramid\Api\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ElineInitUserOrderOverviewResponse implements ResultInterface
{

    /**
     * @var int
     */
    protected $StatusCode = null;

    /**
     * @var string
     */
    protected $Company = null;

    /**
     * @var string
     */
    protected $Attest = null;

    /**
     * @var string
     */
    protected $Text = null;

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
    public function getCompany()
    {
        return $this->Company;
    }

    /**
     * @param string $Company
     * @return $this
     */
    public function setCompany($Company)
    {
        $this->Company = $Company;
        return $this;
    }

    /**
     * @return string
     */
    public function getAttest()
    {
        return $this->Attest;
    }

    /**
     * @param string $Attest
     * @return $this
     */
    public function setAttest($Attest)
    {
        $this->Attest = $Attest;
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

