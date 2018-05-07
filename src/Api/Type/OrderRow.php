<?php

namespace Pyramid\Api\Type;

class OrderRow
{

    /**
     * @var string
     */
    protected $ArtCode = null;

    /**
     * @var string
     */
    protected $Quantity = null;

    /**
     * @var string
     */
    protected $RowType = null;

    /**
     * @var string
     */
    protected $OrdererOrderNo = null;

    /**
     * @var string
     */
    protected $OrdererOrderRow = null;

    /**
     * @var string
     */
    protected $DeliveryWeekRow = null;

    /**
     * @var string
     */
    protected $Text = null;

    /**
     * @return string
     */
    public function getArtCode()
    {
        return $this->ArtCode;
    }

    /**
     * @param string $ArtCode
     * @return $this
     */
    public function setArtCode($ArtCode)
    {
        $this->ArtCode = $ArtCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }

    /**
     * @param string $Quantity
     * @return $this
     */
    public function setQuantity($Quantity)
    {
        $this->Quantity = $Quantity;
        return $this;
    }

    /**
     * @return string
     */
    public function getRowType()
    {
        return $this->RowType;
    }

    /**
     * @param string $RowType
     * @return $this
     */
    public function setRowType($RowType)
    {
        $this->RowType = $RowType;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrdererOrderNo()
    {
        return $this->OrdererOrderNo;
    }

    /**
     * @param string $OrdererOrderNo
     * @return $this
     */
    public function setOrdererOrderNo($OrdererOrderNo)
    {
        $this->OrdererOrderNo = $OrdererOrderNo;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrdererOrderRow()
    {
        return $this->OrdererOrderRow;
    }

    /**
     * @param string $OrdererOrderRow
     * @return $this
     */
    public function setOrdererOrderRow($OrdererOrderRow)
    {
        $this->OrdererOrderRow = $OrdererOrderRow;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryWeekRow()
    {
        return $this->DeliveryWeekRow;
    }

    /**
     * @param string $DeliveryWeekRow
     * @return $this
     */
    public function setDeliveryWeekRow($DeliveryWeekRow)
    {
        $this->DeliveryWeekRow = $DeliveryWeekRow;
        return $this;
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->Text;
    }

    /**
     * @param string $Text
     * @return $this
     */
    public function setText($Text)
    {
        $this->Text = $Text;
        return $this;
    }


}

