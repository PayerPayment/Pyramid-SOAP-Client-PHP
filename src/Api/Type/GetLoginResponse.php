<?php

namespace Pyramid\Api\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetLoginResponse implements ResultInterface
{

    /**
     * @var string
     */
    protected $Sign = null;

    /**
     * @var string
     */
    protected $Namn = null;

    /**
     * @var string
     */
    protected $Losenord = null;

    /**
     * @var string
     */
    protected $Arbetsgrupp = null;

    /**
     * @var string
     */
    protected $Externt_foretag = null;

    /**
     * @var string
     */
    protected $Meddelande = null;

    /**
     * @return string
     */
    public function getSign()
    {
        return $this->Sign;
    }

    /**
     * @param string $Sign
     * @return $this
     */
    public function setSign($Sign)
    {
        $this->Sign = $Sign;
        return $this;
    }

    /**
     * @return string
     */
    public function getNamn()
    {
        return $this->Namn;
    }

    /**
     * @param string $Namn
     * @return $this
     */
    public function setNamn($Namn)
    {
        $this->Namn = $Namn;
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
    public function getArbetsgrupp()
    {
        return $this->Arbetsgrupp;
    }

    /**
     * @param string $Arbetsgrupp
     * @return $this
     */
    public function setArbetsgrupp($Arbetsgrupp)
    {
        $this->Arbetsgrupp = $Arbetsgrupp;
        return $this;
    }

    /**
     * @return string
     */
    public function getExternt_foretag()
    {
        return $this->Externt_foretag;
    }

    /**
     * @param string $Externt_foretag
     * @return $this
     */
    public function setExternt_foretag($Externt_foretag)
    {
        $this->Externt_foretag = $Externt_foretag;
        return $this;
    }

    /**
     * @return string
     */
    public function getMeddelande()
    {
        return $this->Meddelande;
    }

    /**
     * @param string $Meddelande
     * @return $this
     */
    public function setMeddelande($Meddelande)
    {
        $this->Meddelande = $Meddelande;
        return $this;
    }


}

