<?php

namespace App\Http\Controllers\MasterPedagang;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

// Model
use App\Models\Pedagang;

class PedagangController extends Controller
{
    public function index()
    {
        $pedagang = Pedagang::all();

        return response()->json([
            'success' => true,
            'message' => 'List Data Jenis Lapak',
            'data'    => $pedagang
        ], 200);
    }

    public function show($id)
    {
        $pedagang = Pedagang::find($id);

        if ($pedagang != null) {
            return response()->json([
                'success' => true,
                'message' => 'Show ' . $pedagang->nm_pedagang,
                'data'    => $pedagang
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Data Tidak Ditemukan',
            ], 200);
        }
    }
}
