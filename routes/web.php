<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminRegistrasiController;
use App\Http\Controllers\AdminDatapasienController;
use App\Http\Controllers\AdminForm1Controller;
use App\Http\Controllers\AdminForm2Controller;
use App\Http\Controllers\AdminForm3Controller;
use App\Http\Controllers\AdminForm4Controller;
use App\Http\Controllers\AdminForm5Controller;


Route::get('/registrasi', [AdminRegistrasiController::class,'index']);
Route::get('/datapasien', [AdminDatapasienController::class, 'index'])->name('datapasien');
Route::get('/observasi/form1', [AdminForm1Controller::class,'index'])->name('form1');
Route::get('/observasi/form2', [AdminForm2Controller::class, 'index'])->name('form2');
Route::get('/observasi/form3', [AdminForm3Controller::class,'index'])->name('form3');
Route::get('/observasi/form4', [AdminForm4Controller::class,'index'])->name('form4');
Route::get('/observasi/form5', [AdminForm5Controller::class,'index'])->name('form5');

// Registrasi
Route::get('/registrasi', [AdminRegistrasiController::class, 'index']);
Route::get('/registrasi/tambah', [AdminRegistrasiController::class, 'add'])->name('addregistrasibaru');
Route::post('/registrasi', [AdminRegistrasiController::class, 'create'])->name('datapasien');

// Data Pasien
Route::get('/datapasien', [AdminDatapasienController::class, 'index'])->name('datapasien');
Route::get('/datapasien/edit/{id}', [AdminDatapasienController::class, 'editDatapasien'])->name('editDatapasien');
Route::post('/datapasien/update/{id}', [AdminDatapasienController::class, 'updateDatapasien'])->name('updateDatapasien');
Route::delete('/datapasien/delete/{id}', [AdminDatapasienController::class, 'delete'])->name('deleteDatapasien');

// Form Observasi Form1 (Tabel form1)
Route::get('/observasi/form1', [AdminForm1Controller::class, 'index'])->name('form1');
Route::post('/observasi/form1', [AdminForm1Controller::class, 'store'])->name('form1.store');

// Form Observasi Form2 (Tabel form2)
Route::get('/observasi/form2', [AdminForm2Controller::class, 'index'])->name('form2');
Route::post('/observasi/form2', [AdminForm2Controller::class, 'store'])->name('form2.store');

// Form Observasi Form3 (Tabel form3)
Route::get('/observasi/form3', [AdminForm3Controller::class, 'index'])->name('observasi.form3.index');
Route::post('/observasi/form3', [AdminForm3Controller::class, 'store'])->name('observasi.form3.store');

// Form Observasi Form4 (Tabel form4)
Route::get('/observasi/form4', [AdminForm4Controller::class, 'index'])->name('form4');
Route::post('/observasi/form4', [AdminForm4Controller::class, 'store'])->name('form4.store');

// Form Observasi Form5 (Tabel form5)
Route::get('/observasi/form5', [AdminForm5Controller::class, 'index'])->name('form5');
Route::post('/observasi/form5', [AdminForm5Controller::class, 'store'])->name('form5.store');
