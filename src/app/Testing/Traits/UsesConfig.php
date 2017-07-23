<?php

namespace Project\Testing\Traits;

use Project\Bootstrap\Config;
use Project\Bootstrap\ConfigFactory;

trait UsesConfig
{
    protected function createConfig(): Config
    {
        return ConfigFactory::create();
    }
}
