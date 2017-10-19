<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product_detail extends Model
{
    protected $table = "product_detail";

    public function products(){
    	return $this->belongsTo('app/products', 'products_id', 'id');
    }
}
