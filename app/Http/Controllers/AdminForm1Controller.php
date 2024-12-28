<?php

namespace App\Http\Controllers;

use App\Models\DataTambahan;
use Illuminate\Http\Request;
use App\Models\InfoAnak;
use App\Models\riwhamillahir;
use App\Models\riwpolakebiasaan;
use App\Models\riwsehatperkembangan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class AdminForm1Controller extends Controller
{
    public function index($id) 
    {
        if (Auth::check()) {
            $username = Auth::user()->name;
            $data = DB::table('registrasi')->where('id', $id)->first();
            // **Memeriksa apakah $form3 sudah ada, jika tidak maka diinisialisasi sebagai array kosong**
            $form3 = DB::table('masterdata_checklist')->where('form', 3)->get();
            if (empty($form3)) {
                $form3 = [];
            }

            $form4 = DB::table('masterdata_checklist')->where('form', 4)->get();
            $form5 = DB::table('masterdata_checklist')->where('form', 5)->get();

            // Menghitung usia anak
            $umurAnak = '';
            if ($data && $data->tanggalLahir) {
                $tanggalLahir = new \DateTime($data->tanggalLahir); // Konversi ke DateTime
                $sekarang = new \DateTime(); // Tanggal hari ini
                $interval = $sekarang->diff($tanggalLahir); // Selisih tanggal
                $umurAnak = $interval->y . ' tahun ' . $interval->m . ' bulan';
            }

            return view('observasi/form1', [
                'data' => $data, 
                'form3' => $form3, 
                'form4' => $form4, 
                'form5' => $form5, 
                'pasien_id' => $id, 
                'username' => $username,
                'umurAnak' => $umurAnak // Kirim hasil usia ke view
            ]);
        } else {
            return redirect()->route('indexLogin')->with('error', 'Silahkan Login ');
        }
    }
    public function store(Request $request) {
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
                    'pasien_id' => $request->pasien_id
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

                riwhamillahir::create([
                    'usia_ibu' => $request->usia_ibu,
                    'berat_badan_ibu' => $request->berat_badan_ibu,
                    'diagnosaDiberikan' => $request->diagnosaDiberikan,
                    'hasil_pemeriksaan' => $request->hasil_pemeriksaan,
                    'keluhan_keguguran' => $request->keluhan_keguguran != 'on' ? 0 : 1,
                    'keluhan_stress' => $request->keluhan_stress != 'on' ? 0 : 1,
                    'keluhan_obat' => $request->keluhan_obat != 'on' ? 0 : 1,
                    'proses_persalinan' => $request->proses_persalinan,
                    'berat_badan_lahir' => $request->berat_badan_lahir,
                    'panjang_badan_lahir' => $request->panjang_badan_lahir,
                    'lingkar_kepala_lahir' => $request->lingkar_kepala_lahir,
                    'skor_apgar' => $request->skor_apgar,
                    'komplikasi_kelahiran' => $request->komplikasi_kelahiran != 'on' ? 0 : 1,
                    'menangis_lahir' => $request->menangis_lahir != 'on' ? 0 : 1,
                    'perawatan_khusus' => $request->perawatan_khusus != 'on' ? 0 : 1,
                    'catatan_tambahan' => $request->catatan_tambahan_form3,
                    'pasien_id' => $request->pasien_id
                ]);

                riwsehatperkembangan::create([
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
                    'catatan_tambahan' => $request->catatan_tambahan_form4,
                    'pasien_id' => $request->pasien_id,
                ]);

                riwpolakebiasaan::create([
                    'gangguan_pola_tidur' => $request->gangguan_pola_tidur,
                    'terbangun_malam' => $request->terbangun_malam,
                    'kemampuan_sedot_kuat' => $request->kemampuan_sedot_kuat != 'on' ? 0 : 1,
                    'riwayat_reflux' => $request->riwayat_reflux != 'on' ? 0 : 1,
                    'masalah_nafsu_makan' => $request->masalah_nafsu_makan != 'on' ? 0 : 1,
                    'menghindari_pemilihan_makanan' => $request->menghindari_pemilihan_makanan != 'on' ? 0 : 1,
                    'catatan_tambahan' => $request->catatan_tambahan_form5,
                    'pasien_id' => $request->pasien_id,
                ]);
            });

            return redirect()->route('datapasien')->with('success', 'Data berhasil disimpan.');
        } catch (\Exception $e) {
            // Tangkap error dan kembalikan pesan ke pengguna
            return back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    public function editFormStepper($id, $step = 1)
    {
        if (Auth::check()) {
            $username = Auth::user()->name;
            
            // Ambil data form3, form4, dan form5
            $form3 = DB::table('masterdata_checklist')->where('form', 3)->get();
            $form4 = DB::table('masterdata_checklist')->where('form', 4)->get();
            $form5 = DB::table('masterdata_checklist')->where('form', 5)->get();
    
            // Ambil data terkait pasien (terbaru)
            $infoAnak = InfoAnak::where('pasien_id', $id)->latest('updated_at')->first();
            $dataTambahan = DataTambahan::where('pasien_id', $id)->latest('updated_at')->first();
            $riwhamillahir = riwhamillahir::where('pasien_id', $id)->latest('updated_at')->first();
            $riwsehatperkembangan = riwsehatperkembangan::where('pasien_id', $id)->latest('updated_at')->first();
            $riwpolakebiasaan = riwpolakebiasaan::where('pasien_id', $id)->latest('updated_at')->first();
    
            // Hitung umur anak jika diperlukan
            $umurAnak = '';
            if ($infoAnak && $infoAnak->tanggal_lahir) {
                $tanggalLahir = new \DateTime($infoAnak->tanggal_lahir);
                $sekarang = new \DateTime();
                $interval = $sekarang->diff($tanggalLahir);
                $umurAnak = $interval->y . ' tahun ' . $interval->m . ' bulan';
            }
    
            // Kirim data ke view
            $data = [
                'form3' => $form3,
                'form4' => $form4,
                'form5' => $form5,
                'infoAnak' => $infoAnak,
                'dataTambahan' => $dataTambahan,
                'riwhamillahir' => $riwhamillahir,
                'riwsehatperkembangan' => $riwsehatperkembangan,
                'riwpolakebiasaan' => $riwpolakebiasaan,
                'username' => $username,
                'umurAnak' => $umurAnak,
                'pasien_id' => $id,
                'step' => $step,
            ];
    
            // Tentukan view yang akan digunakan berdasarkan step
            $view = 'observasi.editform' . $step;
    
            // Kirim data ke view
            return view($view, compact('data'));
        } else {
            return redirect()->route('indexLogin')->with('error', 'Silahkan Login');
        }
    }
    public function updateFormStepper(Request $request, $id)
    {
        try {
            $result = DB::transaction(function () use ($request) {
                // Step 1 - InfoAnak
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
                    'pasien_id' => $request->pasien_id
                ]);
    
                // Step 2 - DataTambahan
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
    
                // Step 3 - riwhamillahir
                riwhamillahir::create([
                    'usia_ibu' => $request->usia_ibu,
                    'berat_badan_ibu' => $request->berat_badan_ibu,
                    'diagnosaDiberikan' => $request->diagnosaDiberikan,
                    'hasil_pemeriksaan' => $request->hasil_pemeriksaan,
                    'keluhan_keguguran' => $request->has('keluhan_keguguran') ? 1 : 0, 
                    'keluhan_stress' => $request->has('keluhan_stress') ? 1 : 0,
                    'keluhan_obat' => $request->has('keluhan_obat') ? 1 : 0,
                    'proses_persalinan' => $request->proses_persalinan,
                    'berat_badan_lahir' => $request->berat_badan_lahir,
                    'panjang_badan_lahir' => $request->panjang_badan_lahir,
                    'lingkar_kepala_lahir' => $request->lingkar_kepala_lahir,
                    'skor_apgar' => $request->skor_apgar,
                    'komplikasi_kelahiran' => $request->has('komplikasi_kelahiran') ? 1 : 0,
                    'menangis_lahir' => $request->has('menangis_lahir') ? 1 : 0,
                    'perawatan_khusus' => $request->has('perawatan_khusus') ? 1 : 0,
                    'catatan_tambahan' => $request->catatan_tambahan_form3,
                    'pasien_id' => $request->pasien_id
                ]);
                
    
                // Step 4 - riwsehatperkembangan
                riwsehatperkembangan::create([
                    'keluhan_keguguran' => $request->has('keluhan_keguguran') ? 1 : 0, 

                    'penyakit_serius' => $request->has('penyakit_serius') ? 1 : 0,
                    'benturan_kepala' => $request->has('benturan_kepala') ? 1 : 0,
                    'dirawat_rs' => $request->has('dirawat_rs') ? 1 : 0,
                    'pengobatan_jangka_panjang' => $request->has('pengobatan_jangka_panjang') ? 1 : 0,
                    'riwayat_kejang' => $request->has('riwayat_kejang') ? 1 : 0,
                    'riwayat_flu' => $request->has('riwayat_flu') ? 1 : 0,
                    'riwayat_pneumonia' => $request->has('riwayat_pneumonia') ? 1 : 0,
                    'masalah_perkembangan' => $request->has('masalah_perkembangan') ? 1 : 0,
                    'riwayat_alergi' => $request->has('riwayat_alergi') ? 1 : 0,
                    'infeksi_telinga' => $request->has('infeksi_telinga') ? 1 : 0,
                    'diet_suplemen' => $request->has('diet_suplemen') ? 1 : 0,
                    'menggunakan_kacamata' => $request->has('menggunakan_kacamata') ? 1 : 0,
                    'riwayat_asma' => $request->has('riwayat_asma') ? 1 : 0,
                    'riwayat_sinusitis' => $request->has('riwayat_sinusitis') ? 1 : 0,
                    'tes_pendengaran_penglihatan' => $request->has('tes_pendengaran_penglihatan') ? 1 : 0,
                    'tengkurap' => $request->tengkurap,
                    'duduk' => $request->duduk,
                    'merangkak' => $request->merangkak,
                    'berdiri' => $request->berdiri,
                    'berjalan' => $request->berjalan,
                    'bubbling' => $request->bubbling,
                    'kata_pertama' => $request->kata_pertama,
                    'mengulang_kata' => $request->mengulang_kata,
                    'kalimat_pertama' => $request->kalimat_pertama,
                    'catatan_tambahan' => $request->catatan_tambahan_form4,
                    'pasien_id' => $request->pasien_id,
                ]);
    
                // Step 5 - riwpolakebiasaan
                riwpolakebiasaan::create([
                    'gangguan_pola_tidur' => $request->gangguan_pola_tidur,
                    'terbangun_malam' => $request->terbangun_malam,
                    'kemampuan_sedot_kuat' => $request->has('kemampuan_sedot_kuat') ? 1 : 0,
                    'riwayat_reflux' => $request->has('riwayat_reflux') ? 1 : 0,
                    'masalah_nafsu_makan' => $request->has('masalah_nafsu_makan') ? 1 : 0,
                    'menghindari_pemilihan_makanan' => $request->has('menghindari_pemilihan_makanan') ? 1 : 0,
                    'catatan_tambahan' => $request->catatan_tambahan_form5,
                    'pasien_id' => $request->pasien_id,
                ]);
            });
    
            return redirect()->route('datapasien')->with('success', 'Data berhasil disimpan.');
        } catch (\Exception $e) {
            return back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
    
}