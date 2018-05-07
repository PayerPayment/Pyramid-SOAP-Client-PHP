<?php

namespace Pyramid\Api\Type;

use Phpro\SoapClient\Type\RequestInterface;

class RepTimeRequest implements RequestInterface
{

    /**
     * @var string
     */
    protected $Ordernummer = null;

    /**
     * @var string
     */
    protected $Orderrad = null;

    /**
     * @var string
     */
    protected $Artikelkod = null;

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
    protected $Rapporttext = null;

    /**
     * @var string
     */
    protected $Rapportfrom = null;

    /**
     * @var string
     */
    protected $Rapporttill = null;

    /**
     * @var string
     */
    protected $Sign = null;

    /**
     * @var string
     */
    protected $Overfor = null;

    /**
     * @var string
     */
    protected $Debiterbar = null;

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
    public function getOrderrad()
    {
        return $this->Orderrad;
    }

    /**
     * @param string $Orderrad
     * @return $this
     */
    public function setOrderrad($Orderrad)
    {
        $this->Orderrad = $Orderrad;
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
    public function getRapporttext()
    {
        return $this->Rapporttext;
    }

    /**
     * @param string $Rapporttext
     * @return $this
     */
    public function setRapporttext($Rapporttext)
    {
        $this->Rapporttext = $Rapporttext;
        return $this;
    }

    /**
     * @return string
     */
    public function getRapportfrom()
    {
        return $this->Rapportfrom;
    }

    /**
     * @param string $Rapportfrom
     * @return $this
     */
    public function setRapportfrom($Rapportfrom)
    {
        $this->Rapportfrom = $Rapportfrom;
        return $this;
    }

    /**
     * @return string
     */
    public function getRapporttill()
    {
        return $this->Rapporttill;
    }

    /**
     * @param string $Rapporttill
     * @return $this
     */
    public function setRapporttill($Rapporttill)
    {
        $this->Rapporttill = $Rapporttill;
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

    /**
     * @return string
     */
    public function getOverfor()
    {
        return $this->Overfor;
    }

    /**
     * @param string $Overfor
     * @return $this
     */
    public function setOverfor($Overfor)
    {
        $this->Overfor = $Overfor;
        return $this;
    }

    /**
     * @return string
     */
    public function getDebiterbar()
    {
        return $this->Debiterbar;
    }

    /**
     * @param string $Debiterbar
     * @return $this
     */
    public function setDebiterbar($Debiterbar)
    {
        $this->Debiterbar = $Debiterbar;
        return $this;
    }


}

