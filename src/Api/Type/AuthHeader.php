<?php

namespace Pyramid\Api\Type;

class AuthHeader
{

    /**
     * @var string
     */
    protected $Id = null;

    /**
     * @var string
     */
    protected $Routine = null;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param string $Id
     * @return $this
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return string
     */
    public function getRoutine()
    {
        return $this->Routine;
    }

    /**
     * @param string $Routine
     * @return $this
     */
    public function setRoutine($Routine)
    {
        $this->Routine = $Routine;
        return $this;
    }


}

