<?php

namespace Pyramid\Api\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetOrdersRequest implements RequestInterface
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
    protected $Kundkod = null;

    /**
     * @var string
     */
    protected $Datum = null;

    /**
     * @var string
     */
    protected $Projekttyp = null;

    /**
     * @var string
     */
    protected $Status = null;

    /**
     * @var string
     */
    protected $Oppna_projekt = null;

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
    public function getProjekttyp()
    {
        return $this->Projekttyp;
    }

    /**
     * @param string $Projekttyp
     * @return $this
     */
    public function setProjekttyp($Projekttyp)
    {
        $this->Projekttyp = $Projekttyp;
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
    public function getOppna_projekt()
    {
        return $this->Oppna_projekt;
    }

    /**
     * @param string $Oppna_projekt
     * @return $this
     */
    public function setOppna_projekt($Oppna_projekt)
    {
        $this->Oppna_projekt = $Oppna_projekt;
        return $this;
    }


}

