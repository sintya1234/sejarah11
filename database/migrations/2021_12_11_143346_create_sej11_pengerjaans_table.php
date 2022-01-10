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
            $table->foreignId('sej11_user_level_id')->nullable();
            $table->foreignId('sej11_soal_id');
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
