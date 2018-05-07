<?php

namespace Pyramid\Api\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetCustAppInfoResponse implements ResultInterface
{

    /**
     * @var string
     */
    protected $Anvandarantal = null;

    /**
     * @var string
     */
    protected $Info = null;

    /**
     * @return string
     */
    public function getAnvandarantal()
    {
        return $this->Anvandarantal;
    }

    /**
     * @param string $Anvandarantal
     * @return $this
     */
    public function setAnvandarantal($Anvandarantal)
    {
        $this->Anvandarantal = $Anvandarantal;
        return $this;
    }

    /**
     * @return string
     */
    public function getInfo()
    {
        return $this->Info;
    }

    /**
     * @param string $Info
     * @return $this
     */
    public function setInfo($Info)
    {
        $this->Info = $Info;
        return $this;
    }


}

