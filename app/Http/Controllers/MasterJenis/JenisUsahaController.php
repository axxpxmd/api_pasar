<?php

namespace App\Http\Controllers\MasterJenis;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

// Model
use App\Models\JenisUsaha;

class JenisUsahaController extends Controller
{
    public function index()
    {
        $jenisUsaha = JenisUsaha::select('id', 'nm_kategori')->get();

        return response()->json([
            'success' => true,
            'message' => 'List Data Jenis Lapak',
            'data'    => $jenisUsaha
        ], 200);
    }

    public function show($id)
    {
        $jenisUsaha = JenisUsaha::select('id', 'nm_kategori')->where('id', $id)->first();

        if ($jenisUsaha != null) {
            return response()->json([
                'success' => true,
                'message' => 'Show ' . $jenisUsaha->nm_kategori,
                'data'    => $jenisUsaha
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Data Tidak Ditemukan',
            ], 200);
        }
    }
}
