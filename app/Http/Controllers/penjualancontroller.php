<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class penjualancontroller extends Controller
{
    function tampil_penjualan(){
        $jual = DB::table ('penjualan')->get();
        $produk = DB::table ('produk')->get();

        $sementara = DB::table('sementara')
        ->join('produk', 'sementara.produk_id', '=', 'produk.produk_id')
        ->select('produk.nama_produk', 'produk.harga', 'sementara.qty', 'sementara.total', 'sementara.tanggal_jual')->get();
        
            $harga = DB::table('sementara')->get('total');
            $total_harga = collect($harga)->sum('total');

          return view('penjualan', [ 'jual' => $jual, 'produk' => $produk]);
      }
  
      function proses_jual(request $request){
        $tgl_penjualan = $request-> tgl_penjualan;
        $total_harga = $request-> total_harga;
        $pelanggan_id = $request-> pelanggan_id;
  
        DB::table('penjualan')->insert([
            'tgl_penjualan' => $tgl_penjualan,
            'total_harga' => $total_harga,
            'pelanggan_id' => $pelanggan_id
        ]);
        return redirect('/jualan');
    }


    function keranjang(request $request, $id){
        $produk_id = $request -> produk_id;
        $tanggal_jual = now()->format('y-m-d');
        $qty = $request -> qty;
        $total = $request -> total_harga;

        $p = DB::table('produk')->where('produk_id', $produk_id)->first();

        DB::table('sementara')->insert([
            'produk_id' => $produk_id,
            'tanggal_jual' => $tanggal_jual,
            'total' => $qty * $p->harga,
            'qty' => $qty
            
        ]);
        return redirect('/penjualan');
    }
 
    


    

}
