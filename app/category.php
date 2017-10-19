<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $table = "category";

    public function news(){
    	return $this -> hasMany('app/news', 'category_id', 'id');
    }

    public function products(){
    	return $this -> hasMany('app/products', 'category_id', 'id');
    }
}
