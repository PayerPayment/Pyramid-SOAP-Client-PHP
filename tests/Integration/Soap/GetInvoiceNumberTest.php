<?php namespace Pyramid\Test\Integration\Soap;

use Pyramid\Api\Type\GetInvoiceNumberRequest;
use Pyramid\Test\Integration\Soap\ApiClientTestCase;

/**
 * Class GetInvoiceNumberTest
 *
 * @package Pyramid\Test\Integration\Soap
 */
class GetInvoiceNumberTest extends ApiClientTestCase
{

    function testGetInvoiceNumberByValidOrderNumber_ShouldFindInvoice()
    {
        try {
            $request = new GetInvoiceNumberRequest();
            $request->setOrderNumber('022318');

            $response = $this->client->getInvoiceNumber($request);
            $this->assertEquals('Invoice found', $response->getMessage());
        } catch (Exception $e) {
            $this->fail('Should pass and return found invoice');
        }
    }

    function testGetInvoiceNumberByInvalidOrderNumber_ShouldNotFindInvoice()
    {
        try {
            $request = new GetInvoiceNumberRequest();
            $request->setOrderNumber('022318XX');

            $response = $this->client->getInvoiceNumber($request);
            $this->assertContains('No matching ordernumber found', $response->getMessage());
        } catch (Exception $e) {
            $this->fail('Should pass and not return invoice');
        }
    }
}