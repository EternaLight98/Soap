<?php

    require 'nusoap.php';
    require 'soapserver.php';

    $server = new nusoap_server();

    $server->configureWSDL("Soap demo", "urn::soapdemo");

    $server->register(
        " MiPrimerSoap.suma",
        array("a"=>"xsd:float","b"=>"xsd:float"),
        array("return"=>"xsd:float")
    );

    $server->register(
        "resta",
        array("a"=>"xsd:float","b"=>"xsd:float"),
        array("return"=>"xsd:float")
    );

    $server->register(
        "multi",
        array("a"=>"xsd:float","b"=>"xsd:float"),
        array("return"=>"xsd:float")
    );

    $server->register(
        "div",
        array("a"=>"xsd:float","b"=>"xsd:float"),
        array("return"=>"xsd:float")
    );

    $server->register(
        "factorial",
        array("a"=>"xsd:float"),
        array("return"=>"xsd:float")
    );

    $server->service(file_get_contents("php://input"));




?>