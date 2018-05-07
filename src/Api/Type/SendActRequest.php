<?php

namespace Pyramid\Api\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SendActRequest implements RequestInterface
{

    /**
     * @var string
     */
    protected $Aktiviteter = null;

    /**
     * @return string
     */
    public function getAktiviteter()
    {
        return $this->Aktiviteter;
    }

    /**
     * @param string $Aktiviteter
     * @return $this
     */
    public function setAktiviteter($Aktiviteter)
    {
        $this->Aktiviteter = $Aktiviteter;
        return $this;
    }


}

