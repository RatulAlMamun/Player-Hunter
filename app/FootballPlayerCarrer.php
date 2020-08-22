<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FootballPlayerCarrer extends Model
{
	public $table = 'footballplayercarrers';
    protected $fillable = [
    	'player_id',
    	'date_of_tournament',
    	'club',
    	'appearances',
    	'goals',
    	'wins',
    	'losses',
    	'yellow',
    	'red',
        'rating1',
        'rating2',
        'rating3',
    	'rating'
    ];
}
