<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\produk;

class dashboardcontroller extends Controller
{
//tampilan
  function tampilan(){
    return view('dashboard');
  }


//produk  
    function tampil_produk(){
      $tambahkan = DB::table ('produk')->get();
        return view('data-barang', [ 'tambahkan' => $tambahkan]);
    }

    function proses_produk(request $request){
      $nama_produk = $request-> nama_produk;
      $harga = $request-> harga;
      $stok = $request-> stok;

      DB::table('produk')->insert([
          'nama_produk' => $nama_produk,
          'harga' => $harga,
          'stok' => $stok
      ]);
      return redirect('/data-barang');
  }


//tambah produk  
  function tambah_barang(){
    return view('tambah-produk');
  }


//hapus produk  
  function hapus($id){
    DB::table('produk')->where('produk_id', '=' , $id)->delete();
    return  redirect('/data-barang');
    }

//detail produk
    function detail($id){
      $produk = DB::table('produk')->where('produk_id', '=', $id)->get();
      return view('detail-barang', ['produk' => $produk]);
  }


//update produk  
  function update($id){
    $produk = DB::table('produk')->where('produk_id', '=', $id)->first();
    return view('/update-produk', ['produk' => $produk]);
}

function proses_update(request $request, $id){
    $nama_produk = $request->nama_produk;
    $harga = $request->harga;
    $stok = $request->stok;

    DB::table('produk')->where('produk_id', '=', $id)->update([
        'nama_produk' => $nama_produk,
        'harga' => $harga,
        'stok' => $stok,
    ]); 
    return redirect('/data-barang');
}


//logout
function proses_logout(){
  Auth::guard('admin')->logout();
  return redirect("/login-admin");
}


//detail penjualan
function tampil_dp(){
  return view('/detail-penjualan');
}



}