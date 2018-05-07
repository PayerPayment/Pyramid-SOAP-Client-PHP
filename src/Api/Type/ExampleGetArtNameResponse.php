<?php

namespace Pyramid\Api\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ExampleGetArtNameResponse implements ResultInterface
{

    /**
     * @var string
     */
    protected $ArtCode = null;

    /**
     * @var string
     */
    protected $ArtName = null;

    /**
     * @return string
     */
    public function getArtCode()
    {
        return $this->ArtCode;
    }

    /**
     * @param string $ArtCode
     * @return $this
     */
    public function setArtCode($ArtCode)
    {
        $this->ArtCode = $ArtCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getArtName()
    {
        return $this->ArtName;
    }

    /**
     * @param string $ArtName
     * @return $this
     */
    public function setArtName($ArtName)
    {
        $this->ArtName = $ArtName;
        return $this;
    }


}

