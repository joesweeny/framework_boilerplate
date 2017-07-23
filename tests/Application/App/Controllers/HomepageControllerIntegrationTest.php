<?php

namespace Project\Application\Http\App\Controllers;

use GuzzleHttp\Psr7\ServerRequest;
use PHPUnit\Framework\TestCase;
use Project\Testing\Traits\UsesContainer;
use Project\Testing\Traits\UsesHttpServer;

class HomepageControllerIntegrationTest extends TestCase
{
    use UsesHttpServer;
    use UsesContainer;

    public function test_home_page_displays_correct_text()
    {
        $request = new ServerRequest('GET', '/');

        $response = $this->handle($this->createContainer(), $request);

        $this->assertContains('Welcome to your Micro Framework', $response->getBody()->getContents());
    }
}
