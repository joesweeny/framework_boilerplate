<?php

namespace Project\Testing\Traits;

use Interop\Container\ContainerInterface;
use Project\Bootstrap\Config;
use Project\Bootstrap\ConfigFactory;
use Project\Bootstrap\ContainerFactory;

trait UsesContainer
{
    protected function createContainer(Config $config = null): ContainerInterface
    {
        return (new ContainerFactory)->create($config ?: ConfigFactory::create());
    }
}
