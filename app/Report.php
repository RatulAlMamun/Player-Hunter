<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable = [
    	'player_id',
    	'buyer_id',
    	'message'
    ];

    public function buyer()
    {
    	return $this->hasOne(Buyer::class, 'id', 'buyer_id');
    }

    public function player()
    {
    	return $this->hasOne(Player::class, 'id', 'player_id');
    }
}
