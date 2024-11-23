<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class riwpolakebiasaan extends Model
{
    protected $table = 'riwpolakebiasaan';

    protected $fillable = [
        'gangguan_pola_tidur',
        'terbangun_malam',
        'kemampuan_sedot_kuat',
        'riwayat_reflux',
        'masalah_nafsu_makan',
        'menghindari_pemilihan_makanan',
        'catatan_tambahan',
        'pasien_id',
    ];
}
