<?php

use App\Http\Controllers\asetController;
use App\Http\Controllers\dataPakanController;
use App\Http\Controllers\kesehatanController;
use App\Http\Controllers\keuanganController;
use App\Http\Controllers\landingController;
use App\Http\Controllers\produksiController;
use App\Http\Controllers\staffController;
use App\Http\Controllers\ternakSayaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Landing page
Route::get('/', [landingController::class, 'show']);

//Ternak saya
Route::get('/ternakSaya', [ternakSayaController::class, 'show']);

//Ternak saya - add
Route::get('/ternakSaya/tambah', [ternakSayaController::class, 'addForm']);
Route::post('/ternakSaya/tambah', [ternakSayaController::class, 'store']);

//Ternak saya - detail
Route::get('/ternakSaya/detail/{id}', [ternakSayaController::class, 'detail']);

//Ternak saya - edit
Route::get('/ternakSaya/edit/{id}', [ternakSayaController::class, 'editForm']);
Route::put('/ternakSaya/edit/{id}', [ternakSayaController::class, 'update']);

//Ternak saya - delete
Route::get('/ternakSaya/hapus/{id}', [ternakSayaController::class, 'destroy']);

//Data pakan
Route::get('/dataPakan', [dataPakanController::class, 'show']);

//Data pakan - add
Route::get('/dataPakan/tambah', [dataPakanController::class, 'addForm']);
Route::post('/dataPakan/tambah', [dataPakanController::class, 'store']);

//Data pakan - detail
Route::get('/dataPakan/detail/{id}', [dataPakanController::class, 'detail']);

//Data pakan - edit
Route::get('/dataPakan/edit/{id}', [dataPakanController::class, 'editForm']);
Route::put('/dataPakan/edit/{id}', [dataPakanController::class, 'update']);

//Data pakan - delete
Route::get('/dataPakan/hapus/{id}', [dataPakanController::class, 'destroy']);

//Produksi
Route::get('/produksi', [produksiController::class, 'show']);

//Produksi - add
Route::get('/produksi/tambah', [produksiController::class, 'addForm']);
Route::post('/produksi/tambah', [produksiController::class, 'store']);

//Produksi - detail
Route::get('/produksi/detail/{id}', [produksiController::class, 'detail']);

//Produksi - edit
Route::get('/produksi/edit/{id}', [produksiController::class, 'editForm']);
Route::put('/produksi/edit/{id}', [produksiController::class, 'update']);

//Produksi - delete
Route::get('/produksi/hapus/{id}', [produksiController::class, 'destroy']);

//Keuangan
Route::get('/keuangan', [keuanganController::class, 'show']);

//Keuangan - add
Route::get('/keuangan/tambah', [keuanganController::class, 'addForm']);
Route::post('/keuangan/tambah', [keuanganController::class, 'store']);

//Keuangan - detail
Route::get('/keuangan/detail/{id}', [keuanganController::class, 'detail']);

//Keuangan - edit
Route::get('/keuangan/edit/{id}', [keuanganController::class, 'editForm']);
Route::put('/keuangan/edit/{id}', [keuanganController::class, 'update']);

//Keuangan - delete
Route::get('/keuangan/hapus/{id}', [keuanganController::class, 'destroy']);

//Aset
Route::get('/aset', [asetController::class, 'show']);

//Kesehatan
Route::get('/kesehatan', [kesehatanController::class, 'show']);

//Staff
Route::get('/staff', [staffController::class, 'show']);


