<?php

namespace Pyramid\Api\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ElineSearchEANResponse implements ResultInterface
{

    /**
     * @var int
     */
    protected $StatusCode = null;

    /**
     * @var int
     */
    protected $NumberOfHits = null;

    /**
     * @var bool
     */
    protected $MoreHits = null;

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
     * @return int
     */
    public function getNumberOfHits()
    {
        return $this->NumberOfHits;
    }

    /**
     * @param int $NumberOfHits
     * @return $this
     */
    public function setNumberOfHits($NumberOfHits)
    {
        $this->NumberOfHits = $NumberOfHits;
        return $this;
    }

    /**
     * @return bool
     */
    public function getMoreHits()
    {
        return $this->MoreHits;
    }

    /**
     * @param bool $MoreHits
     * @return $this
     */
    public function setMoreHits($MoreHits)
    {
        $this->MoreHits = $MoreHits;
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

