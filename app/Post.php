<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['id', 'title', 'short_desc', 'long_desc', 'image'];
}
