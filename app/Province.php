<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $table = "provinces";

    public function getDistricts(){
    	return $this->hasMany('App\District','provinces_id','id');
    }
}
