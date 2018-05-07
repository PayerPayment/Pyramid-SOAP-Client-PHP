<?php

namespace Pyramid\Api\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ElineInitUserSerialNoRequest implements RequestInterface
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
     * @var string
     */
    protected $Serial = null;

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
     * @return string
     */
    public function getSerial()
    {
        return $this->Serial;
    }

    /**
     * @param string $Serial
     * @return $this
     */
    public function setSerial($Serial)
    {
        $this->Serial = $Serial;
        return $this;
    }


}

