<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class riwhamillahir extends Model
{
    protected $table = 'riwhamillahir';

    protected $fillable = [
        'usia_ibu',
        'berat_badan_ibu',
        'hasil_pemeriksaan',
        'keluhan_keguguran',
        'keluhan_stress',
        'keluhan_obat',
        'proses_persalinan',
        'lama_kehamilan',
        'berat_badan_lahir',
        'panjang_badan_lahir',
        'lingkar_kepala_lahir',
        'skor_apgar',
        'komplikasi_kelahiran',
        'menangis_lahir',
        'perawatan_khusus',
        'catatan_tambahan',
        'pasien_id'
    ];
}
