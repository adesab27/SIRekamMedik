<?php

namespace App\Http\Controllers;

use App\Models\DataTambahan;
use Illuminate\Http\Request;
use App\Models\InfoAnak;
use App\Models\RiwHamilLahir;
use App\Models\RiwPolaKebiasaan;
use App\Models\RiwSehatPerkembangan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminForm1Controller extends Controller
{
    public function index($id) {
        if (Auth::check()) {
            $cekdata = DB::table('infoanak')
                ->where('pasien_id', $id)->get();
            if ($cekdata->count() == 0) {
                $username = Auth::user()->name;
                $data = DB::table('registrasi')->where('id', $id)->first();
                $form3 = DB::table('masterdata_checklist')->where('form', 3)->get();
                $form4 = DB::table('masterdata_checklist')->where('form', 4)->get();
                $form5 = DB::table('masterdata_checklist')->where('form', 5)->get();
                return view('observasi/form1', ['data' => $data, 'form3' => $form3, 'form4' => $form4, 'form5' => $form5, 'pasien_id' => $id, 'username' => $username]);
            } else {
                return redirect()->route('datapasien')->with('error', 'Sudah ada data');
            }
        } else{
            return redirect()->route('indexLogin')->with('error', 'Silahkan login');
        }
    }

    public function store(Request $request) {
        // $request->validate([
        //     'nama_anak' => 'required|string|max:255',
        //     'tempat_lahir' => 'required|string|max:255',
        //     'nama_panggilan' => 'required|string|max:255',
        //     'tanggal_lahir' => 'required|date',
        //     'jenis_kelamin' => 'required|string|max:50',
        //     'umur_anak' => 'required|string|max:50',
        //     'nama_ayah' => 'required|string|max:255',
        //     'nama_ibu' => 'required|string|max:255',
        //     'usia_ayah' => 'required|string|max:50',
        //     'usia_ibu' => 'required|string|max:50',
        //     'agama_ayah' => 'required|string|max:50',
        //     'agama_ibu' => 'required|string|max:50',
        //     'pekerjaan_ayah' => 'required|string|max:255',
        //     'pekerjaan_ibu' => 'required|string|max:255',
        //     'alamat_lengkap' => 'required|string',
        // ]);

        // Menyimpan data ke database
        try {
            $result = DB::transaction(function () use ($request){
                InfoAnak::create([
                    'nama_anak' => $request->nama_anak,
                    'tempat_lahir' => $request->tempat_lahir,
                    'nama_panggilan' => $request->nama_panggilan,
                    'tanggal_lahir' => $request->tanggal_lahir,
                    'jenis_kelamin' => $request->jenis_kelamin,
                    'umur_anak' => $request->umur_anak,
                    'nama_ayah' => $request->nama_ayah,
                    'nama_ibu' => $request->nama_ibu,
                    'usia_ayah' => $request->usia_ayah,
                    'usia_ibu' => $request->usia_ibu,
                    'agama_ayah' => $request->agama_ayah,
                    'agama_ibu' => $request->agama_ibu,
                    'pekerjaan_ayah' => $request->pekerjaan_ayah,
                    'pekerjaan_ibu' => $request->pekerjaan_ibu,
                    'alamat_lengkap' => $request->alamat_lengkap,
                ]);
                DataTambahan::create([
                    'diagnosaOleh' => $request->diagnosaOleh,
                    'diagnosaUsia' => $request->diagnosaUsia,
                    'diagnosaDiberikan' => $request->diagnosaDiberikan,
                    'namaSaudara' => $request->namaSaudara,
                    'usiaSaudara' => $request->usiaSaudara,
                    'jenisKelaminSaudara' => $request->jenisKelaminSaudara,
                    'specialNeedSaudara' => $request->specialNeedSaudara,
                    'namaSekolah' => $request->namaSekolah,
                    'kelas' => $request->kelas,
                    'namaGuru' => $request->namaGuru,
                    'telpGuru' => $request->telpGuru,
                    'jenisTerapi' => $request->jenisTerapi,
                    'namaTerapis' => $request->namaTerapis,
                    'durasiTerapi' => $request->durasiTerapi,
                    'telpTerapis' => $request->telpTerapis,
                    'pasien_id' => $request->pasien_id
                ]);

                RiwHamilLahir::create([
                    'usia_ibu' => $request->usia_ibu,
                    'berat_badan_ibu' => $request->berat_badan_ibu,
                    'diagnosaDiberikan' => $request->diagnosaDiberikan,
                    'hasil_pemeriksaan' => $request->hasil_pemeriksaan,
                    'keluhan_keguguran' => $request->keluhan_keguguran != 'on' ? 0 : 1,
                    'keluhan_stress' => $request->keluhan_stress != 'on' ? 0 : 1,
                    'keluhan_obat' => $request->keluhan_obat != 'on' ? 0 : 1,
                    'proses_persalinan' => $request->proses_persalinan,
                    'lama_kehamilan' => $request->lama_kehamilan,
                    'berat_badan_lahir' => $request->berat_badan_lahir,
                    'panjang_badan_lahir' => $request->panjang_badan_lahir,
                    'lingkar_kepala_lahir' => $request->lingkar_kepala_lahir,
                    'skor_apgar' => $request->skor_apgar,
                    'komplikasi_kelahiran' => $request->komplikasi_kelahiran != 'on' ? 0 : 1,
                    'menangis_lahir' => $request->menangis_lahir != 'on' ? 0 : 1,
                    'perawatan_khusus' => $request->perawatan_khusus != 'on' ? 0 : 1,
                    'catatan_tambahan' => $request->catatan_tambahan,
                    'pasien_id' => $request->pasien_id
                ]);

                RiwSehatPerkembangan::create([
                    'penyakit_serius' => $request->penyakit_serius != 'on' ? 0 : 1,
                    'benturan_kepala' => $request->benturan_kepala != 'on' ? 0 : 1,
                    'dirawat_rs' => $request->dirawat_rs != 'on' ? 0 : 1,
                    'pengobatan_jangka_panjang' => $request->pengobatan_jangka_panjang != 'on' ? 0 : 1,
                    'riwayat_kejang' => $request->riwayat_kejang != 'on' ? 0 : 1,
                    'riwayat_flu' => $request->riwayat_flu != 'on' ? 0 : 1,
                    'riwayat_pneumonia' => $request->riwayat_pneumonia != 'on' ? 0 : 1,
                    'masalah_perkembangan' => $request->masalah_perkembangan != 'on' ? 0 : 1,
                    'riwayat_alergi' => $request->riwayat_alergi != 'on' ? 0 : 1,
                    'infeksi_telinga' => $request->infeksi_telinga != 'on' ? 0 : 1,
                    'diet_suplemen' => $request->diet_suplemen != 'on' ? 0 : 1,
                    'menggunakan_kacamata' => $request->menggunakan_kacamata != 'on' ? 0 : 1,
                    'riwayat_asma' => $request->riwayat_asma != 'on' ? 0 : 1,
                    'riwayat_sinusitis' => $request->riwayat_sinusitis != 'on' ? 0 : 1,
                    'tes_pendengaran_penglihatan' => $request->tes_pendengaran_penglihatan != 'on' ? 0 : 1,
                    'tengkurap' => $request->tengkurap,
                    'duduk' => $request->duduk,
                    'merangkak' => $request->merangkak,
                    'berdiri' => $request->berdiri,
                    'berjalan' => $request->berjalan,
                    'bubbling' => $request->bubbling,
                    'kata_pertama' => $request->kata_pertama,
                    'mengulang_kata' => $request->mengulang_kata,
                    'kalimat_pertama' => $request->kalimat_pertama,
                    'catatan_tambahan' => $request->catatan_tambahan,
                    'pasien_id' => $request->pasien_id,
                ]);

                RiwPolaKebiasaan::create([
                    'gangguan_pola_tidur' => $request->gangguan_pola_tidur,
                    'terbangun_malam' => $request->terbangun_malam,
                    'kemampuan_sedot_kuat' => $request->kemampuan_sedot_kuat != 'on' ? 0 : 1,
                    'riwayat_reflux' => $request->riwayat_reflux != 'on' ? 0 : 1,
                    'masalah_nafsu_makan' => $request->masalah_nafsu_makan != 'on' ? 0 : 1,
                    'menghindari_pemilihan_makanan' => $request->menghindari_pemilihan_makanan != 'on' ? 0 : 1,
                    'catatan_tambahan' => $request->catatan_tambahan,
                    'pasien_id' => $request->pasien_id,
                ]);
            
        });
            

        return redirect()->route('datapasien')->with('success', 'Data berhasil disimpan.');
    // } catch (\Exception $e) {
    //     dd($e->getMessage());
    }
}
}