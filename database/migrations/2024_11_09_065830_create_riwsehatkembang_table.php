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
        Schema::create('riwsehatkembang', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("statuskesehatan");
            $table->integer("tengkurap");
            $table->integer("duduk");
            $table->integer("merangkak");
            $table->integer("berdiri");
            $table->integer("berjalan");
            $table->integer("bubbling");
            $table->integer("katapertama");
            $table->integer("mengulangkata");
            $table->integer("kalimatpertama");
            $table->string("cattambahan");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riwsehatkembang');
    }
};
