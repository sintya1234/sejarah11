<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Sej11GambarMateriSej11Level extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sej11_gambar_materi_sej11_level', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sej11_gambar_materi_id');
            $table->foreignId('sej11_level_id');
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
        Schema::dropIfExists('sej11_gambar_materi_sej11_level');
    }
}
