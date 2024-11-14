<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InfoAnak;

class AdminForm1Controller extends Controller
{
    public function index() {
        return view('observasi/form1');
    }

    public function store(Request $request) {
        $request->validate([
            'nama_anak' => 'required|string|max:255',
            'tempat_lahir' => 'required|string|max:255',
            'nama_panggilan' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|string|max:50',
            'umur_anak' => 'required|string|max:50',
            'nama_ayah' => 'required|string|max:255',
            'nama_ibu' => 'required|string|max:255',
            'usia_ayah' => 'required|string|max:50',
            'usia_ibu' => 'required|string|max:50',
            'agama_ayah' => 'required|string|max:50',
            'agama_ibu' => 'required|string|max:50',
            'pekerjaan_ayah' => 'required|string|max:255',
            'pekerjaan_ibu' => 'required|string|max:255',
            'alamat_lengkap' => 'required|string',
        ]);

        // Menyimpan data ke database
        InfoAnak::create([
            'nama_anak' => $request->nama_anak,
            'tempat_lahir' => $request->tempat_lahir,
            'nama_panggilan' => $request->nama_panggilan,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'umur_anak' => $request->umur_anak,
            'nama_ayah' => $request->nama_ayah,
            'nama_ibu' => $request->nama_ibu,
            'usia_ayah' => $request->usia_ayah,
            'usia_ibu' => $request->usia_ibu,
            'agama_ayah' => $request->agama_ayah,
            'agama_ibu' => $request->agama_ibu,
            'pekerjaan_ayah' => $request->pekerjaan_ayah,
            'pekerjaan_ibu' => $request->pekerjaan_ibu,
            'alamat_lengkap' => $request->alamat_lengkap,
        ]);

        return redirect()->route('form2')->with('success', 'Data berhasil disimpan.');
    }
}
