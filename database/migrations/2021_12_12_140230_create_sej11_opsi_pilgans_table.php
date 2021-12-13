<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSej11OpsiPilgansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sej11_opsi_pilgans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sej11_soal_id');
            $table->string('opsi_pg');
            $table->integer('status_benar');
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
        Schema::dropIfExists('sej11_opsi_pilgans');
    }
}
