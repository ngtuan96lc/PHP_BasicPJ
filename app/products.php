<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $table = "products";

    public function oder_detail(){
    	return $this->hasMany('app/oder_detail', 'oder_id', 'id');
    }

    public function product_detail(){
    	return $this->hasMany('app/product_detail', 'products_id', 'id');
    }

    public function users(){
    	return $this->belongsTo('app/users', 'user_id', 'id');
    }

    public function category(){
    	return $this->belongsTo('app/category', 'category_id', 'id');
    }


}
