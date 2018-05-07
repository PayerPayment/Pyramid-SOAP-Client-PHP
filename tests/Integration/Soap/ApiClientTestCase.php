<?php namespace Pyramid\Test\Integration\Soap;

use Pyramid\Api\ClientBuilder;
use Pyramid\Api\ClassMap\ClassMapCollection;

/**
 * Class ApiClientTestCase
 *
 * @package Pyramid\Test\Integration\Soap
 */
class ApiClientTestCase extends \PHPUnit_Framework_TestCase
{

    /**
     * @var Client
     */
    protected $client;

    /**
     * @var array
     */
    protected $env;

    /**
     * Configure client
     */
    protected function setUp()
    {
      $this->env = include(dirname(__FILE__) . '/../../../config/env.php');

      $classMaps = ClassMapCollection::getCollection();

      $clientBuilder = new ClientBuilder(
        $this->env['wsdl_location'],
        $classMaps,
        []
      );

      $this->client = $clientBuilder->build();
    }

}