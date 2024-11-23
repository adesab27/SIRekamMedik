<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminRegistrasiController;
use App\Http\Controllers\AdminDatapasienController;
use App\Http\Controllers\AdminForm1Controller;
use App\Http\Controllers\AdminForm2Controller;
use App\Http\Controllers\AdminForm3Controller;
use App\Http\Controllers\AdminForm4Controller;
use App\Http\Controllers\AdminForm5Controller;
use App\Http\Controllers\AuthController;

// Login
Route::get('/login', [AuthController::class, 'index'])->name('indexLogin'); // Halaman login (GET)
Route::post('/login', [AuthController::class, 'postLogin'])->name('postLogin'); // Proses login (POST)
Route::get('/logout', [AuthController::class, 'logout'])->name('logout'); // Logout (GET)

// Registrasi
Route::get('/registrasi', [AdminRegistrasiController::class, 'index'])->name('indexRegistrasi');
Route::get('/registrasi/tambah', [AdminRegistrasiController::class, 'add'])->name('addregistrasibaru');
Route::post('/registrasi', [AdminRegistrasiController::class, 'create'])->name('registrasi.create');
// Route::post('/registrasi', [AdminRegistrasiController::class, 'create'])->name('registrasi.create');


// Data Pasien
Route::get('/datapasien', [AdminDatapasienController::class, 'index'])->name('datapasien');
Route::get('/datapasien/edit/{id}', [AdminDatapasienController::class, 'editDatapasien'])->name('editDatapasien');
Route::post('/datapasien/update/{id}', [AdminDatapasienController::class, 'updateDatapasien'])->name('updateDatapasien');
Route::delete('/datapasien/delete/{id}', [AdminDatapasienController::class, 'delete'])->name('deleteDatapasien');
Route::delete('/datapasien/observasi/export', [AdminDatapasienController::class, 'export_pdf'])->name('export_pdf');

// Form Observasi
Route::get('/observasi/form1', [AdminForm1Controller::class, 'index'])->name('form1');
Route::post('/observasi/form1', [AdminForm1Controller::class, 'store'])->name('form1.store');

// Route::get('/observasi/form2', [AdminForm2Controller::class, 'index'])->name('form2');
// Route::post('/observasi/form2', [AdminForm2Controller::class, 'store'])->name('form2.store');

// Route::get('/observasi/form3', [AdminForm3Controller::class, 'index'])->name('form3');
// Route::post('/observasi/form3', [AdminForm3Controller::class, 'store'])->name('form3.store');

// Route::get('/observasi/form4', [AdminForm4Controller::class, 'index'])->name('form4');
// Route::post('/observasi/form4', [AdminForm4Controller::class, 'store'])->name('form4.store');

// Route::get('/observasi/form5', [AdminForm5Controller::class, 'index'])->name('form5');
// Route::post('/observasi/form5', [AdminForm5Controller::class, 'store'])->name('form5.store');
