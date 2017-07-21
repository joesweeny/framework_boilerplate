<?php

namespace Project\Application\Http\Api\Controllers;

use Project\Framework\Buffer\OutputBuffer;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Zend\Diactoros\Response\HtmlResponse;

class HomepageController
{
    public function __invoke(ServerRequestInterface $request): ResponseInterface
    {
        return new HtmlResponse(OutputBuffer::capture(function () use ($request) {
            // @todo Which token should be used?
            require __DIR__ . '/../../App/Resources/home.php';
        }));
    }
}