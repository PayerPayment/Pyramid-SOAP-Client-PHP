<?php

namespace Pyramid\Api\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ElineInitUserInformationResponse implements ResultInterface
{

    /**
     * @var int
     */
    protected $StatusCode = null;

    /**
     * @var bool
     */
    protected $Private = null;

    /**
     * @var bool
     */
    protected $ChangeInformationBlocked = null;

    /**
     * @var Result
     */
    protected $Result = null;

    /**
     * @return int
     */
    public function getStatusCode()
    {
        return $this->StatusCode;
    }

    /**
     * @param int $StatusCode
     * @return $this
     */
    public function setStatusCode($StatusCode)
    {
        $this->StatusCode = $StatusCode;
        return $this;
    }

    /**
     * @return bool
     */
    public function getPrivate()
    {
        return $this->Private;
    }

    /**
     * @param bool $Private
     * @return $this
     */
    public function setPrivate($Private)
    {
        $this->Private = $Private;
        return $this;
    }

    /**
     * @return bool
     */
    public function getChangeInformationBlocked()
    {
        return $this->ChangeInformationBlocked;
    }

    /**
     * @param bool $ChangeInformationBlocked
     * @return $this
     */
    public function setChangeInformationBlocked($ChangeInformationBlocked)
    {
        $this->ChangeInformationBlocked = $ChangeInformationBlocked;
        return $this;
    }

    /**
     * @return Result
     */
    public function getResult()
    {
        return $this->Result;
    }

    /**
     * @param Result $Result
     * @return $this
     */
    public function setResult($Result)
    {
        $this->Result = $Result;
        return $this;
    }


}

