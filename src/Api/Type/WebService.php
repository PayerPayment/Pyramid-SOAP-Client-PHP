<?php

namespace Pyramid\Api\Type;

class WebService
{

    /**
     * @var string
     */
    protected $WebService = null;

    /**
     * @return string
     */
    public function getWebService()
    {
        return $this->WebService;
    }

    /**
     * @param string $WebService
     * @return $this
     */
    public function setWebService($WebService)
    {
        $this->WebService = $WebService;
        return $this;
    }


}

