<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class penjualancontroller extends Controller
{
    function tampil_penjualan(){
        $jual = DB::table ('penjualan')->get();
          return view('penjualan', [ 'jual' => $jual]);
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
    
}
