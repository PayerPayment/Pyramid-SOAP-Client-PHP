<?php

namespace Pyramid\Api\Type;

use Phpro\SoapClient\Type\ResultInterface;

class PbsCreateSupportCaseResponse implements ResultInterface
{

    /**
     * @var string
     */
    protected $Result = null;

    /**
     * @var string
     */
    protected $PbsSupportCaseReferenceIdentification = null;

    /**
     * @var string
     */
    protected $Message = null;

    /**
     * @return string
     */
    public function getResult()
    {
        return $this->Result;
    }

    /**
     * @param string $Result
     * @return $this
     */
    public function setResult($Result)
    {
        $this->Result = $Result;
        return $this;
    }

    /**
     * @return string
     */
    public function getPbsSupportCaseReferenceIdentification()
    {
        return $this->PbsSupportCaseReferenceIdentification;
    }

    /**
     * @param string $PbsSupportCaseReferenceIdentification
     * @return $this
     */
    public function setPbsSupportCaseReferenceIdentification($PbsSupportCaseReferenceIdentification)
    {
        $this->PbsSupportCaseReferenceIdentification = $PbsSupportCaseReferenceIdentification;
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

