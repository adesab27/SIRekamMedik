<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registrasi extends Model
{
    use HasFactory;

    protected $table = 'registrasi'; // Nama tabel di database
    protected $fillable = ['nama', 'alamat', 'keperluan']; // Kolom yang bisa diisi
}
