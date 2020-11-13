<?php

namespace PhpMx\Conversation;

use BotMan\BotMan\BotMan;

class PlusPlus implements ConversationInterface
{
    public function __invoke(BotMan $bot)
    {
        $msg = $bot->getMessage()->getText();
        dump($msg);
    }

    public function subscriber(BotMan $botMan)
    {
        $botMan->hears('.*(\+\+|\-\-).*', $this);
    }
}