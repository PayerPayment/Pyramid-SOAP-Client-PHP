<?php

namespace Pyramid\Api\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetPriceRequest implements RequestInterface
{

    /**
     * @var string
     */
    protected $itemNo = null;

    /**
     * @return string
     */
    public function getItemNo()
    {
        return $this->itemNo;
    }

    /**
     * @param string $itemNo
     * @return $this
     */
    public function setItemNo($itemNo)
    {
        $this->itemNo = $itemNo;
        return $this;
    }


}

