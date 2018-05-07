<?php

namespace Pyramid\Api\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ElineAddItemsToCartResponse implements ResultInterface
{

    /**
     * @var int
     */
    protected $StatusCode = null;

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

