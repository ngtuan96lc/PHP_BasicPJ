<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class oder extends Model
{
    protected $table = "oder";

    public function users(){
    	return $this->belongsTo('app/users', 'user_id', 'id');
    }

    public function oder_detail(){
    	return $this->hasMany('app/oder_detail', 'oder_id', 'id');
    }
    
}
