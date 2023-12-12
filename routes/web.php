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

//Data pakan
Route::get('/dataPakan', [dataPakanController::class, 'show']);

//Produksi
Route::get('/produksi', [produksiController::class, 'show']);

//Keuangan
Route::get('/keuangan', [keuanganController::class, 'show']);

//Aset
Route::get('/aset', [asetController::class, 'show']);

//Kesehatan
Route::get('/kesehatan', [kesehatanController::class, 'show']);

//Staff
Route::get('/staff', [staffController::class, 'show']);


