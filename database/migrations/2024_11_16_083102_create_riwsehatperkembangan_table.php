<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRiwSehatPerkembanganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riwsehatperkembangan', function (Blueprint $table) {
            $table->id(); // Primary key

            // Status kesehatan anak
            $table->boolean('penyakit_serius')->default(false);
            $table->boolean('benturan_kepala')->default(false);
            $table->boolean('dirawat_rs')->default(false);
            $table->boolean('pengobatan_jangka_panjang')->default(false);
            $table->boolean('riwayat_kejang')->default(false);
            $table->boolean('riwayat_flu')->default(false);
            $table->boolean('riwayat_pneumonia')->default(false);
            $table->boolean('masalah_perkembangan')->default(false);
            $table->boolean('riwayat_alergi')->default(false);
            $table->boolean('infeksi_telinga')->default(false);
            $table->boolean('diet_suplemen')->default(false);
            $table->boolean('menggunakan_kacamata')->default(false);
            $table->boolean('riwayat_asma')->default(false);
            $table->boolean('riwayat_sinusitis')->default(false);
            $table->boolean('tes_pendengaran_penglihatan')->default(false);

            // Riwayat perkembangan motorik
            $table->integer('tengkurap')->nullable(); 
            $table->integer('duduk')->nullable();  
            $table->integer('merangkak')->nullable(); 
            $table->integer('berdiri')->nullable(); 
            $table->integer('berjalan')->nullable(); 

            // Riwayat perkembangan bahasa
            $table->integer('bubbling')->nullable();     
            $table->integer('kata_pertama')->nullable(); 
            $table->integer('mengulang_kata')->nullable(); 
            $table->integer('kalimat_pertama')->nullable();

            // Catatan tambahan
            $table->text('catatan_tambahan')->nullable();

            $table->timestamps(); // Created_at dan Updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('riwsehatperkembangan');
    }
}
