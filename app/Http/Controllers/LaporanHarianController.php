<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanHarianController extends Controller
{
    //index 1
    public function index()
    {
        $laporan = \App\Models\Order::with('kasir')->orderBy('created_at', 'desc')->paginate(10);

        return view('pages.laporan_harian.index', compact('laporan'));
    }
}
