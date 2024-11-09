<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('datatambahan', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("dokter");
            $table->string("waktu");
            $table->string("diagnosa");
            $table->string("namaSaudara");
            $table->integer("usiaSaudara");
            $table->string("genderSaudara");
            $table->string("kondisiSaudara");
            $table->string("namasekolah");
            $table->string("kelas");
            $table->string("namaguru");
            $table->string("nohpguru");
            $table->string("jenisterapi");
            $table->string("namaterapis");
            $table->integer("durasi");
            $table->string("nohpterapis");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datatambahan');
    }
};
