<?php

namespace App\Http\Controllers\MasterJenis;

use App\Http\Controllers\Controller;

// Model
use App\Models\JenisLapak;

class JenisLapakController extends Controller
{
    public function index()
    {
        $jenisLapak = JenisLapak::select('id', 'nm_jenis_lapak')->get();

        return response()->json([
            'success' => true,
            'message' => 'List Data Jenis Lapak',
            'data'    => $jenisLapak
        ], 200);
    }

    public function show($id)
    {
        $jenisLapak = JenisLapak::select('id', 'nm_jenis_lapak')->where('id', $id)->first();

        if ($jenisLapak != null) {
            return response()->json([
                'success' => true,
                'message' => 'Show ' . $jenisLapak->nm_jenis_lapak,
                'data'    => $jenisLapak
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Data Tidak Ditemukan',
            ], 200);
        }
    }
}
