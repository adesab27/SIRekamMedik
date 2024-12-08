<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\PDF;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminDatapasienController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $data = DB::table('registrasi')->get();
            $cekdata = DB::table('registrasi')
                ->join('infoanak', 'registrasi.id', '=', 'infoanak.pasien_id')
                ->get();
            //dd($cekdata);
            $username = Auth::user()->name;
            return view('datapasien', compact('data', 'username', 'cekdata'));
        } else {
            return redirect()->route('indexLogin')->with('error', 'Silakan Login');
        }
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
    public function delete($id)
    {
        // Ambil data dari tabel registrasi berdasarkan ID
        $ambildata = DB::table('registrasi')->where('id', $id)->first();
    
        // Jika data tidak ditemukan, kembalikan respons JSON dengan status 404
        if (!$ambildata) {
            return response()->json(['message' => 'Data tidak ditemukan!'], 404);
        }
    
        // Hapus data dari tabel registrasi
        DB::table('registrasi')->where('id', $id)->delete();
    
        // Kembalikan respons JSON dengan status 200
        return response()->json(['message' => 'Data berhasil dihapus!'], 200);
    }
    

    public function export_pdf($id)
    {
        try {
            $infoanak = DB::table('infoanak')
                ->where('pasien_id', $id)->first();
            if ($infoanak == null) {
                return redirect()->route('datapasien')->with('failed', 'Data tidak ditemukan!');
            }
            $datatambahan = DB::table('datatambahan')
                ->where('pasien_id', $id)->first();
            $riwhamillahir = DB::table('riwhamillahir')
                ->where('pasien_id', $id)->first();
            $riwsehatperkembangan = DB::table('riwsehatperkembangan')
                ->where('pasien_id', $id)->first();
            $riwpolakebiasaan = DB::table('riwpolakebiasaan')
                ->where('pasien_id', $id)->first();

            $pdf = app('dompdf.wrapper');
            $pdf->loadview('cetak-hasil', [
                'infoanak' => $infoanak,
                'datatambahan' => $datatambahan,
                'riwhamillahir' => $riwhamillahir,
                'riwsehatperkembangan' => $riwsehatperkembangan,
                'riwpolakebiasaan' => $riwpolakebiasaan
            ]);
            return $pdf->download('laporan_observasi-'.$infoanak->nama_anak.'.pdf');
        } catch (\Throwable $th) {
            return redirect()->route('datapasien')->with('failed', 'Data tidak ditemukan!');
        }
    }
}
