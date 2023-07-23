<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {

        $dateComponent = now()->format('Ymd');
        $randomComponent = rand(1000, 9999);
        $transactionNumber = "#" . $dateComponent . $randomComponent;





        // dummy datas
        $totalBayar = 87000;
        $bayar = 100000;
        $kembalian = $bayar - $totalBayar;

        return view('admin.transaksi.index', compact('transactionNumber', 'totalBayar', 'bayar', 'kembalian'));
    }
}
