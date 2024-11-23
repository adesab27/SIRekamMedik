<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfoAnak extends Model
{
    use HasFactory;

    protected $table = 'infoanak';

    protected $fillable = [
        'nama_anak',
        'tempat_lahir',
        'nama_panggilan',
        'tanggal_lahir',
        'jenis_kelamin',
        'umur_anak',
        'nama_ayah',
        'nama_ibu',
        'usia_ayah',
        'usia_ibu',
        'agama_ayah',
        'agama_ibu',
        'pekerjaan_ayah',
        'pekerjaan_ibu',
        'alamat_lengkap',
        'pasien_id',
    ];
}
