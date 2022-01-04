<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSej11OpsiIsiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sej11_opsi_isians', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sej11_soal_id');
            $table->string('jawaban_benar');
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
        Schema::dropIfExists('sej11_opsi_isians');
    }
}
