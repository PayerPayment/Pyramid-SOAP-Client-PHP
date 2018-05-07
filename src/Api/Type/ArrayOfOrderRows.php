<?php

namespace Pyramid\Api\Type;

class ArrayOfOrderRows
{

    /**
     * @var OrderRow
     */
    protected $OrderRow = null;

    /**
     * @return OrderRow
     */
    public function getOrderRow()
    {
        return $this->OrderRow;
    }

    /**
     * @param OrderRow $OrderRow
     * @return $this
     */
    public function setOrderRow($OrderRow)
    {
        $this->OrderRow = $OrderRow;
        return $this;
    }


}

