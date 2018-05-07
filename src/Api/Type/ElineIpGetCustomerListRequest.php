<?php

namespace Pyramid\Api\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ElineIpGetCustomerListRequest implements RequestInterface
{

    /**
     * @var string
     */
    protected $CustomerName = null;

    /**
     * @var string
     */
    protected $Salesman = null;

    /**
     * @return string
     */
    public function getCustomerName()
    {
        return $this->CustomerName;
    }

    /**
     * @param string $CustomerName
     * @return $this
     */
    public function setCustomerName($CustomerName)
    {
        $this->CustomerName = $CustomerName;
        return $this;
    }

    /**
     * @return string
     */
    public function getSalesman()
    {
        return $this->Salesman;
    }

    /**
     * @param string $Salesman
     * @return $this
     */
    public function setSalesman($Salesman)
    {
        $this->Salesman = $Salesman;
        return $this;
    }


}

