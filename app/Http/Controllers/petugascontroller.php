<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class petugascontroller extends Controller
{
    function petugas(){
        return view('petugas_login');
    }

        function proses_petugas(request $request){
            $data = $request->only("username", "password");
            if(Auth::guard("petugas")->attempt($data)){
                return redirect('tampilan');
           }else{
                return redirect('petugas-login')->with("error", "username atau password salah");
           }
    }
}
