<?php

namespace Pyramid\Api\Type;

class WebServiceProgram
{

    /**
     * @var string
     */
    protected $Program = null;

    /**
     * @var ArrayOfWebService
     */
    protected $WebServices = null;

    /**
     * @return string
     */
    public function getProgram()
    {
        return $this->Program;
    }

    /**
     * @param string $Program
     * @return $this
     */
    public function setProgram($Program)
    {
        $this->Program = $Program;
        return $this;
    }

    /**
     * @return ArrayOfWebService
     */
    public function getWebServices()
    {
        return $this->WebServices;
    }

    /**
     * @param ArrayOfWebService $WebServices
     * @return $this
     */
    public function setWebServices($WebServices)
    {
        $this->WebServices = $WebServices;
        return $this;
    }


}

