<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admincontroller;
use App\Http\Controllers\customerscontroller;
use App\Http\Controllers\dashboardcontroller;
use App\Http\Controllers\penjualancontroller;
use App\Models\produk;
use App\Models\pelanggan;


Route::get('/tampilan',[dashboardcontroller::class, 'tampilan']);

Route::get('/index',[dashboardcontroller::class, 'index']);
Route::get('/data-barang',[dashboardcontroller::class, 'tampil_produk']);
Route::post('/tampil-produk',[dashboardcontroller::class, 'proses_produk']);

Route::get('/nambah-barang',[dashboardcontroller::class, 'tambah_barang']);

Route::get('/hapus/{id}',[dashboardcontroller::class, 'hapus']);
Route::get('/detail/{id}',[dashboardcontroller::class, 'detail']);

Route::get('/update/{id}',[dashboardcontroller::class, 'update']);
Route::POST('/update/{id}',[dashboardcontroller::class, 'proses_update']);


Route::get('/tampil_pelanggan',[customerscontroller::class, 'tampil_pelanggan']);
Route::post('/proses_pelanggan',[customerscontroller::class, 'proses_pelanggan']);
Route::get('/nambah_pelanggan',[customerscontroller::class, 'tambah_pelanggan']);
Route::get('/hapus_pelanggan/{id}',[customerscontroller::class, 'hapus_pelanggan']);
Route::get('/detail_pelanggan/{id}',[customerscontroller::class, 'detail_pelanggan']);

Route::get('/pelanggan',[customerscontroller::class, 'tampil_pelanggan']);
Route::POST('/pelanggan',[customerscontroller::class, 'proses_pelanggan']);

Route::get('/penjualan',[penjualancontroller::class, 'tampil_penjualan']);
Route::POST('/proses_jual',[penjualancontroller::class, 'proses_jual']);


Route::get('/login-admin',[admincontroller::class, 'admin']);
Route::post('/login-admin',[admincontroller::class, 'proses_admin']);
Route::get('/logout/admin',[admincontroller::class, 'proses_logout']);

Route::get('/daftar-admin',[admincontroller::class, 'regist']);
Route::post('/daftar-admin',[admincontroller::class, 'admin_admin']);
