<?php

use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Psr\Container\ContainerInterface;
use Psr\Log\LoggerInterface;

return [
    // Logger
    LoggerInterface::class => function (ContainerInterface $container) {
        $appName = $_ENV['APP_NAME'] ?? 'slim-backend-app';
        $path = __DIR__ . '/../' . sprintf('%s.log', $appName);
        $logger = new Logger($appName);
        $logger->pushHandler(new StreamHandler($path));
        return $logger;
    }
];
