<?php

namespace Pyramid\Api\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ElineIpGetTablesRequest implements RequestInterface
{

    /**
     * @var string
     */
    protected $LuList = null;

    /**
     * @return string
     */
    public function getLuList()
    {
        return $this->LuList;
    }

    /**
     * @param string $LuList
     * @return $this
     */
    public function setLuList($LuList)
    {
        $this->LuList = $LuList;
        return $this;
    }


}

