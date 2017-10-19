<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class oder_detail extends Model
{
    protected $table = "oder_detail";

    public function oder(){
    	return $this->belongsTo('app/oder', 'oder_id', 'id');
    }

    public function products(){
    	return $this->belongsTo('app/products', 'product_id','id');
    }
}
