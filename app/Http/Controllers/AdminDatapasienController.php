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
        if(Auth::check()){
            $data = DB::table('registrasi')->paginate(10); 
            $username = Auth::user()->name;
            return view('datapasien', compact('data', 'username'));
        } else{
            return redirect()->route('indexLogin')->with('error', 'Silahkan Login');
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
        $ambildata = DB::table('registrasi')->where('id', $id)->first();
        if (!$ambildata) {
            return redirect()->route('datapasien')->with('failed', 'Data tidak ditemukan!');
        }

        // Menghapus data dari tabel registrasi
        DB::table('registrasi')->where('id', $id)->delete();

        return redirect()->route('datapasien')->with('success', 'Data berhasil dihapus!');
    }

    public function export_pdf()
    {
        $infoanak = DB::table('infoanak')->first();
        $datatambahan = DB::table('datatambahan')->first();
        $riwhamillahir = DB::table('riwhammillahir')->first();
        $riwsehatperkembangan = DB::table('riwsehatperkembangan')->first();
        $riwpolakebiasaan = DB::table('riwpolakebiasaan')->first();
        $pdf = app('dompdf.wrapper');
        $pdf -> loadview('cetak-hasil', [
            'infoanak' => $infoanak,
            'datatambahan' => $datatambahan,
            'riwhamillahir' => $riwhamillahir,
            'riwsehatperkembangan' => $riwsehatperkembangan,
            'riwpolakebiasaan' => $riwpolakebiasaan
        ]);
        return $pdf->download('laporan_observasi.pdf');
    }
}
