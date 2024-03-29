<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;



class penjualancontroller extends Controller
{
    function tampil_penjualan(){
        $pelanggan = DB::table('pelanggan')->get();
        $jual = DB::table ('sementara')->get();
        $produk = DB::table ('produk')->get();
        // $penjualan = DB::table('penjualan')->get();

        $sementara = DB::table('sementara')
        ->join('produk', 'sementara.id', '=', 'produk.id')->get();
        
            // $harga = DB::table('sementara')->get('total');
            // $total_harga = collect($harga)->sum('total');

          return view('penjualan', [ 'jual' => $jual, 'produk' => $produk , 'sementara'=> $sementara, 'pelanggan' => $pelanggan]);
      }
  
      function proses_jual(request $request, $id){
        
        $tgl_penjualan = $request-> tgl_penjualan;
        $total_harga = $request-> total_harga;
        $pelanggan_id = $request-> pelanggan_id;
  
        DB::table('penjualan')->insert([
            
            'tgl_penjualan' => $tgl_penjualan,
            'total_harga' => $total_harga,
            'pelanggan_id' => $pelanggan_id
        ]);
        return redirect('/penjualan');
    }


    function keranjang(request $request, $id){
   
        $produk_id = $request->produk_id;
        $tanggal_jual = now()->format('y-m-d');
        $qty = $request -> qty;
        $total = $request -> total_harga;

        $produk = DB::table('produk')->where('produk_id', $request->produk)->first();
return $produk;
        DB::table('sementara')->insert([
            'produk_id' => $produk_id,
            'nama_produk' => $request->nama_produk,
            'harga' => $request->harga,
            'tanggal_jual' => $tanggal_jual,
            'qty' => 1,
            'total' =>0
            
            
        ]);
        return redirect('/penjualan');
    }

 
    // function hapus_s($id){
    //     DB::table('sementara')->where('produk_id', '=' , $id)->delete();
    //     return  redirect('/penjualan');
    //     }
    



    

}
