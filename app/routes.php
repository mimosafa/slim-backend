<?php

use Psr\Http\Message\ServerRequestInterface as Req;
use Psr\Http\Message\ResponseInterface as Res;
use Psr\Log\LoggerInterface;
use Slim\App;

return function (App $app): void {
    /*
    $app->get('/hello[/{name}]', function (Req $request, Res $response, string|null $name = null, LoggerInterface $logger) {
        $name = $name ?? 'world';
        $response->getBody()->write("<h1>Hello $name!</h1>");
        $logger->info($name);
        return $response;
    });
    */
};
