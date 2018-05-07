<?php

namespace Pyramid\Api\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetQuantitysResponse implements ResultInterface
{

    /**
     * @var string
     */
    protected $itemNo = null;

    /**
     * @var string
     */
    protected $itemQuantity = null;

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
    public function getItemQuantity()
    {
        return $this->itemQuantity;
    }

    /**
     * @param string $itemQuantity
     * @return $this
     */
    public function setItemQuantity($itemQuantity)
    {
        $this->itemQuantity = $itemQuantity;
        return $this;
    }


}

