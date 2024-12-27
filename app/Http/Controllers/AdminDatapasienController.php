<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminDatapasienController extends Controller
{
    public function index($id = null)
    {
        if (Auth::check()) {
            // dd(Auth::check());
            $data = DB::table('registrasi')->get();
            // dd($data);
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
        $observations = DB::table('infoanak')
        ->join('registrasi', 'infoanak.pasien_id', '=', 'registrasi.id')  // Join dengan registrasi
        ->where('infoanak.pasien_id', $id)  // Filter berdasarkan pasien_id
        ->orderBy('infoanak.created_at', 'desc')  // Urutkan berdasarkan tanggal observasi
        ->select('infoanak.id', 'infoanak.created_at', 'registrasi.namaPasien')  // Pilih kolom yang diinginkan
        ->get();

    if ($observations->isEmpty()) {
        return response()->json(['message' => 'Tidak ada data observasi'], 404);
    }

    return response()->json($observations);
    }
    

    public function export_pdf($id, $id_form)
    {
        try {
            // Ambil data berdasarkan pasien_id dan id_form, dengan join tabel-tabel terkait
            $observation = DB::table('infoanak')
                ->join('datatambahan', 'infoanak.pasien_id', '=', 'datatambahan.pasien_id')
                ->join('riwhamillahir', 'infoanak.pasien_id', '=', 'riwhamillahir.pasien_id')
                ->join('riwsehatperkembangan', 'infoanak.pasien_id', '=', 'riwsehatperkembangan.pasien_id')
                ->join('riwpolakebiasaan', 'infoanak.pasien_id', '=', 'riwpolakebiasaan.pasien_id')
                ->where('infoanak.pasien_id', $id)
                ->where('infoanak.id', $id_form)
                ->select(
                    'infoanak.*', 
                    'datatambahan.*', 
                    'riwhamillahir.*', 
                    'riwsehatperkembangan.*', 
                    'riwpolakebiasaan.*'
                )
                ->first();
    
            if (!$observation) {
                return redirect()->route('datapasien')->with('failed', 'Data tidak ditemukan!');
            }
    
            // Pass data ke view untuk PDF
            return view('cetak-hasil', compact('observation'));
        } catch (\Throwable $th) {
            // Menampilkan detail error untuk membantu debugging
            \Log::error('Error during export_pdf: ' . $th->getMessage());
            return redirect()->route('datapasien')->with('failed', 'Terjadi kesalahan saat memproses data! ' . $th->getMessage());
        }
    }
    
}