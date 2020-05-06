<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_Detail extends Model
{
    protected $table = 'order_details';
    protected $fillable = ['id', 'user_id', 'product_id', 'order_address_id', 'quantity', 'size_id', 'size_price', 'product_price', 'status'];
}
