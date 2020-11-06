<?php

namespace PhpMx;

use BotMan\BotMan\BotMan;
use PhpMx\Conversation\Leaderboard;
use PhpMx\Conversation\PlusPlus;

class Router
{
    private $botman;

    public function __construct(BotMan $botman)
    {
        $this->botman = $botman;
    }

    public function mount(): void
    {
        $this->botman->hears('leaderboard', Leaderboard::class);
        $this->botman->hears('.*(\+\+|\-\-).*', PlusPlus::class);
    }

}
