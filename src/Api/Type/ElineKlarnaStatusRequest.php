<?php

namespace Pyramid\Api\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ElineKlarnaStatusRequest implements RequestInterface
{

    /**
     * @var string
     */
    protected $OrderNo = null;

    /**
     * @var string
     */
    protected $Status = null;

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
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param string $Status
     * @return $this
     */
    public function setStatus($Status)
    {
        $this->Status = $Status;
        return $this;
    }


}

