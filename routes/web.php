<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PemeriksaanController;

Route::get('/', function () {
    return view('welcome');
});
// Dashboard
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Pegawai
Route::get('pegawai', [PegawaiController::class, 'index'])->name('pegawai');
    // Create Pegawai
    Route::get('pegawai/create', [PegawaiController::class, 'create'])->name('pegawaiCreate');
    // Store Pegawai
    Route::post('pegawai/store', [PegawaiController::class, 'store'])->name('pegawaiStore');
    // Edit
    Route::get('pegawai/edit/{id}', [PegawaiController::class, 'edit'])->name('pegawaiEdit');
    // Update
    Route::post('pegawai/update/{id}', [PegawaiController::class, 'update'])->name('pegawaiUpdate');
    // Delete
    Route::delete('pegawai/delete/{id}', [PegawaiController::class, 'delete'])->name('pegawaiDelete');

// Pemeriksaan
Route::get('pemeriksaan', [PemeriksaanController::class, 'index'])->name('pemeriksaan');
