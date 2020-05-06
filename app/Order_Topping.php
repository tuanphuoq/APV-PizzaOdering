<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_Topping extends Model
{
    protected $table = 'order_toppings';
    protected $fillable = ['id', 'order_detail_id', 'topping_id'];
}
