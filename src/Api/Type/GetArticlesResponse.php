<?php

namespace Pyramid\Api\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetArticlesResponse implements ResultInterface
{

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
    protected $Enhetskod = null;

    /**
     * @var string
     */
    protected $Kategori = null;

    /**
     * @var string
     */
    protected $Pris = null;

    /**
     * @var string
     */
    protected $Saldo = null;

    /**
     * @var string
     */
    protected $Status = null;

    /**
     * @var string
     */
    protected $Meddelande = null;

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
    public function getEnhetskod()
    {
        return $this->Enhetskod;
    }

    /**
     * @param string $Enhetskod
     * @return $this
     */
    public function setEnhetskod($Enhetskod)
    {
        $this->Enhetskod = $Enhetskod;
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
    public function getSaldo()
    {
        return $this->Saldo;
    }

    /**
     * @param string $Saldo
     * @return $this
     */
    public function setSaldo($Saldo)
    {
        $this->Saldo = $Saldo;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param string $Status
     * @return $this
     */
    public function setStatus($Status)
    {
        $this->Status = $Status;
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

