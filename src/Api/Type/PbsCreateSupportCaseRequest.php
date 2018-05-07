<?php

namespace Pyramid\Api\Type;

use Phpro\SoapClient\Type\RequestInterface;

class PbsCreateSupportCaseRequest implements RequestInterface
{

    /**
     * @var string
     */
    protected $Command = null;

    /**
     * @var string
     */
    protected $SupportType = null;

    /**
     * @var string
     */
    protected $DesignStudio = null;

    /**
     * @var string
     */
    protected $TechDepartment = null;

    /**
     * @var string
     */
    protected $TechInfo = null;

    /**
     * @var string
     */
    protected $MachineInfo = null;

    /**
     * @var string
     */
    protected $CompanyType = null;

    /**
     * @var string
     */
    protected $ApplicationCurrency = null;

    /**
     * @var string
     */
    protected $ApplicationLanguage = null;

    /**
     * @var string
     */
    protected $UserNumber = null;

    /**
     * @var string
     */
    protected $LicensedTo = null;

    /**
     * @var string
     */
    protected $CompanyName = null;

    /**
     * @var string
     */
    protected $Version = null;

    /**
     * @var string
     */
    protected $ServicePack = null;

    /**
     * @var string
     */
    protected $Runtime = null;

    /**
     * @var string
     */
    protected $DataVersion = null;

    /**
     * @var string
     */
    protected $Name = null;

    /**
     * @var string
     */
    protected $Email = null;

    /**
     * @var string
     */
    protected $EmailCC = null;

    /**
     * @var string
     */
    protected $Phone = null;

    /**
     * @var string
     */
    protected $Mobile = null;

    /**
     * @var string
     */
    protected $ModuleId = null;

    /**
     * @var string
     */
    protected $DialogNo = null;

    /**
     * @var string
     */
    protected $ErrorMessage = null;

    /**
     * @var string
     */
    protected $Subject = null;

    /**
     * @var string
     */
    protected $Message = null;

    /**
     * @var string
     */
    protected $PbsInstIni = null;

    /**
     * @var string
     */
    protected $PyramidStartupPath = null;

    /**
     * @var Enclosure
     */
    protected $Enclosure = null;

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
    public function getSupportType()
    {
        return $this->SupportType;
    }

    /**
     * @param string $SupportType
     * @return $this
     */
    public function setSupportType($SupportType)
    {
        $this->SupportType = $SupportType;
        return $this;
    }

    /**
     * @return string
     */
    public function getDesignStudio()
    {
        return $this->DesignStudio;
    }

    /**
     * @param string $DesignStudio
     * @return $this
     */
    public function setDesignStudio($DesignStudio)
    {
        $this->DesignStudio = $DesignStudio;
        return $this;
    }

    /**
     * @return string
     */
    public function getTechDepartment()
    {
        return $this->TechDepartment;
    }

    /**
     * @param string $TechDepartment
     * @return $this
     */
    public function setTechDepartment($TechDepartment)
    {
        $this->TechDepartment = $TechDepartment;
        return $this;
    }

    /**
     * @return string
     */
    public function getTechInfo()
    {
        return $this->TechInfo;
    }

    /**
     * @param string $TechInfo
     * @return $this
     */
    public function setTechInfo($TechInfo)
    {
        $this->TechInfo = $TechInfo;
        return $this;
    }

    /**
     * @return string
     */
    public function getMachineInfo()
    {
        return $this->MachineInfo;
    }

