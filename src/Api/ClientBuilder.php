<?php namespace Pyramid\Api;

use Pyramid\Api\Client;
use Pyramid\Api\Middleware\AuthMiddleware;

use Phpro\SoapClient\Soap\ClassMap\ClassMapCollection;

class ClientBuilder
{
    /**
     * @var ClassMapCollection
     */
    private $classMaps;

    /**
     * @var string
     */
    private $wsdlLocation;

    /**
     * @var string
     */
    private $soapOptions;

    public function __construct($wsdlLocation, ClassMapCollection $classMaps, array $soapOptions = [])
    {
      $this->wsdlLocation = $wsdlLocation;
      $this->classMaps = $classMaps;
      $this->soapOptions = $soapOptions;
    }

    public function build()
    {
        $clientFactory = new \Phpro\SoapClient\ClientFactory(Client::class);
        $clientBuilder = new \Phpro\SoapClient\ClientBuilder(
          $clientFactory,
          $this->wsdlLocation,
          [
              'cache_wsdl' => WSDL_CACHE_NONE
          ]
        );

        // $clientBuilder->addTypeConverter();
        // $clientBuilder->withLogger();
        $clientBuilder->withEventDispatcher(new \Symfony\Component\EventDispatcher\EventDispatcher());
        $clientBuilder->withClassMaps($this->classMaps);

        return $clientBuilder->build();
    }

}