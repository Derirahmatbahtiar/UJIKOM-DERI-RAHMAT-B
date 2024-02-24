<?php

namespace App\Http\Controllers;

use App\Http\Controllers\customerscontroller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\produk;

class dashboardcontroller extends Controller
{
//tampilan
  function tampilan(){

$admin = DB::table('admin')->get();
$total_admin = count ($admin);

$produk = DB::table('produk')->get();
$total_produk = count ($produk);

$pelanggan = DB::table('pelanggan')->get();
$total_pelanggan = count ($pelanggan);

$penjualan = DB::table('penjualan')->get();
$total_penjualan = count ($penjualan);

    return view('dashboard', ['total_admin' => $total_admin, 'total_produk' => $total_produk, 'total_pelanggan' => $total_pelanggan, 'total_penjualan' => $total_penjualan]);
  }


//produk  
    function tampil_produk(){
      $produk = DB::table ('produk')->where('status', 'tampil')->get();
        return view('data-barang', [ 'produk' => $produk]);
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
    DB::table('produk')->where('id', '=' , $id)->delete();
    return  redirect('/data-barang');
    }

//detail produk
    function detail($id){
      $produk = DB::table('produk')->where('id', '=', $id)->get();
      return view('detail-barang', ['produk' => $produk]);
  }


//update produk  
  function update($id){
    $produk = DB::table('produk')->where('id', '=', $id)->first();
    return view('/update-produk', ['produk' => $produk]);
}

function proses_update(request $request, $id){
    $nama_produk = $request->nama_produk;
    $harga = $request->harga;
    $stok = $request->stok;

    DB::table('produk')->where('id', '=', $id)->update([
        'nama_produk' => $nama_produk,
        'harga' => $harga,
        'stok' => $stok,
    ]); 
    return redirect('/data-barang');
}

//replace
function trash(request $request){
  $produk = DB::table('produk')->where('status', 'dihapus')->get();
// return $produk;
  return view('/trash', ['produk' => $produk]);
}

function restore(request $request, $id){
  $produk = produk::withTrashed()->find($id)->restore();
  DB::table('produk')->where('id', '=', $id)->update([
      'status' => "tampil",
      'deleted_at' => NULL
]);
  return redirect()->back();
}

//delete update
function hapus_pr($id){
  $produk = produk::find($id);
  $produk->delete($id);
  $produk = DB::table('produk')->where('id', '=', $id)->update([
    'status' => "dihapus",
  ]);
  return redirect()->back();
}


//logout
function proses_logout(){
  Auth::guard('admin')->logout();
  return redirect("/login-admin");
}





}