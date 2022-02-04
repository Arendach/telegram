<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class RunBot extends Command
{
    protected $signature = 'run:bot';

    protected $description = 'Run bot';

    private $token = '5189443613:AAE78NGb7JWv2sT0xOHy5ReU_oR3WjNjaGA';

    public function handle(): void
    {
        Http::post("https://api.telegram.org/bot$this->token/");
    }
}
