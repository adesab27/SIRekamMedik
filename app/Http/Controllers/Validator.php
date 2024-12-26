<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Validator extends Controller
{
    private function getValidationRules($step)
{
    $rules = [];

    switch ($step) {
        case 1:
            $rules = [
                'nama_anak' => 'required|string|max:255',
                'tempat_lahir' => 'required|string|max:255',
                'nama_panggilan' => 'nullable|string|max:255',
                'tanggal_lahir' => 'required|date',
                'jenis_kelamin' => 'required|in:L,P',
                'umur_anak' => 'required|integer|min:0',
                'nama_ayah' => 'required|string|max:255',
                'nama_ibu' => 'required|string|max:255',
                'usia_ayah' => 'required|integer|min:0',
                'usia_ibu' => 'required|integer|min:0',
                'agama_ayah' => 'nullable|string|max:255',
                'agama_ibu' => 'nullable|string|max:255',
                'pekerjaan_ayah' => 'nullable|string|max:255',
                'pekerjaan_ibu' => 'nullable|string|max:255',
                'alamat_lengkap' => 'required|string|max:500',
            ];
            break;

        case 2:
            $rules = [
                'diagnosaOleh' => 'nullable|string|max:255',
                'diagnosaUsia' => 'nullable|integer|min:0',
                'diagnosaDiberikan' => 'nullable|string|max:255',
                'namaSaudara' => 'nullable|string|max:255',
                'usiaSaudara' => 'nullable|integer|min:0',
                'jenisKelaminSaudara' => 'nullable|string|in:L,P',
                'specialNeedSaudara' => 'nullable|string|max:255',
                'namaSekolah' => 'nullable|string|max:255',
                'kelas' => 'nullable|string|max:50',
                'namaGuru' => 'nullable|string|max:255',
                'telpGuru' => 'nullable|string|max:15',
                'jenisTerapi' => 'nullable|string|max:255',
                'namaTerapis' => 'nullable|string|max:255',
                'durasiTerapi' => 'nullable|string|max:50',
                'telpTerapis' => 'nullable|string|max:15',
            ];
            break;

        case 3:
            $rules = [
                'usia_ibu' => 'required|integer|min:0',
                'berat_badan_ibu' => 'required|numeric|min:0',
                'diagnosaDiberikan' => 'nullable|string|max:255',
                'hasil_pemeriksaan' => 'nullable|string|max:255',
                'keluhan_keguguran' => 'boolean',
                'keluhan_stress' => 'boolean',
                'keluhan_obat' => 'boolean',
                'proses_persalinan' => 'nullable|string|max:255',
                'berat_badan_lahir' => 'nullable|numeric|min:0',
                'panjang_badan_lahir' => 'nullable|numeric|min:0',
                'lingkar_kepala_lahir' => 'nullable|numeric|min:0',
                'skor_apgar' => 'nullable|integer|min:0|max:10',
                'komplikasi_kelahiran' => 'boolean',
                'menangis_lahir' => 'boolean',
                'perawatan_khusus' => 'boolean',
                'catatan_tambahan_form3' => 'nullable|string|max:1000',
            ];
            break;

        case 4:
            $rules = [
                'penyakit_serius' => 'boolean',
                'benturan_kepala' => 'boolean',
                'dirawat_rs' => 'boolean',
                'pengobatan_jangka_panjang' => 'boolean',
                'riwayat_kejang' => 'boolean',
                'masalah_perkembangan' => 'boolean',
                'tengkurap' => 'nullable|date',
                'duduk' => 'nullable|date',
                'merangkak' => 'nullable|date',
                'berdiri' => 'nullable|date',
                'berjalan' => 'nullable|date',
                'catatan_tambahan_form4' => 'nullable|string|max:1000',
            ];
            break;

        case 5:
            $rules = [
                'pola_tidur' => 'nullable|string|max:255',
                'pola_makan' => 'nullable|string|max:255',
                'pola_kebiasaan' => 'nullable|string|max:255',
                'perilaku' => 'nullable|string|max:1000',
                'catatan_tambahan_form5' => 'nullable|string|max:1000',
            ];
            break;
    }

    return $rules;
}
}
