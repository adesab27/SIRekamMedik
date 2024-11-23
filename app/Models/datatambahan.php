<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class datatambahan extends Model
{
    protected $table = 'datatambahan';

    protected $fillable = [
        'diagnosaOleh',
        'diagnosaUsia',
        'diagnosaDiberikan',
        'namaSaudara',
        'usiaSaudara',
        'jenisKelaminSaudara',
        'specialNeedSaudara',
        'namaSekolah',
        'kelas',
        'namaGuru',
        'telpGuru',
        'jenisTerapi',
        'namaTerapis',
        'durasiTerapi',
        'telpTerapis',
        'pasien_id'
    ];
}
