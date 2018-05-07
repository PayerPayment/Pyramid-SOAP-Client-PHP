<?php

namespace Pyramid\Api\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetArticlesRequest implements RequestInterface
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
    protected $Artikeltyp = null;

    /**
     * @var string
     */
    protected $Kategori = null;

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
    public function getArtikeltyp()
    {
        return $this->Artikeltyp;
    }

    /**
     * @param string $Artikeltyp
     * @return $this
     */
    public function setArtikeltyp($Artikeltyp)
    {
        $this->Artikeltyp = $Artikeltyp;
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


}

