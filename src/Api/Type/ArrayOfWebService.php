<?php

namespace Pyramid\Api\Type;

class ArrayOfWebService
{

    /**
     * @var WebService
     */
    protected $WebService = null;

    /**
     * @return WebService
     */
    public function getWebService()
    {
        return $this->WebService;
    }

    /**
     * @param WebService $WebService
     * @return $this
     */
    public function setWebService($WebService)
    {
        $this->WebService = $WebService;
        return $this;
    }


}

