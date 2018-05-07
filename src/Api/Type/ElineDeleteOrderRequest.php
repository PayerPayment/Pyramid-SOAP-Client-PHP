<?php

namespace Pyramid\Api\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ElineDeleteOrderRequest implements RequestInterface
{

    /**
     * @var string
     */
    protected $ContactNo = null;

    /**
     * @var string
     */
    protected $Order = null;

    /**
     * @return string
     */
    public function getContactNo()
    {
        return $this->ContactNo;
    }

    /**
     * @param string $ContactNo
     * @return $this
     */
    public function setContactNo($ContactNo)
    {
        $this->ContactNo = $ContactNo;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrder()
    {
        return $this->Order;
    }

    /**
     * @param string $Order
     * @return $this
     */
    public function setOrder($Order)
    {
        $this->Order = $Order;
        return $this;
    }


}

