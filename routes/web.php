<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/peminjaman', [PeminjamanController::class, 'index'])->name('peminjaman');
