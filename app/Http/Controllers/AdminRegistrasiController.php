<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminRegistrasiController extends Controller
{
    public function add()
    {
        return view('registrasi'); // renders the registration form
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

        return $add
            ? redirect()->route('addregistrasibaru')->with('success', 'Data pasien berhasil ditambahkan!')
            : redirect()->route('addregistrasibaru')->with('failed', 'Data pasien gagal ditambahkan!');
    }

    // Dalam controller Anda, misalnya pada metode store
    public function store(Request $request)
    {
        // Validasi dan simpan data
        try {
            DB::table('registrasi')->insert([
                'namaPasien' => $request->namaPasien,
                'tanggalLahir' => $request->tanggalLahir,
                'alamatPasien' => $request->alamatPasien,
                'nomorHandphone' => $request->nomorHandphone,
                'keluhan' => $request->keluhan,
                'keperluan' => $request->keperluan,
            ]);

            return redirect()->route('datapasien')->with('success', 'Data berhasil disimpan.');
        } catch (\Exception $e) {
            return redirect()->route('datapasien')->with('failed', 'Gagal menyimpan data.');
        }
    }

}
