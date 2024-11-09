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
        Schema::create('datawali', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("namaayah");
            $table->string("usiaayah");
            $table->string("agamaayah");
            $table->string("pekerjaanayah");
            $table->string("namaibu");
            $table->string("usiaibu");
            $table->string("agamaibu");
            $table->string("pekerjaanibu");
            $table->string("alamat");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datawali');
    }
};
