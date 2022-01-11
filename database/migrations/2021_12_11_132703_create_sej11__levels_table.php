<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSej11LevelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //level up
        Schema::create('sej11__levels', function (Blueprint $table) {
            $table->id();
            $table->string('gambar_utuh')->nullable();
            $table->string('judul_sub_bab');
            $table->Text('materi');
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
        Schema::dropIfExists('sej11__levels');
    }
}
