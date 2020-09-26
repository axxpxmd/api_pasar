<?php

namespace App\Http\Controllers\MasterPedagang;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

// Model
use App\Models\PedagangAlamat;

class PedagangAlamatController extends Controller
{
    public function index()
    {
        $pedagangAlamat = PedagangAlamat::all();

        return response()->json([
            'success' => true,
            'message' => 'List Data Pedagang Alamat',
            'data'    => $pedagangAlamat
        ], 200);
    }

    public function show($id)
    {
        $pedagangAlamat = PedagangAlamat::find($id);

        if ($pedagangAlamat != null) {
            return response()->json([
                'success' => true,
                'message' => 'Show ' . $pedagangAlamat->pedagang->nm_pedagang,
                'data'    => $pedagangAlamat
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Data Tidak Ditemukan',
            ], 200);
        }
    }
}
