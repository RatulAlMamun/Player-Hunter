<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Playervideo extends Model
{
    protected $fillable = [
    	'player_id',
    	'title',
    	'video',
    	'poster'
    ];
}
