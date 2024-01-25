<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Penjualan2Controller extends Controller
{
    function penjualan2 (){
        $produk = DB::table('produk')->get();

        $pelanggan = DB::table('pelanggan')->get();

        $penjualan = DB::table('penjualan')->latest()->first();

        $penjualan_id = "";

        if(!$penjualan){
            $penjualan_id = '1';
        }else{

            // if($penjualan->status == "selesai"){
            //     $penjualan_id = $penjualan->Penjualan_id+ 1;
            // }else{
            //     $penjualan_id = $penjualan->Penjualan_id;
            // }
        }

        $detail_penjualan = DB::table('produk')->where("penjualan_id", $penjualan_id)
        ->join("detail_penjualan","produk.produk_id","=",'detail_penjualan.produk_id')
        ->get();


        return view ('/penjualan2',['produk'=>$produk,'pelanggan'=>$pelanggan ,'penjualan_id' => $penjualan_id, 'detail_penjualan' => $detail_penjualan]);
    }

    function tambah(Request $request ){
        $produk = DB::table('produk')->where('produk_id', $request->produk)->first();

        // return $produk;

        $data_Penjualan = DB::table('penjualan')->where('penjualan_id', $request->penjualan_id)->first();
        if(!$data_Penjualan){
            $penjualan = DB::table('penjualan')->insert([
                'penjualan_id' => $request->penjualan_id,
             
                'tgl_Penjualan'=> date("Y-m-d"),
                'total_harga' => 0,
                'pelanggan_id' => $request->pelanggan,
                // 'status'=>"pending"
            ]);
        }
       

        $detail= DB::table('detail_penjualan')->insert([
            'penjualan_id' => $request->penjualan_id,
            'produk_id' => $request->produk_,
            'Jumlah_Produk'=> $request->qty,
            'SubTotal'=> $request->qty * $produk->harga,
        ]);
        
        return redirect()->back();
    }

    function data_penjualan(){
        $penjualan = DB::table('pelanggan')
        ->join('penjualan', 'penjualan.penjualan_id', '=', 'pelanggan.penjualan_id')
        ->get();
        // return $penjualan;
        return view ('data-penjualan',['penjualan'=> $penjualan]);
    }


}