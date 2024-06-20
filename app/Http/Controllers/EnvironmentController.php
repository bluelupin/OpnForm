<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnvironmentController extends Controller
{
    public function check(): JsonResponse
    {
        return response()->json([
            'AWS_BUCKET' => env('AWS_BUCKET'),
            'AWS_DEFAULT_REGION' => env('AWS_DEFAULT_REGION')
//            'AWS_ACCESS_KEY_ID' => env('AWS_ACCESS_KEY_ID'),
//            'AWS_SECRET_ACCESS_KEY' => env('AWS_SECRET_ACCESS_KEY'),
        ]);
    }
}
