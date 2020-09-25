<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class BlankPageController extends Controller
{
    public function index()
    {
        return response()->json([
            'success' => 404,
            'message' => 'Route Tidak Ditemukan',
        ], 200);
    }
}
