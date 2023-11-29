<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\TenanController;
use App\Http\Controllers\TransaksiController;

Route::get('/', function () {
    return view('welcome');
});

//Barang
Route::get('/barang', [BarangController::class, 'viewData'])->name('barang.view');
Route::get('/barang/form-input', [BarangController::class, 'formInput'])->name('barang.form-input');
Route::post('/barang/input', [BarangController::class, 'inputData'])->name('barang.input');
Route::get('/barang/form-update/{id}', [BarangController::class, 'formUpdate'])->name('barang.form-update');
Route::put('/barang/update/{id}', [BarangController::class, 'updateData'])->name('barang.update');
Route::delete('/barang/delete/{id}', [BarangController::class, 'deleteData'])->name('barang.delete');

//Kasir
Route::get('/kasir', [KasirController::class, 'viewData'])->name('kasir.view');

//Tenan
Route::get('/tenan', [TenanController::class, 'viewData'])->name('tenan.view');

//Transaksi
// Rute untuk menampilkan formulir input transaksi
Route::get('/transaksi/form-input', [TransaksiController::class, 'formInput'])->name('transaksi.formInput');
// Rute untuk menyimpan data transaksi baru
Route::post('/transaksi/input-data', [TransaksiController::class, 'inputData'])->name('transaksi.inputData');
// Rute untuk menampilkan struk berdasarkan kodeNota
Route::get('/transaksi/view-struk/{kodeNota}', [TransaksiController::class, 'viewStruk'])->name('transaksi.viewStruk');
// Rute untuk menampilkan data transaksi
Route::get('/transaksi/view', [TransaksiController::class, 'viewData'])->name('transaksi.view');
