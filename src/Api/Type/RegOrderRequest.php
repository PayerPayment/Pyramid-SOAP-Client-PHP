<?php

namespace Pyramid\Api\Type;

use Phpro\SoapClient\Type\RequestInterface;

class RegOrderRequest implements RequestInterface
{

    /**
     * @var string
     */
    protected $Kundnummer = null;

    /**
     * @var string
     */
    protected $Ansvarig = null;

    /**
     * @return string
     */
    public function getKundnummer()
    {
        return $this->Kundnummer;
    }

    /**
     * @param string $Kundnummer
     * @return $this
     */
    public function setKundnummer($Kundnummer)
    {
        $this->Kundnummer = $Kundnummer;
        return $this;
    }

    /**
     * @return string
     */
    public function getAnsvarig()
    {
        return $this->Ansvarig;
    }

    /**
     * @param string $Ansvarig
     * @return $this
     */
    public function setAnsvarig($Ansvarig)
    {
        $this->Ansvarig = $Ansvarig;
        return $this;
    }


}

