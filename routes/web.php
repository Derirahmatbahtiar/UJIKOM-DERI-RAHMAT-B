<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admincontroller;
use App\Http\Controllers\dashboardcontroller;



// Route::get('/admin-login', function () {
//     return view('admin-login');
// });

Route::get('/login-admin',[admincontroller::class, 'admin']);
Route::post('/login-admin',[admincontroller::class, 'proses_admin']);

Route::get('/tambah-admin',[admincontroller::class, 'tambah_admin']);
Route::post('/tambah-admin',[admincontroller::class, 'proses_admin']);

Route::get('/tampilan',[dashboardcontroller::class, 'dashboard']);