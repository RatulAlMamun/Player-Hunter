<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCricketplayercarrersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cricketplayercarrers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('player_id');
            $table->string('date_of_tournament');
            $table->string('club');
            $table->string('play_off');
            $table->string('appearances');
            $table->string('runs');
            $table->string('wickets');
            $table->string('catch_misses');
            $table->string('rating1');
            $table->string('rating2');
            $table->string('rating3');
            $table->string('rating');
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
        Schema::dropIfExists('cricketplayercarrers');
    }
}
