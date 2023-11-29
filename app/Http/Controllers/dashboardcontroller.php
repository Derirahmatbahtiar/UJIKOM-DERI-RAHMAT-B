<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}