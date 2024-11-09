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
        Schema::create('dataanak', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("namaanak");
            $table->string("namapanggilan");
            $table->date("tempatlahir");
            $table->string("jeniskelamin");
            $table->integer("umur");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dataanak');
    }
};
