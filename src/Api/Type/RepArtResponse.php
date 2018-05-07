<?php

namespace Pyramid\Api\Type;

use Phpro\SoapClient\Type\ResultInterface;

class RepArtResponse implements ResultInterface
{

    /**
     * @var string
     */
    protected $Retur = null;

    /**
     * @return string
     */
    public function getRetur()
    {
        return $this->Retur;
    }

    /**
     * @param string $Retur
     * @return $this
     */
    public function setRetur($Retur)
    {
        $this->Retur = $Retur;
        return $this;
    }


}

