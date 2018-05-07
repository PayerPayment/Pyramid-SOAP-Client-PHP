<?php

namespace Pyramid\Api\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetInvoiceNumberResponse implements ResultInterface
{

    /**
     * @var string
     */
    protected $Invoicenumber = null;

    /**
     * @var string
     */
    protected $Message = null;

    /**
     * @return string
     */
    public function getInvoicenumber()
    {
        return $this->Invoicenumber;
    }

    /**
     * @param string $Invoicenumber
     * @return $this
     */
    public function setInvoicenumber($Invoicenumber)
    {
        $this->Invoicenumber = $Invoicenumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->Message;
    }

    /**
     * @param string $Message
     * @return $this
     */
    public function setMessage($Message)
    {
        $this->Message = $Message;
        return $this;
    }


}

