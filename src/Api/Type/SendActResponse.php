<?php

namespace Pyramid\Api\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SendActResponse implements ResultInterface
{

    /**
     * @var string
     */
    protected $Aktivitetsnr = null;

    /**
     * @var string
     */
    protected $Status = null;

    /**
     * @var string
     */
    protected $Ansvarig = null;

    /**
     * @var string
     */
    protected $Rubrik = null;

    /**
     * @var string
     */
    protected $Arbetsgrupp = null;

    /**
     * @var string
     */
    protected $Refkodtyp = null;

    /**
     * @var string
     */
    protected $Referenskod = null;

    /**
     * @var string
     */
    protected $Foretagskod = null;

    /**
     * @var string
     */
    protected $Foretag = null;

    /**
     * @var string
     */
    protected $Regdatum = null;

    /**
     * @var string
     */
    protected $Startdatum = null;

    /**
     * @var string
     */
    protected $Starttid = null;

    /**
     * @var string
     */
    protected $Slutdatum = null;

    /**
     * @var string
     */
    protected $Sluttid = null;

    /**
     * @var string
     */
    protected $Text = null;

    /**
     * @var string
     */
    protected $Outlook = null;

    /**
     * @var string
     */
    protected $Meddelande = null;

    /**
     * @return string
     */
    public function getAktivitetsnr()
    {
        return $this->Aktivitetsnr;
    }

    /**
     * @param string $Aktivitetsnr
     * @return $this
     */
    public function setAktivitetsnr($Aktivitetsnr)
    {
        $this->Aktivitetsnr = $Aktivitetsnr;
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
    public function getAnsvarig()
    {
        return $this->Ansvarig;
    }

    /**
     * @param string $Ansvarig
     * @return $this
     */
    public function setAnsvarig($Ansvarig)
    {
        $this->Ansvarig = $Ansvarig;
        return $this;
    }

    /**
     * @return string
     */
    public function getRubrik()
    {
        return $this->Rubrik;
    }

    /**
     * @param string $Rubrik
     * @return $this
     */
    public function setRubrik($Rubrik)
    {
        $this->Rubrik = $Rubrik;
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
    public function getRefkodtyp()
    {
        return $this->Refkodtyp;
    }

    /**
     * @param string $Refkodtyp
     * @return $this
     */
    public function setRefkodtyp($Refkodtyp)
    {
        $this->Refkodtyp = $Refkodtyp;
        return $this;
    }

    /**
     * @return string
     */
    public function getReferenskod()
    {
        return $this->Referenskod;
    }

    /**
     * @param string $Referenskod
     * @return $this
     */
    public function setReferenskod($Referenskod)
    {
        $this->Referenskod = $Referenskod;
        return $this;
    }

    /**
     * @return string
     */
    public function getForetagskod()
    {
        return $this->Foretagskod;
    }

    /**
     * @param string $Foretagskod
     * @return $this
     */
    public function setForetagskod($Foretagskod)
    {
        $this->Foretagskod = $Foretagskod;
        return $this;
    }

    /**
     * @return string
     */
    public function getForetag()
    {
        return $this->Foretag;
    }

    /**
     * @param string $Foretag
     * @return $this
     */
    public function setForetag($Foretag)
    {
        $this->Foretag = $Foretag;
        return $this;
    }

    /**
     * @return string
     */
    public function getRegdatum()
    {
        return $this->Regdatum;
    }

    /**
     * @param string $Regdatum
     * @return $this
     */
    public function setRegdatum($Regdatum)
    {
        $this->Regdatum = $Regdatum;
        return $this;
    }

    /**
     * @return string
     */
    public function getStartdatum()
    {
        return $this->Startdatum;
    }

    /**
     * @param string $Startdatum
     * @return $this
     */
    public function setStartdatum($Startdatum)
    {
        $this->Startdatum = $Startdatum;
        return $this;
    }

    /**
     * @return string
     */
    public function getStarttid()
    {
        return $this->Starttid;
    }

    /**
     * @param string $Starttid
     * @return $this
     */
    public function setStarttid($Starttid)
    {
        $this->Starttid = $Starttid;
        return $this;
    }

    /**
     * @return string
     */
    public function getSlutdatum()
    {
        return $this->Slutdatum;
    }

    /**
     * @param string $Slutdatum
     * @return $this
     */
    public function setSlutdatum($Slutdatum)
    {
        $this->Slutdatum = $Slutdatum;
        return $this;
    }

    /**
     * @return string
     */
    public function getSluttid()
    {
        return $this->Sluttid;
    }

    /**
     * @param string $Sluttid
     * @return $this
     */
    public function setSluttid($Sluttid)
    {
        $this->Sluttid = $Sluttid;
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

    /**
     * @return string
     */
    public function getOutlook()
    {
        return $this->Outlook;
    }

    /**
     * @param string $Outlook
     * @return $this
     */
    public function setOutlook($Outlook)
    {
        $this->Outlook = $Outlook;
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

