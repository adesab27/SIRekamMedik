<?php

namespace App\Http\Controllers;

use App\Models\Datalains;
use Illuminate\Http\Request;

class AdminForm2Controller extends Controller
{
    public function index() {
        return view('observasi/form2');
    }
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'diagnosa_oleh' => 'nullable|string',
            'diagnosa_usia' => 'nullable|string',
            'diagnosa_diberikan' => 'nullable|string',
            'nama_saudara' => 'nullable|string',
            'usia_saudara' => 'nullable|string',
            'jenis_kelamin_saudara' => 'nullable|string',
            'special_need_saudara' => 'nullable|string',
            'nama_sekolah' => 'nullable|string',
            'kelas' => 'nullable|string',
            'nama_guru' => 'nullable|string',
            'telp_guru' => 'nullable|string',
            'jenis_terapi' => 'nullable|string',
            'nama_terapis' => 'nullable|string',
            'durasi_terapi' => 'nullable|string',
            'telp_terapis' => 'nullable|string',
        ]);

        // Simpan data ke database
        Datalains::create($request->all());

        // Redirect setelah berhasil menyimpan
        return redirect()->route('observasi.form3')->with('success', 'Data berhasil disimpan!');
    }
}
