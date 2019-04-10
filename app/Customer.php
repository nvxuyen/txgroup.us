<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = "customers";

    public function getProvince(){
    	return $this->belongsTo('App\Province','provinces_id','id')->value('name');
    }
    public function getDistrict(){
    	return $this->belongsTo('App\District', 'districts_id', 'id')->value('name');
    }
    public static function getByUserId($id){
    	return self::whereUsersId($id)->get();
    }
}
