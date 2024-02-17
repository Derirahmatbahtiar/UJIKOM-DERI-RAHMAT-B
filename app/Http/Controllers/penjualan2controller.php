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

        $id_jual = "";

        if(!$penjualan){
            $id_jual = '1';
        }else{

            if($penjualan->status == "selesai"){
                $id_jual = $penjualan->penjualan_id + 1;
            }else{
                $id_jual = $penjualan->penjualan_id;
            }
        }

        $detail_penjualan = DB::table('produk')->where("penjualan_id", $id_jual)
        ->join("detail_penjualan","produk.produk_id","=",'detail_penjualan.produk_id')
        ->get();


        return view ('/penjualan2',['produk'=>$produk,'pelanggan'=>$pelanggan ,'penjualan_id' => $id_jual, 'detail_penjualan' => $detail_penjualan]);
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
                'status'=>'proses'
            ]);
  
        }
       

        $detail = DB::table('detail_penjualan')->insert([
            'penjualan_id' => $request->penjualan_id,
            'produk_id' => $request->produk,
            'jumlah_produk'=> $request->qty,
            'SubTotal'=> $request->qty * $produk->harga
        ]);
        
        return redirect()->back();
    }


    function data_penjualan(){
        $penjualan = DB::table('pelanggan')
        ->join('penjualan', 'penjualan.pelanggan_id', '=' , 'pelanggan.pelanggan_id')
        ->get();
        // return $penjualan;
        return view ('data-penjualan',['penjualan'=> $penjualan]);
    }



        function checkout(request $request ){
            $updatedata = DB::table('penjualan')->where('penjualan_id', $request->penjualan_id)->update([
                'status' => 'selesai',
                'total_harga' =>  $request->total_harga
            ]);
            if($updatedata){
                return redirect()->back()->with("deone ga bang", "done");
            }
        }

        function detail_penjualan($id){
            $detail = DB::table('detail_penjualan')
            ->join('produk', 'produk.produk_id', '=' ,'detail_penjualan.produk_id')
            ->join('penjualan', 'penjualan.penjualan_id', '=', 'detail_penjualan.penjualan_id' )
            ->where('detail_penjualan.penjualan_id' , $id)
            ->get();
            return view('/detail-penjualan', ['detail' => $detail] );
            
        }

        function cetak($id){
            $detail = DB::table('detail_penjualan')
            ->join('produk', 'produk.produk_id', '=' ,'detail_penjualan.produk_id')
            ->join('penjualan', 'penjualan.penjualan_id', '=', 'detail_penjualan.penjualan_id' )
            ->where('detail_penjualan.penjualan_id' , $id)
            ->get(); 
            return view('cetak', ['detail' => $detail] );
        }
   
}