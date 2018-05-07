<?php

namespace Pyramid\Api\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetPriceResponse implements ResultInterface
{

    /**
     * @var string
     */
    protected $itemNo = null;

    /**
     * @var string
     */
    protected $itemPrice = null;

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

    /**
     * @return string
     */
    public function getItemPrice()
    {
        return $this->itemPrice;
    }

    /**
     * @param string $itemPrice
     * @return $this
     */
    public function setItemPrice($itemPrice)
    {
        $this->itemPrice = $itemPrice;
        return $this;
    }


}

