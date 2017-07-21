<?php

namespace Project\Framework\Routing;

use FastRoute\RouteCollector;

interface RouteMapper
{
    /**
     * @param RouteCollector $router
     * @return void
     */
    public function map(RouteCollector $router);
}
