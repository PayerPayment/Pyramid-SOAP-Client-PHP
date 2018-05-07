<?php

namespace Pyramid\Api\Type;

use Phpro\SoapClient\Type\ResultInterface;

class PBSWebServiceTestResponse implements ResultInterface
{

    /**
     * @var string
     */
    protected $Version = null;

    /**
     * @var string
     */
    protected $Runtime = null;

    /**
     * @var string
     */
    protected $Database = null;

    /**
     * @var string
     */
    protected $PyDir = null;

    /**
     * @var string
     */
    protected $DataDir = null;

    /**
     * @var string
     */
    protected $RepDir = null;

    /**
     * @var string
     */
    protected $License = null;

    /**
     * @var ArrayOfWebServiceProgram
     */
    protected $WebServicePrograms = null;

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
    public function getDatabase()
    {
        return $this->Database;
    }

    /**
     * @param string $Database
     * @return $this
     */
    public function setDatabase($Database)
    {
        $this->Database = $Database;
        return $this;
    }

    /**
     * @return string
     */
    public function getPyDir()
    {
        return $this->PyDir;
    }

    /**
     * @param string $PyDir
     * @return $this
     */
    public function setPyDir($PyDir)
    {
        $this->PyDir = $PyDir;
        return $this;
    }

    /**
     * @return string
     */
    public function getDataDir()
    {
        return $this->DataDir;
    }

    /**
     * @param string $DataDir
     * @return $this
     */
    public function setDataDir($DataDir)
    {
        $this->DataDir = $DataDir;
        return $this;
    }

    /**
     * @return string
     */
    public function getRepDir()
    {
        return $this->RepDir;
    }

    /**
     * @param string $RepDir
     * @return $this
     */
    public function setRepDir($RepDir)
    {
        $this->RepDir = $RepDir;
        return $this;
    }

    /**
     * @return string
     */
    public function getLicense()
    {
        return $this->License;
    }

    /**
     * @param string $License
     * @return $this
     */
    public function setLicense($License)
    {
        $this->License = $License;
        return $this;
    }

    /**
     * @return ArrayOfWebServiceProgram
     */
    public function getWebServicePrograms()
    {
        return $this->WebServicePrograms;
    }

    /**
     * @param ArrayOfWebServiceProgram $WebServicePrograms
     * @return $this
     */
    public function setWebServicePrograms($WebServicePrograms)
    {
        $this->WebServicePrograms = $WebServicePrograms;
        return $this;
    }


}

