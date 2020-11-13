<?php

namespace PhpMx\Conversation;

use BotMan\BotMan\BotMan;

interface ConversationInterface
{
    public function __invoke(BotMan $botMan);

    public function subscriber(BotMan $botMan);
}