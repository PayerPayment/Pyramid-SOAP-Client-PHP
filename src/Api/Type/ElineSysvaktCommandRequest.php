<?php

namespace Pyramid\Api\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ElineSysvaktCommandRequest implements RequestInterface
{

    /**
     * @var string
     */
    protected $Command = null;

    /**
     * @var string
     */
    protected $Arg1 = null;

    /**
     * @var string
     */
    protected $Arg2 = null;

    /**
     * @var string
     */
    protected $Arg3 = null;

    /**
     * @return string
     */
    public function getCommand()
    {
        return $this->Command;
    }

    /**
     * @param string $Command
     * @return $this
     */
    public function setCommand($Command)
    {
        $this->Command = $Command;
        return $this;
    }

    /**
     * @return string
     */
    public function getArg1()
    {
        return $this->Arg1;
    }

    /**
     * @param string $Arg1
     * @return $this
     */
    public function setArg1($Arg1)
    {
        $this->Arg1 = $Arg1;
        return $this;
    }

    /**
     * @return string
     */
    public function getArg2()
    {
        return $this->Arg2;
    }

    /**
     * @param string $Arg2
     * @return $this
     */
    public function setArg2($Arg2)
    {
        $this->Arg2 = $Arg2;
        return $this;
    }

    /**
     * @return string
     */
    public function getArg3()
    {
        return $this->Arg3;
    }

    /**
     * @param string $Arg3
     * @return $this
     */
    public function setArg3($Arg3)
    {
        $this->Arg3 = $Arg3;
        return $this;
    }


}

