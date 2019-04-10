<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $table = "slider";

    public function scopeGetSlider($query){
    	return $query->whereActive(1)->orderBy('created_at', 'DESC')->limit(8)->get();
    }
}
