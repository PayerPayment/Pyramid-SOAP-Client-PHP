<?php

namespace Pyramid\Api\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ElineIpGetNavTreeRequest implements RequestInterface
{

    /**
     * @var string
     */
    protected $Language = null;

    /**
     * @var string
     */
    protected $NavTree = null;

    /**
     * @return string
     */
    public function getLanguage()
    {
        return $this->Language;
    }

    /**
     * @param string $Language
     * @return $this
     */
    public function setLanguage($Language)
    {
        $this->Language = $Language;
        return $this;
    }

    /**
     * @return string
     */
    public function getNavTree()
    {
        return $this->NavTree;
    }

    /**
     * @param string $NavTree
     * @return $this
     */
    public function setNavTree($NavTree)
    {
        $this->NavTree = $NavTree;
        return $this;
    }


}