    /**
     * @param string $MachineInfo
     * @return $this
     */
    public function setMachineInfo($MachineInfo)
    {
        $this->MachineInfo = $MachineInfo;
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
    public function getApplicationCurrency()
    {
        return $this->ApplicationCurrency;
    }

    /**
     * @param string $ApplicationCurrency
     * @return $this
     */
    public function setApplicationCurrency($ApplicationCurrency)
    {
        $this->ApplicationCurrency = $ApplicationCurrency;
        return $this;
    }

    /**
     * @return string
     */
    public function getApplicationLanguage()
    {
        return $this->ApplicationLanguage;
    }

    /**
     * @param string $ApplicationLanguage
     * @return $this
     */
    public function setApplicationLanguage($ApplicationLanguage)
    {
        $this->ApplicationLanguage = $ApplicationLanguage;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserNumber()
    {
        return $this->UserNumber;
    }

    /**
     * @param string $UserNumber
     * @return $this
     */
    public function setUserNumber($UserNumber)
    {
        $this->UserNumber = $UserNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getLicensedTo()
    {
        return $this->LicensedTo;
    }

    /**
     * @param string $LicensedTo
     * @return $this
     */
    public function setLicensedTo($LicensedTo)
    {
        $this->LicensedTo = $LicensedTo;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyName()
    {
        return $this->CompanyName;
    }

    /**
     * @param string $CompanyName
     * @return $this
     */
    public function setCompanyName($CompanyName)
    {
        $this->CompanyName = $CompanyName;
        return $this;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return $this->Version;
    }

    /**
     * @param string $Version
     * @return $this
     */
    public function setVersion($Version)
    {
        $this->Version = $Version;
        return $this;
    }

    /**
     * @return string
     */
    public function getServicePack()
    {
        return $this->ServicePack;
    }

    /**
     * @param string $ServicePack
     * @return $this
     */
    public function setServicePack($ServicePack)
    {
        $this->ServicePack = $ServicePack;
        return $this;
    }

    /**
     * @return string
     */
    public function getRuntime()
    {
        return $this->Runtime;
    }

    /**
     * @param string $Runtime
     * @return $this
     */
    public function setRuntime($Runtime)
    {
        $this->Runtime = $Runtime;
        return $this;
    }

    /**
     * @return string
     */
    public function getDataVersion()
    {
        return $this->DataVersion;
    }

    /**
     * @param string $DataVersion
     * @return $this
     */
    public function setDataVersion($DataVersion)
    {
        $this->DataVersion = $DataVersion;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param string $Name
     * @return $this
     */
    public function setName($Name)
    {
        $this->Name = $Name;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * @param string $Email
     * @return $this
     */
    public function setEmail($Email)
    {
        $this->Email = $Email;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmailCC()
    {
        return $this->EmailCC;
    }

    /**
     * @param string $EmailCC
     * @return $this
     */
    public function setEmailCC($EmailCC)
    {
        $this->EmailCC = $EmailCC;
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
    public function getMobile()
    {
        return $this->Mobile;
    }

    /**
     * @param string $Mobile
     * @return $this
     */
    public function setMobile($Mobile)
    {
        $this->Mobile = $Mobile;
        return $this;
    }

    /**
     * @return string
     */
    public function getModuleId()
    {
        return $this->ModuleId;
    }

    /**
     * @param string $ModuleId
     * @return $this
     */
    public function setModuleId($ModuleId)
    {
        $this->ModuleId = $ModuleId;
        return $this;
    }

    /**
     * @return string
     */
    public function getDialogNo()
    {
        return $this->DialogNo;
    }

    /**
     * @param string $DialogNo
     * @return $this
     */
    public function setDialogNo($DialogNo)
    {
        $this->DialogNo = $DialogNo;
        return $this;
    }

    /**
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->ErrorMessage;
    }

    /**
     * @param string $ErrorMessage
     * @return $this
     */
    public function setErrorMessage($ErrorMessage)
    {
        $this->ErrorMessage = $ErrorMessage;
        return $this;
    }

    /**
     * @return string
     */
    public function getSubject()
    {
        return $this->Subject;
    }

    /**
     * @param string $Subject
     * @return $this
     */
    public function setSubject($Subject)
    {
        $this->Subject = $Subject;
        return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->Message;
    }

    /**
     * @param string $Message
     * @return $this
     */
    public function setMessage($Message)
    {
        $this->Message = $Message;
        return $this;
    }

    /**
     * @return string
     */
    public function getPbsInstIni()
    {
        return $this->PbsInstIni;
    }

    /**
     * @param string $PbsInstIni
     * @return $this
     */
    public function setPbsInstIni($PbsInstIni)
    {
        $this->PbsInstIni = $PbsInstIni;
        return $this;
    }

    /**
     * @return string
     */
    public function getPyramidStartupPath()
    {
        return $this->PyramidStartupPath;
    }

    /**
     * @param string $PyramidStartupPath
     * @return $this
     */
    public function setPyramidStartupPath($PyramidStartupPath)
    {
        $this->PyramidStartupPath = $PyramidStartupPath;
        return $this;
    }

    /**
     * @return Enclosure
     */
    public function getEnclosure()
    {
        return $this->Enclosure;
    }

    /**
     * @param Enclosure $Enclosure
     * @return $this
     */
    public function setEnclosure($Enclosure)
    {
        $this->Enclosure = $Enclosure;
        return $this;
    }


}

