<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class riwsehatperkembangan extends Model
{
    protected $table = 'riwsehatperkembangan';

    protected $fillable = [
        'penyakit_serius',
        'benturan_kepala',
        'dirawat_rs',
        'pengobatan_jangka_panjang',
        'riwayat_kejang',
        'riwayat_flu',
        'riwayat_pneumonia',
        'masalah_perkembangan',
        'riwayat_alergi',
        'infeksi_telinga',
        'diet_suplemen',
        'menggunakan_kacamata',
        'riwayat_asma',
        'riwayat_sinusitis',
        'tes_pendengaran_penglihatan',
        'tengkurap',
        'duduk',
        'merangkak',
        'berdiri',
        'berjalan',
        'bubbling',
        'kata_pertama',
        'mengulang_kata',
        'kalimat_pertama',
        'catatan_tambahan',
        'pasien_id',
    ];
}
