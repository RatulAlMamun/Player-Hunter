<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->bigincrements('id');
            $table->string('name');
            $table->string('email');
            $table->string('date_of_birth');
            $table->string('height');
            $table->string('weight');
            $table->string('nationality');
            $table->string('club');
            $table->string('position');
            $table->string('game_type');
            $table->string('password');
            $table->string('phone_no');
            $table->string('address');
            $table->string('avg_rating');
            $table->string('player_image');
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
        Schema::dropIfExists('players');
    }
}
