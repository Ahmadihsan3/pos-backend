<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaporanBulananController extends Controller
{
    //index 1
    public function index(Request $request)
    {
        // $laporanOrder = \App\Models\Order::with('kasir')->orderBy('created_at', 'desc')->get();
        $laporanOrder = \App\Models\OrderItem::with('OrderItem')->where('order_id', '')->get();
        $laporanProduck = DB::table('products')
            ->when($request->input('name'), function ($query, $name) {
                return $query->where('name', 'like', '%' . $name . '%');
            })
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('pages.laporan_bulanan.index', compact('laporanProduck', 'laporanOrder'));
    }
}
