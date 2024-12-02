<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    // Nama tabel di database
    protected $table = 'registrasi';

    // Kolom yang dapat diisi secara mass-assignment
    protected $fillable = [
        'nama',       // Nama pendaftar
        'alamat',     // Alamat pendaftar
        'keperluan',  // Keperluan registrasi
        'created_at', // Waktu registrasi (diatur secara otomatis oleh Laravel)
    ];

    // Tentukan tipe data untuk kolom tertentu (opsional)
    protected $casts = [
        'created_at' => 'datetime', // Format waktu untuk kolom created_at
    ];

    /**
     * Jika tabel tidak memiliki kolom updated_at, Anda dapat menonaktifkannya:
     */
    public $timestamps = false; // Set true jika tabel memiliki kolom updated_at
}
