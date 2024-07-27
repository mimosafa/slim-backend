<?php

use Controller\DailyReportSummaryController;
use Slim\App;

return function (App $app): void
{
    $app->get('/', DailyReportSummaryController::class);

    // Test
    $app->get('/test-daily-report', function () use ($app) {
        $jsonString = file_get_contents(__DIR__ . '/../tests/Feature/UseCase/2024-06-05-daily.json');
        $response = $app->getResponseFactory()->createResponse();
        $response->getBody()->write($jsonString);
        return $response->withHeader('Content-Type', 'application/json');
    })->setName('test-api-route');
};
