<?php

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
Route::get('/', function () {
    return view('landingPage');
});

//Ternak saya
Route::get('/ternakSaya', function () {
    return view('ternakSaya');
});

//Data pakan
Route::get('/dataPakan', function(){
    return view('dataPakan');
});

//Produksi
Route::get('/produksi', function () {
    return view('produksi');
});

//Keuangan
Route::get('/keuangan', function () {
    return view('keuangan');
});

//Perlengkapan
Route::get('/aset', function(){
    return view('aset');
});

//Kesehatan
Route::get('/kesehatan', function () {
    return view('kesehatan');
});

//Staff
Route::get('/staff', function () {
    return view('staff');
});


