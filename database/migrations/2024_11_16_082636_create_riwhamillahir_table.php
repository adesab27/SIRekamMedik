<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRiwhamillahirTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riwhamillahir', function (Blueprint $table) {
            $table->id();
            $table->string('usia_ibu')->nullable();
            $table->string('berat_badan_ibu')->nullable(); 
            $table->text('hasil_pemeriksaan')->nullable(); 
            $table->boolean('keluhan_keguguran')->default(false); 
            $table->boolean('keluhan_stress')->default(false); 
            $table->boolean('keluhan_obat')->default(false);
            $table->enum('proses_persalinan', ['spontan', 'forceps', 'vacuum', 'c-section'])->nullable(); 
            $table->integer('lama_kehamilan')->nullable(); 
            $table->string('berat_badan_lahir')->nullable(); 
            $table->string('panjang_badan_lahir')->nullable();
            $table->string('lingkar_kepala_lahir')->nullable(); 
            $table->string('skor_apgar')->nullable();
            $table->boolean('komplikasi_kelahiran')->default(false); 
            $table->boolean('menangis_lahir')->default(false); 
            $table->boolean('perawatan_khusus')->default(false);
            $table->text('catatan_tambahan')->nullable(); 
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('riwhamillahir');
    }
}

