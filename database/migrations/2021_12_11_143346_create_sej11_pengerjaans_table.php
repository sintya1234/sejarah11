<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSej11PengerjaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sej11_pengerjaans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('level_id');
            $table->foreignId('soal_id');
            $table->foreignId('potongan_gambar_id')->nullable();
            $table->integer('status_pengerjaan');    
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
        Schema::dropIfExists('sej11_pengerjaans');
    }
}
