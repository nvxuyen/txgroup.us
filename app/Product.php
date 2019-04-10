<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";

    public function collection(){
    	return $this->belongsTo('App\Collection','collection_id','id');
    }
    public function image(){
    	return $this->hasMany('App\ImgProduct','product_id','id');
    }
    static function getProRand($num){
    	return self::limit($num)->get();
    }
    public function scopeGetProByTags($query, $tags){
    	return $query->where('tags','like','%'.$tags.'%');
    }
    public function scopeSortByKey($query, $key){
    	switch($key){
			case 'created-descending' :
				return $query->orderBy('created_at', 'DESC');
				break;
			//Old Product
			case 'created-ascending' :
				return $query->orderBy('created_at', 'ASC');
				break;
			//Price ASC
			case 'price-ascending' :
				return $query->orderBy('price', 'ASC');
				break;
			//Price DESC
			case 'price-descending' :
				return $query->orderBy('price', 'DESC');
				break;
			//Price ASC
			case 'title-ascending' :
				return $query->orderBy('name', 'ASC');
				break;	
			//Title DESC
			case 'title-descending' :
				return $query->orderBy('name', 'DESC');
				break;
			//Products are much concerned
			case 'view-descending' :
				return $query->orderBy('view', 'DESC');
				break;
			//Highlights
			case 'manual' :
				return $query->whereHighlights(1);
				break;
			//Best Selling
			case 'best-selling' :
				break;
			default: 
				return $query->orderBy('created_at', 'DESC');
				break;
    	}
    }

}
