<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class petugascontroller extends Controller
{
    function loginpetugas(){
        return view('petugas_login');
    }

        function proses_petugas(request $request){
            $data = $request->only("username", "password");
            if(Auth::guard("petugas")->attempt($data)){
                return redirect('home-petugas');
           }else{
                return redirect('petugas-login')->with("error", "username atau password salah");
           }
    }
}
