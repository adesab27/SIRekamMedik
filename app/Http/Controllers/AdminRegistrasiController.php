<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminRegistrasiController extends Controller
{
    public function index()
    {
        return view('registrasi'); // Tampilkan halaman registrasi
    }

    public function add()
    {
        return view('registrasi'); // Alternatif untuk tampilkan halaman registrasi (jika dibutuhkan)
    }

    public function create(Request $request)
    {
        $request->validate([
            'namaPasien' => 'required|string|max:255',
            'tanggalLahir' => 'required|date',
            'nomorHandphone' => 'required|string|max:15',
            'alamatPasien' => 'required|string|max:255',
            'keluhan' => 'nullable|string',
            'keperluan' => 'nullable|string',
        ]);

        $add = DB::table('registrasi')->insert([
            'namaPasien' => $request->namaPasien,
            'tanggalLahir' => $request->tanggalLahir,
            'nomorHandphone' => $request->nomorHandphone,
            'alamatPasien' => $request->alamatPasien,
            'keluhan' => $request->keluhan,
            'keperluan' => $request->keperluan,
        ]);

        // Pastikan menggunakan nama rute yang benar
        return $add
            ? redirect()->route('addregistrasibaru')->with('success', 'Data pasien berhasil ditambahkan!')
            : redirect()->route('addregistrasibaru')->with('failed', 'Data pasien gagal ditambahkan!');
    }
}
