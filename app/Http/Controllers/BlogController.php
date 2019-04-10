<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CatNews;
use App\News;

class BlogController extends Controller
{
    public function getBlog(){
        $title_page = "Blog";
        $blog_page = "active";
    	return view('client.page.blogs',compact('news','blog_page','title_page'));
    }
    public function getBlogCat($name){
        $blog_page = "active";
        $cat = CatNews::whereNameAscii($name)->firstorFail();
        $news = CatNews::find($cat->id)->news()->paginate(15);
        $cat_name = $cat->name;
        $title_page = $cat_name;
        return view('client.page.blogs',compact('news','blog_page','title_page','cat_name'));
    }
    public function getRead($cat, $slug){
    	$detail = News::where('title_ascii', '=', $slug)->firstOrFail();
        return view('client.page.readmore', compact('detail','blog_page','title_page'));
    }
}
