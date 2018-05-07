<?php

namespace Pyramid\Api\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ElineInitUserOrderOverviewRequest implements RequestInterface
{

    /**
     * @var string
     */
    protected $ContactNo = null;

    /**
     * @var string
     */
    protected $Language = null;

    /**
     * @var string
     */
    protected $Select = null;

    /**
     * @var bool
     */
    protected $ESalesman = null;

    /**
     * @var bool
     */
    protected $OnlyActive = null;

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
    public function getSelect()
    {
        return $this->Select;
    }

    /**
     * @param string $Select
     * @return $this
     */
    public function setSelect($Select)
    {
        $this->Select = $Select;
        return $this;
    }

    /**
     * @return bool
     */
    public function getESalesman()
    {
        return $this->ESalesman;
    }

    /**
     * @param bool $ESalesman
     * @return $this
     */
    public function setESalesman($ESalesman)
    {
        $this->ESalesman = $ESalesman;
        return $this;
    }

    /**
     * @return bool
     */
    public function getOnlyActive()
    {
        return $this->OnlyActive;
    }

    /**
     * @param bool $OnlyActive
     * @return $this
     */
    public function setOnlyActive($OnlyActive)
    {
        $this->OnlyActive = $OnlyActive;
        return $this;
    }


}

