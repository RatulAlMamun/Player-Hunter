<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRoleUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->boolean('role');
        });

        Schema::table('players', function (Blueprint $table) {
            $table->unsignedbigInteger('user_id');
        });

        Schema::table('buyers', function (Blueprint $table) {
            $table->unsignedbigInteger('user_id');
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
            $table->dropColumn('role');
        });

        Schema::table('players', function (Blueprint $table) {
            $table->dropColumn('user_id');
        });

        Schema::table('buyers', function (Blueprint $table) {
            $table->dropColumn('user_id');
        });
    }
}
