<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminRegistrasiController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $username = Auth::user()->name;
            return view('registrasi', ['username' => $username]);
        }else {
        return redirect()->route('indexLogin')->with('error', 'Silahkan Login'); 
        }
    }

    public function add()
    {
        return view('registrasi'); // Alternatif untuk tampilkan halaman registrasi (jika dibutuhkan)
    }

    public function create(Request $request)
    {
        // Validate inputs
        $request->validate([
            'namaPasien' => 'required|string|max:255',
            'tanggalLahir' => 'required|date',
            'nomorHandphone' => 'required|string|max:15',
            'alamatPasien' => 'required|string|max:255',
            'keluhan' => 'nullable|string',
            'keperluan' => 'nullable|string',
            'nama_terapis' => 'nullable|string',
        ]);
    
        // Generate Nomor Pasien automatically
        // Get the last patient number from the database
        $lastPatient = DB::table('registrasi')->latest('nomorPasien')->first();
        
        // Generate the next patient number by incrementing the last one
        $nextPatientNumber = $lastPatient ? str_pad((int)substr($lastPatient->nomorPasien, -5) + 1, 5, '0', STR_PAD_LEFT) : '00001';
    
        // Insert the new data
        $add = DB::table('registrasi')->insert([
            'namaPasien' => $request->namaPasien,
            'nomorPasien' => $nextPatientNumber,
            'tanggalLahir' => $request->tanggalLahir,
            'nomorHandphone' => $request->nomorHandphone,
            'alamatPasien' => $request->alamatPasien,
            'keluhan' => $request->keluhan,
            'keperluan' => $request->keperluan,
            'nama_terapis' => $request->nama_terapis,
        ]);
    
        // Return response based on success/failure
        return $add
            ? redirect()->route('indexRegistrasi')->with('success', 'Data pasien berhasil ditambahkan!')
            : redirect()->route('indexRegistrasi')->with('failed', 'Data pasien gagal ditambahkan!');
    }
    
    

}
