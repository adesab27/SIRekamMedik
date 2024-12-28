<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
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
            // Fetch observation data by patient id and observation id (id_form)
            $observation = DB::table('infoanak')
                ->join('datatambahan', function ($join) {
                    $join->on('datatambahan.pasien_id', '=', 'infoanak.pasien_id')
                         ->on('datatambahan.created_at', '=', 'infoanak.created_at'); // Sinkronisasi created_at
                })
                ->join('riwhamillahir', function ($join) {
                    $join->on('riwhamillahir.pasien_id', '=', 'infoanak.pasien_id')
                         ->on('riwhamillahir.created_at', '=', 'infoanak.created_at'); // Sinkronisasi created_at
                })
                ->join('riwsehatperkembangan', function ($join) {
                    $join->on('riwsehatperkembangan.pasien_id', '=', 'infoanak.pasien_id')
                         ->on('riwsehatperkembangan.created_at', '=', 'infoanak.created_at'); // Sinkronisasi created_at
                })
                ->join('riwpolakebiasaan', function ($join) {
                    $join->on('riwpolakebiasaan.pasien_id', '=', 'infoanak.pasien_id')
                         ->on('riwpolakebiasaan.created_at', '=', 'infoanak.created_at'); // Sinkronisasi created_at
                })
                ->where('infoanak.pasien_id', $id) // Filter berdasarkan pasien_id
                ->where('infoanak.id', $id_form) // Filter berdasarkan observasi id
                ->select(
                    'infoanak.*', 
                    'datatambahan.*', 
                    'riwhamillahir.*', 
                    'riwsehatperkembangan.*', 
                    'riwpolakebiasaan.*'
                )
                ->first(); // Hanya satu observasi yang diambil
    
            // If no data is found, redirect back with an error message
            if (!$observation) {
                return redirect()->route('datapasien')->with('failed', 'Data tidak ditemukan!');
            }
    
            // Render the view into PDF
            $pdf = Pdf::loadView('cetak-hasil', compact('observation'));
    
            // Generate file name
            $fileName = 'hasil-observasi-' . str_replace(' ', '-', strtolower($observation->nama_anak)) . '.pdf';
    
            // Return the PDF as a downloadable response
            return $pdf->download($fileName);
        } catch (\Throwable $th) {
            // Log and display the error for debugging
            \Log::error('Error during export_pdf: ' . $th->getMessage());
            return redirect()->route('datapasien')->with('failed', 'Terjadi kesalahan saat memproses data! ' . $th->getMessage());
        }
    }
}