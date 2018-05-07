<?php

namespace Pyramid\Api\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetAllStampRequest implements RequestInterface
{

    /**
     * @var string
     */
    protected $Anvandarnamn = null;

    /**
     * @var string
     */
    protected $Losenord = null;

    /**
     * @return string
     */
    public function getAnvandarnamn()
    {
        return $this->Anvandarnamn;
    }

    /**
     * @param string $Anvandarnamn
     * @return $this
     */
    public function setAnvandarnamn($Anvandarnamn)
    {
        $this->Anvandarnamn = $Anvandarnamn;
        return $this;
    }

    /**
     * @return string
     */
    public function getLosenord()
    {
        return $this->Losenord;
    }

    /**
     * @param string $Losenord
     * @return $this
     */
    public function setLosenord($Losenord)
    {
        $this->Losenord = $Losenord;
        return $this;
    }


}

