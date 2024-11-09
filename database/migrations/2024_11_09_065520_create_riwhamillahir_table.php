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
        Schema::create('riwhamillahir', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer("usiaibuketikahamil");
            $table->integer("beratibuketikahamil");
            $table->string("hasiltorsch");
            $table->string("keluhanhamil");
            $table->string("prosespersalinan");
            $table->integer("bblahir");
            $table->integer("panjanglahir");
            $table->integer("lingkarkepala");
            $table->integer("skorapgar");
            $table->integer("kondisilain");
            $table->integer("catatan tambahan");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riwhamillahir');
    }
};
