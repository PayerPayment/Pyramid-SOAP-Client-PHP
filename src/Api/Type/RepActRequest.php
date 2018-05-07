<?php

namespace Pyramid\Api\Type;

use Phpro\SoapClient\Type\RequestInterface;

class RepActRequest implements RequestInterface
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
    protected $Aktivitetskod = null;

    /**
     * @var string
     */
    protected $Avsluta = null;

    /**
     * @var string
     */
    protected $Atgardskod = null;

    /**
     * @var string
     */
    protected $Text = null;

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
    public function getAktivitetskod()
    {
        return $this->Aktivitetskod;
    }

    /**
     * @param string $Aktivitetskod
     * @return $this
     */
    public function setAktivitetskod($Aktivitetskod)
    {
        $this->Aktivitetskod = $Aktivitetskod;
        return $this;
    }

    /**
     * @return string
     */
    public function getAvsluta()
    {
        return $this->Avsluta;
    }

    /**
     * @param string $Avsluta
     * @return $this
     */
    public function setAvsluta($Avsluta)
    {
        $this->Avsluta = $Avsluta;
        return $this;
    }

    /**
     * @return string
     */
    public function getAtgardskod()
    {
        return $this->Atgardskod;
    }

    /**
     * @param string $Atgardskod
     * @return $this
     */
    public function setAtgardskod($Atgardskod)
    {
        $this->Atgardskod = $Atgardskod;
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


}

