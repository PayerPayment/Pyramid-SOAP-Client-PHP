<?php

namespace Pyramid\Api\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetCustAppInfoRequest implements RequestInterface
{

    /**
     * @var string
     */
    protected $Kundkod = null;

    /**
     * @var string
     */
    protected $Losenord = null;

    /**
     * @var string
     */
    protected $Version = null;

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
    public function getVersion()
    {
        return $this->Version;
    }

    /**
     * @param string $Version
     * @return $this
     */
    public function setVersion($Version)
    {
        $this->Version = $Version;
        return $this;
    }


}

