<?php

namespace Pyramid\Api\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SetInTimeRequest implements RequestInterface
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
    protected $Datum = null;

    /**
     * @var string
     */
    protected $Projekt = null;

    /**
     * @var string
     */
    protected $Kommentar = null;

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
    public function getDatum()
    {
        return $this->Datum;
    }

    /**
     * @param string $Datum
     * @return $this
     */
    public function setDatum($Datum)
    {
        $this->Datum = $Datum;
        return $this;
    }

    /**
     * @return string
     */
    public function getProjekt()
    {
        return $this->Projekt;
    }

    /**
     * @param string $Projekt
     * @return $this
     */
    public function setProjekt($Projekt)
    {
        $this->Projekt = $Projekt;
        return $this;
    }

    /**
     * @return string
     */
    public function getKommentar()
    {
        return $this->Kommentar;
    }

    /**
     * @param string $Kommentar
     * @return $this
     */
    public function setKommentar($Kommentar)
    {
        $this->Kommentar = $Kommentar;
        return $this;
    }


}

