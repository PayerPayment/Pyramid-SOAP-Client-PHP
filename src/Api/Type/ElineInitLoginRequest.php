<?php

namespace Pyramid\Api\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ElineInitLoginRequest implements RequestInterface
{

    /**
     * @var string
     */
    protected $Language = null;

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

