<?php

namespace Project\Application\Http\Api\Routes;

use FastRoute\RouteCollector;
use Project\Application\Http\Api\Controllers\HomepageController;
use Project\Framework\Routing\RouteMapper;

class RouteManager implements RouteMapper
{
    /**
     * @param RouteCollector $router
     * @return void
     */
    public function map(RouteCollector $router)
    {
        $router->addRoute('GET', '/', HomepageController::class);
    }
}
