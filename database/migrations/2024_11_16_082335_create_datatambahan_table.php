<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatatambahanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datatambahan', function (Blueprint $table) {
            $table->id();
            $table->string('diagnosaOleh')->nullable(); 
            $table->string('diagnosaUsia')->nullable();
            $table->text('diagnosaDiberikan')->nullable(); 

            $table->string('namaSaudara')->nullable(); 
            $table->string('usiaSaudara')->nullable(); 
            $table->string('jenisKelaminSaudara')->nullable(); 
            $table->string('specialNeedSaudara')->nullable(); 

            $table->string('namaSekolah')->nullable();
            $table->string('kelas')->nullable(); 
            $table->string('namaGuru')->nullable(); 
            $table->string('telpGuru')->nullable(); 

            $table->string('jenisTerapi')->nullable(); 
            $table->string('namaTerapis')->nullable(); 
            $table->string('durasiTerapi')->nullable(); 
            $table->string('telpTerapis')->nullable(); 
            
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
        Schema::dropIfExists('datatambahan');
    }
}

