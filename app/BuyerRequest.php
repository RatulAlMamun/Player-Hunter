<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BuyerRequest extends Model
{
    protected $fillable = [
    	'buyer_id',
    	'player_id',
    	'request_message',
    	'status'
    ];

    public function buyer()
    {
    	return $this->hasOne(Buyer::class, 'id', 'buyer_id');
    }
}
