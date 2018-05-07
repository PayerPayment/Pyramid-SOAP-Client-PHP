<?php

namespace Pyramid\Api\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ElineIpGetCustomerRequest implements RequestInterface
{

    /**
     * @var string
     */
    protected $Customer = null;

    /**
     * @var string
     */
    protected $DnrList = null;

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

    /**
     * @return string
     */
    public function getDnrList()
    {
        return $this->DnrList;
    }

    /**
     * @param string $DnrList
     * @return $this
     */
    public function setDnrList($DnrList)
    {
        $this->DnrList = $DnrList;
        return $this;
    }


}

