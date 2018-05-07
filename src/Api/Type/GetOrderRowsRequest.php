<?php

namespace Pyramid\Api\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetOrderRowsRequest implements RequestInterface
{

    /**
     * @var string
     */
    protected $Ordernummer = null;

    /**
     * @return string
     */
    public function getOrdernummer()
    {
        return $this->Ordernummer;
    }

    /**
     * @param string $Ordernummer
     * @return $this
     */
    public function setOrdernummer($Ordernummer)
    {
        $this->Ordernummer = $Ordernummer;
        return $this;
    }


}

