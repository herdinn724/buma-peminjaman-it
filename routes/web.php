<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeminjamanController;


Route::get('/', function () {
    return view('welcome');
});

// halamanpertama
Route::get('/peminjaman', [PeminjamanController::class, 'index'])->name('peminjaman');

// halamanpegawai
Route::get('/tambahpinjam', [PeminjamanController::class, 'tambahpinjam'])->name('tambahpinjam');

// tambah data
Route::post('/insertdata', [PeminjamanController::class, 'insertdata'])->name('insertdata');

// update data
Route::get('/tampilkandata/{id}', [PeminjamanController::class, 'tampilkandata'])->name('tampilkandata');
Route::post('/updatedata/{id}', [PeminjamanController::class, 'updatedata'])->name('updatedata');

Route::get('/delete/{id}', [PeminjamanController::class, 'delete'])->name('delete');

