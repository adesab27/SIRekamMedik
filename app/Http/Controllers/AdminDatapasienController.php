<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\PDF;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminDatapasienController extends Controller
{
    public function index($id = null)
    {
        if (Auth::check()) {
            $data = DB::table('registrasi')->get();
            $cekdata = DB::table('registrasi')
                ->join('infoanak', 'registrasi.id', '=', 'infoanak.pasien_id')
                ->get();
            
            $username = Auth::user()->name;
    
            // Pastikan mengambil hanya observasi untuk pasien tertentu
            if ($id) {
                $observations = DB::table('infoanak')
                    ->where('pasien_id', $id)  // Filter berdasarkan pasien_id yang diteruskan
                    ->select('id', 'created_at')
                    ->get();
            } else {
                $observations = [];  // Jika id tidak ada, tidak ada data observasi
            }
    
            return view('datapasien', compact('data', 'cekdata', 'username', 'observations'));
        } else {
            return redirect()->route('indexLogin')->with('error', 'Silakan Login');
        }
    }
    

    
    public function getObservationsByPasienId($id)
    {
        // Ambil data observasi berdasarkan pasien_id dengan join ke tabel registrasi
        $observations = DB::table('infoanak')
        ->join('registrasi', 'infoanak.pasien_id', '=', 'registrasi.id')  // Join dengan registrasi
        ->where('infoanak.pasien_id', $id)  // Filter berdasarkan pasien_id
        ->orderBy('infoanak.created_at', 'desc')  // Urutkan berdasarkan tanggal observasi
        ->select('infoanak.id', 'infoanak.created_at', 'registrasi.namaPasien')  // Pilih kolom yang diinginkan
        ->get();

    // Debug: Cek apakah ada data yang diambil
    \Log::info('Observations for pasien_id ' . $id . ': ', $observations->toArray());

    // Pastikan data ada sebelum mengembalikannya
    if ($observations->isEmpty()) {
        return response()->json(['message' => 'Tidak ada data observasi'], 404);
    }

    return response()->json($observations);
    }
    
    
    

public function export_pdf($id, $id_form)
{
    try {
        // Ambil data berdasarkan id_form
        $observation = DB::table('infoanak')
            ->where('pasien_id', $id)
            ->where('id', $id_form)
            ->first();

        if (!$observation) {
            return redirect()->route('datapasien')->with('failed', 'Data tidak ditemukan!');
        }

        // Pass data ke view untuk PDF
        return view('cetak-hasil', compact('observation'));
    } catch (\Throwable $th) {
        return redirect()->route('datapasien')->with('failed', 'Terjadi kesalahan saat memproses data!');
    }
}


}