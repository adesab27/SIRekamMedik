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
            $data = DB::table('registrasi')->paginate(10);
            $cekdata = DB::table('registrasi')
                ->join('infoanak', 'registrasi.id', '=', 'infoanak.pasien_id')
                ->get();
            $username = Auth::user()->name;
            return view('datapasien', compact('data', 'username', 'cekdata'));
        } else {
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
            return $pdf->download('laporan_observasi.pdf');
        } catch (\Throwable $th) {
            return redirect()->route('datapasien')->with('failed', 'Data tidak ditemukan!');
        }
    }
}
