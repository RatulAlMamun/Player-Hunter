<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFootballplayercarrersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('footballplayercarrers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('player_id');
            $table->string('date_of_tournament');
            $table->string('club');
            $table->string('appearances');
            $table->string('goals');
            $table->string('wins');
            $table->string('losses');
            $table->string('yellow');
            $table->string('red');
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
        Schema::dropIfExists('footballplayercarrers');
    }
}
