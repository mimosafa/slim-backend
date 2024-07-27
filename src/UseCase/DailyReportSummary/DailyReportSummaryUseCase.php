<?php

declare(strict_types=1);

namespace UseCase\DailyReportSummary;

ini_set('max_execution_time', 90);

use Psr\Log\LoggerInterface;
use Service\ChatService;

class DailyReportSummaryUseCase
{
    public function __construct(
        private ChatService $chat,
    )
    {
    }

    public function handle(): string
    {
        $prompt = $this->prompt();
        //app()->getContainer()->get(LoggerInterface::class)->info($prompt);
        return $this->chat->generateText($prompt);
    }

    private function prompt(): string
    {
        $template = file_get_contents(__DIR__ . '/prompt.txt');
        $json = file_get_contents(__DIR__ . '/../../../tests/Fixtures/2024-06-05-daily.json');

        return str_replace('{{__daily_reports__}}', $json, $template);
    }
}
