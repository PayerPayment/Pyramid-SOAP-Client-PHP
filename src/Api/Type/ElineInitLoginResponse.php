<?php

namespace Pyramid\Api\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ElineInitLoginResponse implements ResultInterface
{

    /**
     * @var int
     */
    protected $StatusCode = null;

    /**
     * @var string
     */
    protected $Text = null;

    /**
     * @var bool
     */
    protected $Register = null;

    /**
     * @return int
     */
    public function getStatusCode()
    {
        return $this->StatusCode;
    }

    /**
     * @param int $StatusCode
     * @return $this
     */
    public function setStatusCode($StatusCode)
    {
        $this->StatusCode = $StatusCode;
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

    /**
     * @return bool
     */
    public function getRegister()
    {
        return $this->Register;
    }

    /**
     * @param bool $Register
     * @return $this
     */
    public function setRegister($Register)
    {
        $this->Register = $Register;
        return $this;
    }


}

