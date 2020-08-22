<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{
	protected $guard = 'buyer';

    protected $fillable = [
        'name',
        'email',
        'password',
        'phone_no',
        'address',
        'club',
        'sports',
        'user_id'
    ];
}
