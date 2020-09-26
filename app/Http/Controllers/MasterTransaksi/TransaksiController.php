<?php

namespace App\Http\Controllers\MasterTransaksi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

// Model
use App\Models\Transaksi;

class TransaksiController extends Controller
{
    public function index()
    {
        $transaksi = Transaksi::all();

        return response()->json([
            'success' => true,
            'message' => 'List Data Transaksi',
            'data'    => $transaksi
        ], 200);
    }

    public function show($id)
    {
        $transaksi = Transaksi::find($id);

        if ($transaksi != null) {
            return response()->json([
                'success' => true,
                'message' => 'Show ' . $transaksi->kd_transaksi,
                'data'    => $transaksi
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Data Tidak Ditemukan',
            ], 200);
        }
    }
}
