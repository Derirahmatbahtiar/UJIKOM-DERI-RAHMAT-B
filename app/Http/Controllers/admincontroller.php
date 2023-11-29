<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class admincontroller extends Controller
{
    function admin(){
        return view('login-admin');
    }

        function proses_admin(request $request){
            $data = $request->only("username", "password");
            if(Auth::guard("admin")->attempt($data)){
                return redirect('tampilan');
           }else{
                return redirect('login-admin')->with("error", "username atau password salah");
           }
    }

}



