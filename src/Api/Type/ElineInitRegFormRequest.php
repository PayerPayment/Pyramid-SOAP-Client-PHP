<?php

namespace Pyramid\Api\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ElineInitRegFormRequest implements RequestInterface
{

    /**
     * @var string
     */
    protected $GuestCode = null;

    /**
     * @var string
     */
    protected $Language = null;

    /**
     * @return string
     */
    public function getGuestCode()
    {
        return $this->GuestCode;
    }

    /**
     * @param string $GuestCode
     * @return $this
     */
    public function setGuestCode($GuestCode)
    {
        $this->GuestCode = $GuestCode;
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


}

