<?php

namespace Pyramid\Api\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ExampleGetArtNameRequest implements RequestInterface
{

    /**
     * @var string
     */
    protected $ArtCode = null;

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


}

