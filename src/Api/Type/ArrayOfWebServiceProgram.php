<?php

namespace Pyramid\Api\Type;

class ArrayOfWebServiceProgram
{

    /**
     * @var WebServiceProgram
     */
    protected $WebServiceProgram = null;

    /**
     * @return WebServiceProgram
     */
    public function getWebServiceProgram()
    {
        return $this->WebServiceProgram;
    }

    /**
     * @param WebServiceProgram $WebServiceProgram
     * @return $this
     */
    public function setWebServiceProgram($WebServiceProgram)
    {
        $this->WebServiceProgram = $WebServiceProgram;
        return $this;
    }


}

