<?php

namespace PhpMx\Conversation;

use BotMan\BotMan\BotMan;

class PlusPlus
{
    public function __invoke(BotMan $bot)
    {
        $msg = $bot->getMessage()->getText();
        dump($msg);
    }
}