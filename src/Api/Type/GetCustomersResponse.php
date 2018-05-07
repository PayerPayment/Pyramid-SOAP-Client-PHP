<?php

namespace Pyramid\Api\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetCustomersResponse implements ResultInterface
{

    /**
     * @var string
     */
    protected $Kundkod = null;

    /**
     * @var string
     */
    protected $Kundnamn = null;

    /**
     * @var string
     */
    protected $Postort = null;

    /**
     * @var string
     */
    protected $Telefon = null;

    /**
     * @var string
     */
    protected $Meddelande = null;

    /**
     * @return string
     */
    public function getKundkod()
    {
        return $this->Kundkod;
    }

    /**
     * @param string $Kundkod
     * @return $this
     */
    public function setKundkod($Kundkod)
    {
        $this->Kundkod = $Kundkod;
        return $this;
    }

    /**
     * @return string
     */
    public function getKundnamn()
    {
        return $this->Kundnamn;
    }

    /**
     * @param string $Kundnamn
     * @return $this
     */
    public function setKundnamn($Kundnamn)
    {
        $this->Kundnamn = $Kundnamn;
        return $this;
    }

    /**
     * @return string
     */
    public function getPostort()
    {
        return $this->Postort;
    }

    /**
     * @param string $Postort
     * @return $this
     */
    public function setPostort($Postort)
    {
        $this->Postort = $Postort;
        return $this;
    }

    /**
     * @return string
     */
    public function getTelefon()
    {
        return $this->Telefon;
    }

    /**
     * @param string $Telefon
     * @return $this
     */
    public function setTelefon($Telefon)
    {
        $this->Telefon = $Telefon;
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

