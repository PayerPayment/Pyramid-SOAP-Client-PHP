<?php

namespace Pyramid\Api\Type;

class Enclosure
{

    /**
     * @var string
     */
    protected $FileNameOri = null;

    /**
     * @var string
     */
    protected $FileNameZip = null;

    /**
     * @var string
     */
    protected $EnclosureType = null;

    /**
     * @var string
     */
    protected $FileMimeCode = null;

    /**
     * @var string
     */
    protected $FileCreationDateTime = null;

    /**
     * @var string
     */
    protected $FileMD5 = null;

    /**
     * @var string
     */
    protected $EncodingFormat = null;

    /**
     * @var string
     */
    protected $EncodedData = null;

    /**
     * @return string
     */
    public function getFileNameOri()
    {
        return $this->FileNameOri;
    }

    /**
     * @param string $FileNameOri
     * @return $this
     */
    public function setFileNameOri($FileNameOri)
    {
        $this->FileNameOri = $FileNameOri;
        return $this;
    }

    /**
     * @return string
     */
    public function getFileNameZip()
    {
        return $this->FileNameZip;
    }

    /**
     * @param string $FileNameZip
     * @return $this
     */
    public function setFileNameZip($FileNameZip)
    {
        $this->FileNameZip = $FileNameZip;
        return $this;
    }

    /**
     * @return string
     */
    public function getEnclosureType()
    {
        return $this->EnclosureType;
    }

    /**
     * @param string $EnclosureType
     * @return $this
     */
    public function setEnclosureType($EnclosureType)
    {
        $this->EnclosureType = $EnclosureType;
        return $this;
    }

    /**
     * @return string
     */
    public function getFileMimeCode()
    {
        return $this->FileMimeCode;
    }

    /**
     * @param string $FileMimeCode
     * @return $this
     */
    public function setFileMimeCode($FileMimeCode)
    {
        $this->FileMimeCode = $FileMimeCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getFileCreationDateTime()
    {
        return $this->FileCreationDateTime;
    }

    /**
     * @param string $FileCreationDateTime
     * @return $this
     */
    public function setFileCreationDateTime($FileCreationDateTime)
    {
        $this->FileCreationDateTime = $FileCreationDateTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getFileMD5()
    {
        return $this->FileMD5;
    }

    /**
     * @param string $FileMD5
     * @return $this
     */
    public function setFileMD5($FileMD5)
    {
        $this->FileMD5 = $FileMD5;
        return $this;
    }

    /**
     * @return string
     */
    public function getEncodingFormat()
    {
        return $this->EncodingFormat;
    }

    /**
     * @param string $EncodingFormat
     * @return $this
     */
    public function setEncodingFormat($EncodingFormat)
    {
        $this->EncodingFormat = $EncodingFormat;
        return $this;
    }

    /**
     * @return string
     */
    public function getEncodedData()
    {
        return $this->EncodedData;
    }

    /**
     * @param string $EncodedData
     * @return $this
     */
    public function setEncodedData($EncodedData)
    {
        $this->EncodedData = $EncodedData;
        return $this;
    }


}

