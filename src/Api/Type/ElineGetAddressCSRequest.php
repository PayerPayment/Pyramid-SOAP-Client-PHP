<?php

namespace Pyramid\Api\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ElineGetAddressCSRequest implements RequestInterface
{

    /**
     * @var string
     */
    protected $ID = null;

    /**
     * @var bool
     */
    protected $Private = null;

    /**
     * @return string
     */
    public function getID()
    {
        return $this->ID;
    }

    /**
     * @param string $ID
     * @return $this
     */
    public function setID($ID)
    {
        $this->ID = $ID;
        return $this;
    }

    /**
     * @return bool
     */
    public function getPrivate()
    {
        return $this->Private;
    }

    /**
     * @param bool $Private
     * @return $this
     */
    public function setPrivate($Private)
    {
        $this->Private = $Private;
        return $this;
    }


}

