<?php

namespace Pyramid\Api\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ElineSaveProductRatingResponse implements ResultInterface
{

    /**
     * @var int
     */
    protected $StatusCode = null;

    /**
     * @var string
     */
    protected $AverageRating = null;

    /**
     * @return int
     */
    public function getStatusCode()
    {
        return $this->StatusCode;
    }

    /**
     * @param int $StatusCode
     * @return $this
     */
    public function setStatusCode($StatusCode)
    {
        $this->StatusCode = $StatusCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getAverageRating()
    {
        return $this->AverageRating;
    }

    /**
     * @param string $AverageRating
     * @return $this
     */
    public function setAverageRating($AverageRating)
    {
        $this->AverageRating = $AverageRating;
        return $this;
    }


}

