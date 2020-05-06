<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category_Post extends Model
{	
	protected $table = 'category_posts';
    protected $fillable = ['id', 'category_id', 'post_id'];
}
