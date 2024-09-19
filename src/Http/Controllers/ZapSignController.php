<?php

namespace LuizFabianoNogueira\ZapSign\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use JsonException;

class ZapSignController extends Controller
{
    /**
     * Connect to SSE
     *
     * @param Request $request
     * @param $userId
     * @return void
     * @throws JsonException
     */
    public function connect(Request $request, $userId): void
    {

    }

    /**
     * @return void
     */
    public function generateFakeData(Request $request, $userId): void
    {

    }
}
