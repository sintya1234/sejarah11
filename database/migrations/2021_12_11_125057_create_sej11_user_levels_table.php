<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSej11UserLevelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sej11_user_levels', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sej11_user_level_id');
            $table->foreignId('user_id');
            $table->foreignId('sej11_level_id');
            $table->bigInteger('score');
            $table->bigInteger('waktu_pengerjaan');
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
        Schema::dropIfExists('sej11_user_levels');
    }
}
