<?php

use App\Http\Controllers\KendaraanController;
use Illuminate\Support\Facades\Route;

// Route halaman utama
Route::get('/', function () {
    return redirect()->route('kendaraan.index');
});

// Route resource untuk CRUD kendaraan
Route::resource('kendaraan', KendaraanController::class);