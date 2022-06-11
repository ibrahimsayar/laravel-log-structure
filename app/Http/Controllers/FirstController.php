<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class FirstController extends Controller
{
    /**
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        Log::channel('FirstController')->info('Start : This is a test log message.');

        return response()->json(['message' => 'Working...']);
    }
}




