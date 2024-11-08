<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/registrasi', function () {
    return view('registrasi');
});

Route::get('/datapasien', function () {
    return view('datapasien');
});

Route::get('/observasi/form1', function () {
    return view('observasi/form1');
});

Route::get('/observasi/form2', function () {
    return view('observasi/form2');
});

Route::get('/observasi/form3', function () {
    return view('observasi/form3');
});

Route::get('/observasi/form4', function () {
    return view('observasi/form4');
});