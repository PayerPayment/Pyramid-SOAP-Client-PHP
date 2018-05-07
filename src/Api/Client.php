<?php namespace Pyramid\Api;

use \Phpro\SoapClient\Type\RequestInterface;

class Client extends \Phpro\SoapClient\Client
{
    /**
     * @param RequestInterface $request
     *
     * @return ResultInterface
     * @throws \Phpro\SoapClient\Exception\SoapException
     */
    public function getInvoiceNumber(RequestInterface $request)
    {
        return $this->call('getInvoiceNumber', $request);
    }
}