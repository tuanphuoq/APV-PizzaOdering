<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	// protected $table = 'id';

    protected $fillable = ['id', 'title', 'image', 'description'];

}
