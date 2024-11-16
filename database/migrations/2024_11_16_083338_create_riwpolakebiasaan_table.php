<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRiwpolakebiasaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riwpolakebiasaan', function (Blueprint $table) {
            $table->id();

            $table->text('gangguan_pola_tidur')->nullable(); 
            $table->text('terbangun_malam')->nullable(); 
            $table->boolean('kemampuan_sedot_kuat')->default(false);
            $table->boolean('riwayat_reflux')->default(false);
            $table->boolean('masalah_nafsu_makan')->default(false);
            $table->boolean('menghindari_pemilihan_makanan')->default(false);
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
        Schema::dropIfExists('riwpolakebiasaan');
    }
}
