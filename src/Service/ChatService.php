<?php

declare(strict_types=1);

namespace Service;

use LLPhant\Chat\ChatInterface;
use LLPhant\Chat\OpenAIChat;
use LLPhant\OpenAIConfig;

class ChatService
{
    private ChatInterface $chat;

    public function __construct()
    {
        $config = new OpenAIConfig();
        $config->apiKey = $_ENV['OPENAI_API_KEY'];
        $this->chat = new OpenAIChat($config);
    }

    public function generateText(string $prompt): string
    {
        return $this->chat->generateText($prompt);
    }
}
