<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
    	'player_id',
    	'blog_title',
    	'blog_details',
    	'blog_image'
    ];
}
