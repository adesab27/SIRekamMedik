<?php

namespace App\Http\Controllers;

use App\Models\Registrasi;
use Illuminate\Support\Facades\Auth; // Tambahkan import Auth

class AdminLaporanController extends Controller
{
    public function index()
    {
        $dataRegistrasi = Registrasi::orderBy('created_at', 'asc')->get(); // Urutkan berdasarkan tanggal (ascending)
        $username = Auth::user()->name; // Ambil nama user yang sedang login
        return view('laporanpasien', compact('dataRegistrasi', 'username'));
    }
}

