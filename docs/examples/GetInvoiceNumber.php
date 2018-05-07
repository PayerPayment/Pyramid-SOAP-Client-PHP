<?php

  require_once dirname(__FILE__) . '/../../vendor/autoload.php';

  use Pyramid\Api\ClientBuilder;
  use Pyramid\Api\ClassMap\ClassMapCollection;
  use Pyramid\Api\Type\GetInvoiceNumberRequest;

  try {
    $clientBuilder = new ClientBuilder(
      'url/to/wsdl',
      ClassMapCollection::getCollection(),
      []
    );

    $client = $clientBuilder->build();

    $request = new GetInvoiceNumberRequest();
    $request->setOrderNumber('022318');

    $response = $client->getInvoiceNumber($request);

    var_dump($response);
    
  } catch (Exception $e) {
    var_dump($e);
  }