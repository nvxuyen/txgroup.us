<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    protected $table = "collection";

    public function product(){
    	return $this->hasMany('App\Product','collection_id','id');
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
