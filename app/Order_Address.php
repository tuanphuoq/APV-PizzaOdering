<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_Address extends Model
{	
	protected $table = 'order_addresses';
    protected $fillable = ['id', 'name', 'email', 'company_name', 'phone', 'street_address', 'city'];
}
