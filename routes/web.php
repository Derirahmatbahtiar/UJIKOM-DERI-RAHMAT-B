<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admincontroller;
use App\Http\Controllers\customerscontroller;
use App\Http\Controllers\dashboardcontroller;
use App\Http\Controllers\penjualancontroller;
use App\Http\Controllers\penjualan2controller;

use App\Models\produk;
use App\Models\pelanggan;
use App\Models\petugas;


Route::middleware(['auth'])->group(function(){

//produk dashboard   
Route::get('/tampilan',[dashboardcontroller::class, 'tampilan']);
Route::get('/index',[dashboardcontroller::class, 'index']);
Route::get('/data-barang',[dashboardcontroller::class, 'tampil_produk']);
Route::post('/tampil-produk',[dashboardcontroller::class, 'proses_produk']);
Route::get('/nambah-barang',[dashboardcontroller::class, 'tambah_barang']);
Route::get('/hapus/{id}',[dashboardcontroller::class, 'hapus']);
Route::get('/detail/{id}',[dashboardcontroller::class, 'detail']);
Route::get('/update/{id}',[dashboardcontroller::class, 'update']);
Route::POST('/update/{id}',[dashboardcontroller::class, 'proses_update']);
// Route::get('/hapus-pr/{id}',[dashboardcontroller::class, 'hapus_pr']);
// Route::get('/trash-produk',[dashboardcontroller::class, 'trash']);
// Route::get('/restore-produk/{id}',[dashboardcontroller::class, 'restore']);




//pelanggan
Route::get('/tampil_pelanggan',[customerscontroller::class, 'tampil_pelanggan']);
Route::post('/proses_pelanggan',[customerscontroller::class, 'proses_pelanggan']);
Route::get('/nambah_pelanggan',[customerscontroller::class, 'tambah_pelanggan']);
Route::get('/hapus_pelanggan/{id}',[customerscontroller::class, 'hapus_pelanggan']);
Route::get('/detail_pelanggan/{id}',[customerscontroller::class, 'detail_pelanggan']);
Route::get('/update_pel/{id}',[customerscontroller::class, 'update_pelanggan']);
Route::post('/update_pel/{id}',[customerscontroller::class, 'proses_update_p']);
Route::get('/pelanggan',[customerscontroller::class, 'tampil_pelanggan']);
Route::POST('/pelanggan',[customerscontroller::class, 'proses_pelanggan']);

//penjualan
Route::get('/penjualan2',[Penjualan2Controller::class,'penjualan2']);
Route::get('/hapus-pen/{id}',[penjualan2controller::class, 'hapus_pen']);
Route::post('/tambah-penjualan',[Penjualan2Controller::class,'tambah']);
Route::get('/data-penjualan',[Penjualan2Controller::class,'data_penjualan']);
Route::post('/checkout',[Penjualan2Controller::class,'checkout']);
Route::get('/detail-p/{id}',[Penjualan2Controller::class,'detail_penjualan']);
Route::get('/cetak/{id}',[Penjualan2Controller::class,'cetak']);
Route::get('/penjualan',[PenjualanController::class,'tampil_penjualan']);



});



Route::get('/login-admin',[admincontroller::class, 'admin'])->name('login');
Route::post('/login-admin',[admincontroller::class, 'proses_admin']);


Route::get('/daftar-admin',[admincontroller::class, 'regist']);
Route::post('/daftar-admin',[admincontroller::class, 'regist_admin']);

Route::get('/logout/admin',[admincontroller::class, 'proses_logout']);

