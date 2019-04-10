<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImgProduct extends Model
{
    protected $table = "images";
    //Get Image of Product
    static function getImg($id){
    	return self::where('product_id', $id)->get();
    }
    static function getImgFirst($id){
    	$img = self::where('product_id', $id)->firstOrFail();
    	return $img->images;
    }
}
