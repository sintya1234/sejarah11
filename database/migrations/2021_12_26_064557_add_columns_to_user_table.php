<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->enum('is_login', ['0','1'])->default('0')->after('password');
            $table->enum('is_active', ['0','1'])->default('1')->after('is_login');
            $table->enum('role', ['0','1'])->default('1')->after('birthyear');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColum('is_login');
            $table->dropColumn('is_active');
            $table->dropColumn('role');
        });
    }
}
