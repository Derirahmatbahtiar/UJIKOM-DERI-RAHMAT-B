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

        $datalogin = $request->only("username", "password");
        if(Auth::attempt($datalogin)){
            return redirect("/dashboard");
        }else{
            return redirect("/admin-login")->with("error", "username atau ppassword salah");
        }
    }
}


function tambah_admin(){
    return view('daftar-admin');
}

function proses_admin(request $request){
    $nama = $request-> nama;
    $username = $request-> username;
    $password = $request-> password;
    $telp = $request-> telp;

    DB::table('admin')->insert([
        'nama_admin' => $nama,
        'username' => $username,
        'password' => hash::make($password),
        'telp' => $telp
    ]);
    return redirect('/login-admin');
}



