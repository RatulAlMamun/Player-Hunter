<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $guard = 'player';

    protected $fillable = [
    	'name',
    	'email',
    	'date_of_birth',
    	'height',
    	'weight',
    	'nationality',
    	'club',
    	'position',
    	'game_type',
    	'password',
    	'phone_no',
    	'address',
        'avg_rating',
    	'player_image',
        'user_id'
    ];
}
