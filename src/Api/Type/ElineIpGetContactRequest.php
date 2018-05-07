<?php

namespace Pyramid\Api\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ElineIpGetContactRequest implements RequestInterface
{

    /**
     * @var string
     */
    protected $ContactNo = null;

    /**
     * @var string
     */
    protected $DnrList = null;

    /**
     * @return string
     */
    public function getContactNo()
    {
        return $this->ContactNo;
    }

    /**
     * @param string $ContactNo
     * @return $this
     */
    public function setContactNo($ContactNo)
    {
        $this->ContactNo = $ContactNo;
        return $this;
    }

    /**
     * @return string
     */
    public function getDnrList()
    {
        return $this->DnrList;
    }

    /**
     * @param string $DnrList
     * @return $this
     */
    public function setDnrList($DnrList)
    {
        $this->DnrList = $DnrList;
        return $this;
    }


}

