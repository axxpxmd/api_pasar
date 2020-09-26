<?php

namespace App\Http\Controllers\MasterPasar;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

// Model
use App\Models\Pasar;

class PasarController extends Controller
{
    public function index()
    {
        $pasar = Pasar::all();

        return response()->json([
            'success' => true,
            'message' => 'List Data Pasar',
            'data'    => $pasar
        ], 200);
    }

    public function show($id)
    {
        $pasar = pasar::find($id);

        if ($pasar != null) {
            return response()->json([
                'success' => true,
                'message' => 'Show ' . $pasar->nm_pasar,
                'data'    => $pasar
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Data Tidak Ditemukan',
            ], 200);
        }
    }
}
