<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category_Product extends Model
{
    protected $table = 'category_products';
    protected $fillable = ['id', 'category_id', 'product_id'];

    /**
     * Delete product in Category_Product table
     argument input : $id of product
     return boolean 
     */
    public static function deleteItem($id)
    {
    	try{
    		Category_Product::where('product_id', $id)->delete();
    	}catch(Exception $e){
            return false;
    	}
        return true;
    }
}
