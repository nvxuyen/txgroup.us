<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $table = "order_details";

    public function getProduct(){
    	return $this->belongsTo('App\Product', 'products_id', 'id')->first();
    }
}
