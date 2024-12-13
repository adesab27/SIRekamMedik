<?php

namespace App\Http\Controllers;

use App\Models\Registrasi;
use Illuminate\Support\Facades\Auth;

class AdminLaporanController extends Controller
{
    public function index()
    {
        if (Auth::check()) { // Periksa apakah pengguna sudah login
            $username = Auth::user()->name; // Ambil nama pengguna yang sedang login
            $dataRegistrasi = Registrasi::orderBy('created_at', 'asc')->get(); // Urutkan berdasarkan tanggal (ascending)

            return view('laporanpasien', compact('dataRegistrasi', 'username'));
        } else {
            return redirect()->route('indexLogin')->with('error', 'Silakan Login'); // Arahkan ke halaman login jika tidak login
        }
    }
}
