<?php

namespace Pyramid\Api\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetOrderRowsResponse implements ResultInterface
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
    protected $Benamning = null;

    /**
     * @var string
     */
    protected $Antal = null;

    /**
     * @var string
     */
    protected $Kategori = null;

    /**
     * @var string
     */
    protected $Debiteras = null;

    /**
     * @var string
     */
    protected $Levererat_antal = null;

    /**
     * @var string
     */
    protected $Pris = null;

    /**
     * @var string
     */
    protected $Rabatt = null;

    /**
     * @var string
     */
    protected $Radbelopp = null;

    /**
     * @var string
     */
    protected $Rad_moms = null;

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
    public function getBenamning()
    {
        return $this->Benamning;
    }

    /**
     * @param string $Benamning
     * @return $this
     */
    public function setBenamning($Benamning)
    {
        $this->Benamning = $Benamning;
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
    public function getKategori()
    {
        return $this->Kategori;
    }

    /**
     * @param string $Kategori
     * @return $this
     */
    public function setKategori($Kategori)
    {
        $this->Kategori = $Kategori;
        return $this;
    }

    /**
     * @return string
     */
    public function getDebiteras()
    {
        return $this->Debiteras;
    }

    /**
     * @param string $Debiteras
     * @return $this
     */
    public function setDebiteras($Debiteras)
    {
        $this->Debiteras = $Debiteras;
        return $this;
    }

    /**
     * @return string
     */
    public function getLevererat_antal()
    {
        return $this->Levererat_antal;
    }

    /**
     * @param string $Levererat_antal
     * @return $this
     */
    public function setLevererat_antal($Levererat_antal)
    {
        $this->Levererat_antal = $Levererat_antal;
        return $this;
    }

    /**
     * @return string
     */
    public function getPris()
    {
        return $this->Pris;
    }

    /**
     * @param string $Pris
     * @return $this
     */
    public function setPris($Pris)
    {
        $this->Pris = $Pris;
        return $this;
    }

    /**
     * @return string
     */
    public function getRabatt()
    {
        return $this->Rabatt;
    }

    /**
     * @param string $Rabatt
     * @return $this
     */
    public function setRabatt($Rabatt)
    {
        $this->Rabatt = $Rabatt;
        return $this;
    }

    /**
     * @return string
     */
    public function getRadbelopp()
    {
        return $this->Radbelopp;
    }

    /**
     * @param string $Radbelopp
     * @return $this
     */
    public function setRadbelopp($Radbelopp)
    {
        $this->Radbelopp = $Radbelopp;
        return $this;
    }

    /**
     * @return string
     */
    public function getRad_moms()
    {
        return $this->Rad_moms;
    }

    /**
     * @param string $Rad_moms
     * @return $this
     */
    public function setRad_moms($Rad_moms)
    {
        $this->Rad_moms = $Rad_moms;
        return $this;
    }


}

