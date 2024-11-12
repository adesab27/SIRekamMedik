<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminRegistrasiController;
use App\Http\Controllers\AdminDatapasienController;
use App\Http\Controllers\AdminForm1Controller;
use App\Http\Controllers\AdminForm2Controller;
use App\Http\Controllers\AdminForm3Controller;
use App\Http\Controllers\AdminForm4Controller;

Route::get('/registrasi', [AdminRegistrasiController::class,'index']);
Route::get('/datapasien', [AdminDatapasienController::class, 'index'])->name('datapasien');
Route::get('/observasi/form1', [AdminForm1Controller::class,'index']);
Route::get('/observasi/form2', [AdminForm2Controller::class,'index']);
Route::get('/observasi/form3', [AdminForm3Controller::class,'index']);
Route::get('/observasi/form4', [AdminForm4Controller::class,'index']);

Route::get('/registrasi', [AdminRegistrasiController::class, 'add'])->name('addregistrasibaru');
Route::post('/datapasien', [AdminRegistrasiController::class, 'create'])->name('datapasien');


Route::get('/datapasien/edit/{id}', [AdminDatapasienController::class, 'editDatapasien'])->name('editDatapasien');
Route::post('/datapasien/update/{id}', [AdminDatapasienController::class, 'updateDatapasien'])->name('updateDatapasien');
Route::delete('/datapasien/delete/{id}', [AdminDatapasienController::class, 'delete'])->name('deleteDatapasien');