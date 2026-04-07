<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransaksiController extends Controller
{
    // Ambil semua transaksi untuk satu user
    public function getByUser($id_user)
    {
        $transaksi = DB::table('transaksi')
            ->join('merchant', 'transaksi.id_merchant', '=', 'merchant.id_merchant')
            ->join('perhitungan_karbon', 'transaksi.id_transaksi', '=', 'perhitungan_karbon.id_transaksi')
            ->join('transportasi', 'perhitungan_karbon.id_transportasi', '=', 'transportasi.id_transportasi')
            ->select(
                'transaksi.id_transaksi',
                'transaksi.jumlah',
                'transaksi.metode',
                'transaksi.status',
                'transaksi.tanggal',
                'merchant.nama_merchant',
                'perhitungan_karbon.jarak',
                'perhitungan_karbon.total_emisi',
                'transportasi.nama_transportasi',
                'transportasi.emisi_per_km'
            )
            ->where('transaksi.id_user', $id_user)
            ->orderBy('transaksi.tanggal', 'desc')
            ->get();

        return response()->json($transaksi);
    }
}