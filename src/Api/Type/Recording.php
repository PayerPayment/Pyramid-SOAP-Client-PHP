<?php

namespace Pyramid\Api\Type;

class Recording
{

    /**
     * @var string
     */
    protected $RecFileName = null;

    /**
     * @var string
     */
    protected $RecMimeCode = null;

    /**
     * @var string
     */
    protected $RecCreationDateTime = null;

    /**
     * @var string
     */
    protected $RecMD5 = null;

    /**
     * @var string
     */
    protected $RecEncodingFormat = null;

    /**
     * @var string
     */
    protected $RecEncodedData = null;

    /**
     * @return string
     */
    public function getRecFileName()
    {
        return $this->RecFileName;
    }

    /**
     * @param string $RecFileName
     * @return $this
     */
    public function setRecFileName($RecFileName)
    {
        $this->RecFileName = $RecFileName;
        return $this;
    }

    /**
     * @return string
     */
    public function getRecMimeCode()
    {
        return $this->RecMimeCode;
    }

    /**
     * @param string $RecMimeCode
     * @return $this
     */
    public function setRecMimeCode($RecMimeCode)
    {
        $this->RecMimeCode = $RecMimeCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getRecCreationDateTime()
    {
        return $this->RecCreationDateTime;
    }

    /**
     * @param string $RecCreationDateTime
     * @return $this
     */
    public function setRecCreationDateTime($RecCreationDateTime)
    {
        $this->RecCreationDateTime = $RecCreationDateTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getRecMD5()
    {
        return $this->RecMD5;
    }

    /**
     * @param string $RecMD5
     * @return $this
     */
    public function setRecMD5($RecMD5)
    {
        $this->RecMD5 = $RecMD5;
        return $this;
    }

    /**
     * @return string
     */
    public function getRecEncodingFormat()
    {
        return $this->RecEncodingFormat;
    }

    /**
     * @param string $RecEncodingFormat
     * @return $this
     */
    public function setRecEncodingFormat($RecEncodingFormat)
    {
        $this->RecEncodingFormat = $RecEncodingFormat;
        return $this;
    }

    /**
     * @return string
     */
    public function getRecEncodedData()
    {
        return $this->RecEncodedData;
    }

    /**
     * @param string $RecEncodedData
     * @return $this
     */
    public function setRecEncodedData($RecEncodedData)
    {
        $this->RecEncodedData = $RecEncodedData;
        return $this;
    }


}

