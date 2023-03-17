<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable=['arabic','translation','type','reference','images','hyperlink','title'];

    protected $casts = [
        'images' => 'array'
    ];
}
