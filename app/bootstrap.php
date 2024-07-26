<?php

use DI\Bridge\Slim\Bridge;
use DI\ContainerBuilder;
use Dotenv\Dotenv;
use Slim\App;

require __DIR__ . '/../vendor/autoload.php';

if (is_file(__DIR__ . '/../.env')) {
    Dotenv::createImmutable(__DIR__ . '/../')->load();
}

if (!function_exists('app')) {
    function app(): App
    {
        /** @var App|null */
        static $app;

        if (isset($app)) {
            return $app;
        }

        $builder = new ContainerBuilder();

        /**
         * You can change options on the container.
         * @see https://php-di.org/doc/container-configuration.html
         */

        if ($dependencies = require __DIR__ . '/dependencies.php') {
            $builder->addDefinitions($dependencies);
        }

        $container = $builder->build();
        $app = Bridge::create($container);

        $middlewares = require __DIR__ . '/middlewares.php';
        $middlewares($app);

        $routes = require __DIR__ . '/routes.php';
        $routes($app);

        return app();
    }
} else {
    throw new LogicException();
}

