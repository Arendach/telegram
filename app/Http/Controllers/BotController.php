<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BotController extends Controller
{
    public function run(Request $request): void
    {
        \Log::info('Request', $request->all());
    }
}
