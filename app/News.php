<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = "news";

    public function CatNews(){
    	//1 tin tức thuộc chuyên mục sẽ dùng belongsTo
    	//						Khóa ngoại_CatNews		 id_News
    	return $this->belongsTo('App\CatNews','cat_id','id');
    }
}
