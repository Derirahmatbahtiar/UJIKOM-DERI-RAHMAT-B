<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admincontroller;
use App\Http\Controllers\dashboardcontroller;



// Route::get('/login-admin', function () {
//     return view('login-admin');
// });

// Route::get('/login-admin',[admincontroller::class, 'admin']);
// Route::post('/login-admin',[admincontroller::class, 'proses_admin']);

Route::get('/login-admin',[admincontroller::class, 'admin']);
Route::post('/login-admin',[admincontroller::class, 'proses_admin']);

Route::get('/tambah-admin',[admincontroller::class, 'tambah_admin']);
Route::post('/tambah-admin',[admincontroller::class, 'proses_admin']);

Route::get('/tampilan',[dashboardcontroller::class, 'dashboard']);
Route::get('/data-barang',[dashboardcontroller::class, 'data_barang']);
Route::get('/detail-barang',[dashboardcontroller::class, 'detail_barang']);