<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminDatapasienController extends Controller
{
    public function index()
    {
        $data = DB::table('registrasi')->paginate(10); 
        return view('datapasien', compact('data'));
    }

    public function editDatapasien($id)
{
    $pasien = DB::table('registrasi')->where('id', $id)->first();
    return view('editdata', compact('pasien'));
}

    public function updateDatapasien(Request $request, $id)
    {
        DB::table('registrasi')
            ->where('id', $id)
            ->update([
                'namaPasien' => $request->namaPasien,
                'tanggalLahir' => $request->tanggalLahir,
                'alamatPasien' => $request->alamatPasien,
                'nomorHandphone' => $request->nomorHandphone,
                'keluhan' => $request->keluhan,
                'keperluan' => $request->keperluan,
            ]);
        return redirect()->route('datapasien')->with('success', 'Data pasien berhasil diupdate');
    }

    public function delete($id){
    $ambildata = DB::table('registrasi')->where('id', $id)->first();
    if (!$ambildata) {
        return redirect()->route('datapasien')->with('failed', 'Data tidak ditemukan!');
    }

    // Menghapus data dari tabel registrasi
    DB::table('registrasi')->where('id', $id)->delete();

    return redirect()->route('datapasien')->with('success', 'Data berhasil dihapus!');
}
}
