<?php

namespace Pyramid\Api\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ElineInitUserInvoiceOverviewRequest implements RequestInterface
{

    /**
     * @var string
     */
    protected $ContactNo = null;

    /**
     * @var string
     */
    protected $Language = null;

    /**
     * @var bool
     */
    protected $Unpaid = null;

    /**
     * @return string
     */
    public function getContactNo()
    {
        return $this->ContactNo;
    }

    /**
     * @param string $ContactNo
     * @return $this
     */
    public function setContactNo($ContactNo)
    {
        $this->ContactNo = $ContactNo;
        return $this;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
        return $this->Language;
    }

    /**
     * @param string $Language
     * @return $this
     */
    public function setLanguage($Language)
    {
        $this->Language = $Language;
        return $this;
    }

    /**
     * @return bool
     */
    public function getUnpaid()
    {
        return $this->Unpaid;
    }

    /**
     * @param bool $Unpaid
     * @return $this
     */
    public function setUnpaid($Unpaid)
    {
        $this->Unpaid = $Unpaid;
        return $this;
    }


}

