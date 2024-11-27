<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminRegistrasiController;
use App\Http\Controllers\AdminDatapasienController;
use App\Http\Controllers\AdminForm1Controller;
use App\Http\Controllers\AuthController;

//Login
Route::get('/login', [AuthController::class, 'index'])->name('indexLogin');
Route::post('/login', [AuthController::class, 'postLogin'])->name('postLogin');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Registrasi
Route::get('/registrasi', [AdminRegistrasiController::class, 'index'])->name('indexRegistrasi');
Route::get('/registrasi/tambah', [AdminRegistrasiController::class, 'add'])->name('addregistrasibaru');
Route::post('/registrasi', [AdminRegistrasiController::class, 'create'])->name('registrasi.create');


// Data Pasien
Route::get('/datapasien', [AdminDatapasienController::class, 'index'])->name('datapasien');
Route::get('/datapasien/edit/{id}', [AdminDatapasienController::class, 'editDatapasien'])->name('editDatapasien');
Route::post('/datapasien/update/{id}', [AdminDatapasienController::class, 'updateDatapasien'])->name('updateDatapasien');
// Route::delete('/datapasien/delete/{id}', [AdminDatapasienController::class, 'delete'])->name('deleteDatapasien');
Route::delete('/datapasien/delete/{id}', [AdminDatapasienController::class, 'delete'])->name('deleteDatapasien');

Route::get('/datapasien/observasi/export/{id}', [AdminDatapasienController::class, 'export_pdf'])->name('export_pdf');

// Form Observasi
Route::get('/observasi/form1/{id}', [AdminForm1Controller::class, 'index'])->name('form1');
Route::post('/observasi/form1', [AdminForm1Controller::class, 'store'])->name('form1.store');
