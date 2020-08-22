<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CricketPlayerCarrer extends Model
{
	public $table = 'cricketplayercarrers';
    protected $fillable = [
    	'player_id',
    	'date_of_tournament',
    	'club',
    	'play_off',
        'appearances',
    	'runs',
    	'wickets',
    	'catch_misses',
        'rating1',
        'rating2',
        'rating3',
    	'rating'
    ];
}
