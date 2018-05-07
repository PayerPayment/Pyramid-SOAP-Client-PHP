<?php

namespace Pyramid\Api\Type;

use Phpro\SoapClient\Type\RequestInterface;

class RepOrdertextRequest implements RequestInterface
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
     * @var string
     */
    protected $Ordernummer = null;

    /**
     * @var string
     */
    protected $Utlevinfo = null;

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

    /**
     * @return string
     */
    public function getOrdernummer()
    {
        return $this->Ordernummer;
    }

    /**
     * @param string $Ordernummer
     * @return $this
     */
    public function setOrdernummer($Ordernummer)
    {
        $this->Ordernummer = $Ordernummer;
        return $this;
    }

    /**
     * @return string
     */
    public function getUtlevinfo()
    {
        return $this->Utlevinfo;
    }

    /**
     * @param string $Utlevinfo
     * @return $this
     */
    public function setUtlevinfo($Utlevinfo)
    {
        $this->Utlevinfo = $Utlevinfo;
        return $this;
    }


}

