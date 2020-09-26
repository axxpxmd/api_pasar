<?php

namespace App\Http\Controllers\MasterPasar;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

// Model
use App\Models\PasarKategori;

class PasarKategoriController extends Controller
{
    public function index()
    {
        $pasarKategori = PasarKategori::all();

        return response()->json([
            'success' => true,
            'message' => 'List Data Pasar',
            'data'    => $pasarKategori
        ], 200);
    }

    public function show($id)
    {
        $pasarKategori = PasarKategori::find($id);

        if ($pasarKategori != null) {
            return response()->json([
                'success' => true,
                'message' => 'Show ' . $pasarKategori->pasar->nm_pasar . ' [' . $pasarKategori->jenisLapak->nm_jenis_lapak . ']' . ' [' . $pasarKategori->ukuran . ']' . ' [' . $pasarKategori->nm_blok . ']',
                'data'    => $pasarKategori
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Data Tidak Ditemukan',
            ], 200);
        }
    }
}
