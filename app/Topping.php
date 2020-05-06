<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topping extends Model
{
    protected $fillable = ['id', 'name', 'price', 'image'];
}
