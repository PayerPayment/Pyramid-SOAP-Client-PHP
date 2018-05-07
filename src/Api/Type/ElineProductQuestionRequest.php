<?php

namespace Pyramid\Api\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ElineProductQuestionRequest implements RequestInterface
{

    /**
     * @var string
     */
    protected $Product = null;

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
    protected $TextQuestion = null;

    /**
     * @return string
     */
    public function getProduct()
    {
        return $this->Product;
    }

    /**
     * @param string $Product
     * @return $this
     */
    public function setProduct($Product)
    {
        $this->Product = $Product;
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
    public function getTextQuestion()
    {
        return $this->TextQuestion;
    }

    /**
     * @param string $TextQuestion
     * @return $this
     */
    public function setTextQuestion($TextQuestion)
    {
        $this->TextQuestion = $TextQuestion;
        return $this;
    }


}

