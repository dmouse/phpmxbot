<?php

namespace PhpMx\Conversation;

use BotMan\BotMan\BotMan;

class Leaderboard implements ConversationInterface
{

    public function __invoke(BotMan $botman)
    {
        $msg = $botman->getMessage()->getText();
        dump($msg);
    }

    public function subscriber(BotMan $botMan)
    {
        $botMan->hears('leaderboard', $this);
    }
}