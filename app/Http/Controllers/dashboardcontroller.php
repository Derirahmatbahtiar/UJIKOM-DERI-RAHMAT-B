<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\produk;

class dashboardcontroller extends Controller
{
   function dashboard(){
    return view('/dashboard');
   }


function data_barang(){
   return view('/data-barang');
  }


  function detail_barang(){
   return view('/detail-barang');
  }

function hapus($id){
   DB::table('pengaduan')->where('id_pengaduan', '=' , $id)->delete();
   return  redirect('/home-pengaduan');
   }

 function index(){
      $produk = produk::all();
      return view('data-barang', [ 'tambah' => $tambah]);
 
  }
   
   function tampil_barang(){
     
      return view('data-barang');
  }

function proses_tambah(request $request){
    $nama_produk = $request-> nama;
    $harga = $request-> harga;
    $stok = $request-> stok;

    DB::table('produk')->insert([
        'nama_produk' => $nama,
        'harga' => $harga,
        'stok' => $stok,
    ]);
    return redirect('/data-barang');
}

}