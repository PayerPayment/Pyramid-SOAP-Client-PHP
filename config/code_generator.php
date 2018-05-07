<?php

  use Phpro\SoapClient\CodeGenerator\Config\Config;
  use Phpro\SoapClient\CodeGenerator\Rules;
  use Phpro\SoapClient\CodeGenerator\Assembler;

  $env = include('env.php');

  return Config::create()
    ->setWsdl($env['wsdl_location'])
    ->setDestination('src/Api/Type')
    ->setNamespace('Pyramid/Api/Type')
    ->addSoapOption('features', SOAP_SINGLE_ELEMENT_ARRAYS)
    ->addRule(new Rules\AssembleRule(new Assembler\GetterAssembler(
        (new Assembler\GetterAssemblerOptions())
            ->withReturnType()
            ->withBoolGetters()
    )))
    ->addRule(new Rules\AssembleRule(new Assembler\FluentSetterAssembler(
        (new  Assembler\FluentSetterAssemblerOptions())
            ->withReturnType(true)
    )))
    ->addRule(new Rules\TypenameMatchesRule(
        new Rules\AssembleRule(new Assembler\RequestAssembler()),
        '/Request$/'
    ))
    ->addRule(new Rules\TypenameMatchesRule(
        new Rules\AssembleRule(new Assembler\ResultAssembler()),
        '/Response$/'
    ))
  ;