<?php

$container = require __DIR__ . '/../bootstrap.php';

$request = \Zend\Diactoros\ServerRequestFactory::fromGlobals();

$response = $container->get(\Project\Application\Http\HttpServer::class)->handle($request);

$container->get(\Zend\Diactoros\Response\SapiEmitter::class)->emit($response);

