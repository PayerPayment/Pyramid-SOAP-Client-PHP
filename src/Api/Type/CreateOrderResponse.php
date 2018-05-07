<?php

namespace Pyramid\Api\Type;

use Phpro\SoapClient\Type\ResultInterface;

class CreateOrderResponse implements ResultInterface
{

    /**
     * @var string
     */
    protected $OrderNo = null;

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


}

