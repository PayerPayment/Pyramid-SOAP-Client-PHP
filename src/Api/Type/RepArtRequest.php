<?php

namespace Pyramid\Api\Type;

use Phpro\SoapClient\Type\RequestInterface;

class RepArtRequest implements RequestInterface
{

    /**
     * @var string
     */
    protected $Ordernummer = null;

    /**
     * @var string
     */
    protected $Artikelkod = null;

    /**
     * @var string
     */
    protected $Artikelbenamning = null;

    /**
     * @var string
     */
    protected $Antal = null;

    /**
     * @var string
     */
    protected $Rapportdatum = null;

    /**
     * @var string
     */
    protected $Utleverans = null;

    /**
     * @var string
     */
    protected $Endastutlev = null;

    /**
     * @var string
     */
    protected $Sign = null;

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
    public function getArtikelkod()
    {
        return $this->Artikelkod;
    }

    /**
     * @param string $Artikelkod
     * @return $this
     */
    public function setArtikelkod($Artikelkod)
    {
        $this->Artikelkod = $Artikelkod;
        return $this;
    }

    /**
     * @return string
     */
    public function getArtikelbenamning()
    {
        return $this->Artikelbenamning;
    }

    /**
     * @param string $Artikelbenamning
     * @return $this
     */
    public function setArtikelbenamning($Artikelbenamning)
    {
        $this->Artikelbenamning = $Artikelbenamning;
        return $this;
    }

    /**
     * @return string
     */
    public function getAntal()
    {
        return $this->Antal;
    }

    /**
     * @param string $Antal
     * @return $this
     */
    public function setAntal($Antal)
    {
        $this->Antal = $Antal;
        return $this;
    }

    /**
     * @return string
     */
    public function getRapportdatum()
    {
        return $this->Rapportdatum;
    }

    /**
     * @param string $Rapportdatum
     * @return $this
     */
    public function setRapportdatum($Rapportdatum)
    {
        $this->Rapportdatum = $Rapportdatum;
        return $this;
    }

    /**
     * @return string
     */
    public function getUtleverans()
    {
        return $this->Utleverans;
    }

    /**
     * @param string $Utleverans
     * @return $this
     */
    public function setUtleverans($Utleverans)
    {
        $this->Utleverans = $Utleverans;
        return $this;
    }

    /**
     * @return string
     */
    public function getEndastutlev()
    {
        return $this->Endastutlev;
    }

    /**
     * @param string $Endastutlev
     * @return $this
     */
    public function setEndastutlev($Endastutlev)
    {
        $this->Endastutlev = $Endastutlev;
        return $this;
    }

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


}

