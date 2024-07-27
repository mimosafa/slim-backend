<?php

declare(strict_types=1);

namespace Controller;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use UseCase\DailyReportSummary\DailyReportSummaryUseCase;

class DailyReportSummaryController
{
    public function __construct(
        private DailyReportSummaryUseCase $useCase,
    )
    {
    }

    public function __invoke(ServerRequestInterface $request, ResponseInterface $response)
    {
        $response->getBody()->write($this->getResponse());
        return $response;
    }

    private function getResponse()
    {
        return $this->useCase->handle();
    }
}
