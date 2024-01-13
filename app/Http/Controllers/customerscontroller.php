<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\pelanggan;

class customerscontroller extends Controller
{
  function tampil_pelanggan(){
    $pelanggan = DB::table ('pelanggan')->get();
    return view('customers' , [ 'pelanggan' => $pelanggan]);
  }

  function proses_pelanggan(request $request){
    $nama_pelanggan = $request-> nama_pelanggan;
    $alamat = $request-> alamat;
    $no_telp = $request-> no_telp;

    DB::table('pelanggan')->insert([
        'nama_pelanggan' => $nama_pelanggan,
        'alamat' => $alamat,
        'no_telp' => $no_telp
    ]);
    return redirect('tampil_pelanggan');
}


    function tambah_pelanggan(){
      $pelanggan = DB::table ('pelanggan')->get();
      return view('tambah-customers' , [ 'pelanggan' => $pelanggan]);
    }

    
    function hapus_pelanggan($id){
      DB::table('pelanggan')->where('pelanggan_id', '=' , $id)->delete();
      return redirect('/tampil_pelanggan');
      }

      function detail_pelanggan($id){
        $pelanggan = DB::table('pelanggan')->where('pelanggan_id', '=', $id)->get();
        return view('detail-pelanggan', ['pelanggan' => $pelanggan]);
    }


//update pelanggan    
    function update($id){
      $produk = DB::table('pelanggan')->where('pelanggan_id', '=', $id)->first();
      return view('/update-pelanggan', ['pelanggan' => $pelanggan]);
  }
  
  function proses_update(request $request, $id){
      $nama_pelanggan = $request->nama_pelanggan;
      $alamat = $request->alamat;
      $no_telp = $request->no_telp;
  
      DB::table('produk')->where('produk_id', '=', $id)->update([
          'nama_pelanggan' => $nama_pelanggan,
          'alamat' => $alamat,
          'no_telp' => $no_telp,
      ]); 
      return redirect('/data-barang');
  }


}
