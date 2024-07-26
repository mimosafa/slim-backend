<?php

use Slim\App;

return function (App $app): void
{
    // Error middleware
    $env = $_ENV['APP_ENV'] ?? 'development';
    $isEnvDev = $env === 'development';
    $app->addErrorMiddleware($isEnvDev, true, true);
};
