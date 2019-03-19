<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatNews extends Model
{
    protected $table = "cat_news";

    public function news(){
    					//1 chuyên mục sẽ có nhiều tin tức
    					//Đường dẫn - khóa ngoại_Cat_News - khóa chính_News
    	return $this->hasMany('App\News','cat_id','id');
    }
}
