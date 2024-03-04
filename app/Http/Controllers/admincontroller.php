<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class admincontroller extends Controller
{
    function admin(){
        return view('login-admin');
    }

        function proses_admin(request $request){
            $data = $request->only("username", "password");
            if(Auth::attempt($data)){
                return redirect('tampilan');
           }else{
                return redirect('login-admin')->with("error", "username atau password salah");
           }
    }



    function regist(){
        return view('daftar-admin');
    }

    function regist_admin(request $request){
        $nama = $request-> nama;
        $username = $request-> username;
        $password = $request-> password;
        $telp = $request-> telp;
        $status = $request-> status;

        DB::table('admin')->insert([
            'nama_admin' => $nama,
            'username' => $username,
            'password' => hash::make($password),
            'telp' => $telp,
            'status' => 'admin'

        ]);
        return redirect('/login-admin');
    }

    // function petugas(){
    //     return view('login-petugas');
    // }

    //     function proses_petugas(request $request){
    //         $data = $request->only("username", "password");
    //         if(Auth::attempt($data)){
    //             return redirect('tampilan');
    //        }else{
    //             return redirect('login-petugas')->with("error", "username atau password salah");
    //        }
    // }

}



