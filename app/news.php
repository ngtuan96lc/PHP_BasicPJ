<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    protected $table = "news";

    public function users(){
    	return $this -> belongsTo('app/users','user_id','id');
    }

    public function category(){
    	return $this -> belongsTo('app/category','category_id', 'id');
    }
    
}
