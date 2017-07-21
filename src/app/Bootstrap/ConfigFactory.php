<?php

namespace Project\Bootstrap;

use Interop\Container\ContainerInterface;

class ConfigFactory
{
    /**
     * @return Config
     */
    public static function create(): Config
    {
        return new Config([
            'app' => [
                'templates' => __DIR__ . '/../../templates/'
            ],

            'database' => [
                'default' => [
                    'pdo' => [
                        'dsn' => getenv('DB_DSN') ?: 'sqlite::memory:',
                        'user' => getenv('DB_USER') ?: 'username',
                        'password' => getenv('DB_PASSWORD') ?: 'password'
                    ]
                ]
            ]
        ]);
    }

    /**
     * @param ContainerInterface $container
     * @return Config
     * @throws \Psr\Container\ContainerExceptionInterface
     */
    public static function fromContainer(ContainerInterface $container): Config
    {
        return $container->get(Config::class);
    }
}
