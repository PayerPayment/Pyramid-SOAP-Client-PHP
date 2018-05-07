<?php

namespace Pyramid\Api\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ElineIpCSSearchCompanyRequest implements RequestInterface
{

    /**
     * @var string
     */
    protected $Sign = null;

    /**
     * @var string
     */
    protected $Company = null;

    /**
     * @var string
     */
    protected $Address = null;

    /**
     * @var string
     */
    protected $Zip = null;

    /**
     * @var string
     */
    protected $Phone = null;

    /**
     * @var string
     */
    protected $CorporateIdNo = null;

    /**
     * @var string
     */
    protected $CompanyType = null;

    /**
     * @var string
     */
    protected $CritCompany = null;

    /**
     * @var string
     */
    protected $CritAddress = null;

    /**
     * @var int
     */
    protected $Number = null;

    /**
     * @return string
     */
    public function getSign()
    {
        return $this->Sign;
    }

    /**
     * @param string $Sign
     * @return $this
     */
    public function setSign($Sign)
    {
        $this->Sign = $Sign;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompany()
    {
        return $this->Company;
    }

    /**
     * @param string $Company
     * @return $this
     */
    public function setCompany($Company)
    {
        $this->Company = $Company;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->Address;
    }

    /**
     * @param string $Address
     * @return $this
     */
    public function setAddress($Address)
    {
        $this->Address = $Address;
        return $this;
    }

    /**
     * @return string
     */
    public function getZip()
    {
        return $this->Zip;
    }

    /**
     * @param string $Zip
     * @return $this
     */
    public function setZip($Zip)
    {
        $this->Zip = $Zip;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->Phone;
    }

    /**
     * @param string $Phone
     * @return $this
     */
    public function setPhone($Phone)
    {
        $this->Phone = $Phone;
        return $this;
    }

    /**
     * @return string
     */
    public function getCorporateIdNo()
    {
        return $this->CorporateIdNo;
    }

    /**
     * @param string $CorporateIdNo
     * @return $this
     */
    public function setCorporateIdNo($CorporateIdNo)
    {
        $this->CorporateIdNo = $CorporateIdNo;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyType()
    {
        return $this->CompanyType;
    }

    /**
     * @param string $CompanyType
     * @return $this
     */
    public function setCompanyType($CompanyType)
    {
        $this->CompanyType = $CompanyType;
        return $this;
    }

    /**
     * @return string
     */
    public function getCritCompany()
    {
        return $this->CritCompany;
    }

    /**
     * @param string $CritCompany
     * @return $this
     */
    public function setCritCompany($CritCompany)
    {
        $this->CritCompany = $CritCompany;
        return $this;
    }

    /**
     * @return string
     */
    public function getCritAddress()
    {
        return $this->CritAddress;
    }

    /**
     * @param string $CritAddress
     * @return $this
     */
    public function setCritAddress($CritAddress)
    {
        $this->CritAddress = $CritAddress;
        return $this;
    }

    /**
     * @return int
     */
    public function getNumber()
    {
        return $this->Number;
    }

    /**
     * @param int $Number
     * @return $this
     */
    public function setNumber($Number)
    {
        $this->Number = $Number;
        return $this;
    }


}

