<?php

namespace Pyramid\Api\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ElineIpRegisterCustomerResponse implements ResultInterface
{

    /**
     * @var int
     */
    protected $StatusCode = null;

    /**
     * @var string
     */
    protected $Customer = null;

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
    public function getCustomer()
    {
        return $this->Customer;
    }

    /**
     * @param string $Customer
     * @return $this
     */
    public function setCustomer($Customer)
    {
        $this->Customer = $Customer;
        return $this;
    }


}

