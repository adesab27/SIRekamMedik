<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfoanakTable extends Migration
{
    public function up()
    {
        Schema::create('infoanak', function (Blueprint $table) {
            $table->id();
            $table->string('nama_anak');
            $table->string('tempat_lahir');
            $table->string('nama_panggilan');
            $table->date('tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->string('umur_anak');
            
            // Data Orang Tua
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->string('usia_ayah');
            $table->string('usia_ibu');
            $table->string('agama_ayah');
            $table->string('agama_ibu');
            $table->string('pekerjaan_ayah');
            $table->string('pekerjaan_ibu');
            $table->text('alamat_lengkap');
            
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('infoanak');
    }
}
