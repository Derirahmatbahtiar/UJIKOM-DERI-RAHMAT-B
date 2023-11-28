<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardcontroller extends Controller
{
   function dashboard(){
    return view('/dashboard');
   }
}
