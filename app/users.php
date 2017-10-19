<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    protected $table = "users";

    public function news(){
    	return $this -> hasMany('app/news', 'user_id', 'id');
    }
    public function oder(){
    	return $this -> hasMany('app/oder', 'user_id', 'id');
    }
    public function products(){
    	return $this -> hasMany('app/products', 'user_id', 'id');
    }

}
