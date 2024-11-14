<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rhamillahir;

class AdminForm3Controller extends Controller
{
    public function index()
    {
        // Menampilkan halaman form atau daftar data (sesuai kebutuhan Anda)
        return view('observasi.form3.index'); // Sesuaikan dengan view yang benar
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'usia_ibu' => 'nullable|integer',
            'berat_badan_ibu' => 'nullable|numeric',
            'hasil_pemeriksaan' => 'nullable|string',
            'proses_persalinan' => 'nullable|in:spontan,forceps,vacuum,c-section',
            'lama_kehamilan' => 'nullable|integer',
            'berat_badan_lahir' => 'nullable|numeric',
            'panjang_badan_lahir' => 'nullable|numeric',
            'lingkar_kepala_lahir' => 'nullable|numeric',
            'skor_apgar' => 'nullable|integer',
            'catatan_tambahan' => 'nullable|string',
        ]);

        // Menyimpan data ke tabel rhamillahir
        Rhamillahir::create([
            'usia_ibu' => $request->input('usia_ibu'),
            'berat_badan_ibu' => $request->input('berat_badan_ibu'),
            'hasil_pemeriksaan' => $request->input('hasil_pemeriksaan'),
            'keluhan_keguguran' => $request->has('keluhan_keguguran'),
            'keluhan_stress' => $request->has('keluhan_stress'),
            'keluhan_obat' => $request->has('keluhan_obat'),
            'proses_persalinan' => $request->input('proses_persalinan'),
            'lama_kehamilan' => $request->input('lama_kehamilan'),
            'berat_badan_lahir' => $request->input('berat_badan_lahir'),
            'panjang_badan_lahir' => $request->input('panjang_badan_lahir'),
            'lingkar_kepala_lahir' => $request->input('lingkar_kepala_lahir'),
            'skor_apgar' => $request->input('skor_apgar'),
            'komplikasi_kelahiran' => $request->has('komplikasi_kelahiran'),
            'menangis_lahir' => $request->has('menangis_lahir'),
            'perawatan_khusus' => $request->has('perawatan_khusus'),
            'catatan_tambahan' => $request->input('catatan_tambahan'),
        ]);

        // Redirect ke halaman berikutnya dengan pesan sukses
        return redirect()->route('form4')->with('success', 'Data berhasil disimpan.');
    }
}
