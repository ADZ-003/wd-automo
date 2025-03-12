<?php

use App\Http\Controllers\Mobilcontrol;
use App\Http\Controllers\Barangcontrol;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(Mobilcontrol::class)->group(function () {
    Route::get('/', 'index')->name("mobil.index");
    Route::get('/c_mobil', 'create');
    Route::post('/mobil', 'store')->name('mobil.store');
    Route::get('d_mobil/{id}','edit')->name('edit.mobil');
    Route::put('d_mobil','update')->name("mobil.update");
    Route::delete('d_mobil/{id}','destroy')->name("mobil.destroy");
});

Route::controller(Barangcontrol::class)->group(function () {
    Route::get('/barang', 'index')->name("barang.index");
    Route::get('/c_barang', 'create');
    Route::post('/barang', 'store')->name('barang.store');
    Route::get('d_barang/{id}','edit')->name('edit.barang');
    Route::put('d_barang','update')->name("barang.update");
    Route::delete('d_barang/{id}','destroy')->name("barang.destroy");
});
