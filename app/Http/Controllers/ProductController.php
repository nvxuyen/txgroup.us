<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Product;
use App\ImgProduct;
use App\Collection;

class ProductController extends Controller
{
    public function getAllProduct(Request $req){
		$title_sort = "created-descending";
		if($req->sort_by != "")  $title_sort = $req->sort_by;
		$product = Product::sortByKey($title_sort)->get();
		$breadcrumb = "Tất cả sản phẩm";
        $title_page = $breadcrumb;
        return view('client.page.collections',compact('product', 'breadcrumb','title_page','title_sort'));
    }
    public function getCollection($name, Request $req){
      	$collection = Collection::whereNameAscii($name)->firstOrFail();
    	//Get ID Collection
    	$col_id = $collection->id;
    	//Get Name Collection
    	$breadcrumb = $collection->name;
    	//Title Page
    	$title_page = $breadcrumb;
    	//Get key from Request
		$title_sort = "created-descending";
    	if($req->sort_by != "")  $title_sort = $req->sort_by;
        //Get Child Collection
        $allId = array();
        $c1 = Collection::select('id')->whereParent($col_id)->get();
        foreach($c1 as $k1 => $v1)
        {
            array_push($allId, $v1['id']);
            $c2 = Collection::select('id')->whereParent($v1['id'])->get();
            foreach ($c2 as $k2 => $v2) {
                array_push($allId, $v2['id']);
            }
        }
        if(count($allId) == 0)
		    $product = Product::whereCollectionId($col_id)->sortByKey($title_sort)->get();
        else
            $product = Product::whereIn('collection_id', $allId)->sortByKey($title_sort)->get();
        return view('client.page.collections',compact('breadcrumb', 'product','title_sort','title_page'));
    }
    public function getProduct($name){
        $pro = Product::whereNameAscii($name)->firstOrFail();
        $pro->view++;
        $pro->save();
        $pro_random = Product::getProRand(8);
        $col_id = $pro->collection_id;
        $col = Collection::find($col_id);
        $tags = explode(',',$pro->tags);
        $img = ImgProduct::getImg($pro->id);
        $title_page = $pro->name;
        return view('client.page.products', compact('pro', 'title_page','img','tags','col','pro_random'));
    }
    public function getProductTags($tags, Request $req){
        $breadcrumb = 'Tag: "'.str_replace('-', ' ', $tags).'"';
    	//Title Page
    	$title_page = 'Tất cả sản phẩm - '.$breadcrumb;
        $tags = str_replace('-','%',$tags);
		$title_sort = "created-descending";
    	if($req->sort_by != "")  $title_sort = $req->sort_by;
        $product = Product::getProByTags($tags)->sortByKey($title_sort)->get();
        return view('client.page.collections', compact('product','breadcrumb','title_sort','title_page'));
    }
    public function getSearch(Request $req){
        $keyword = $req->q;
        $title_page = 'Kết quả tìm kiếm "'.$keyword.'"';
        if($req->type == 'product')
        {
            $data_search = Product::where('name', 'like', '%' .$keyword. '%')->get();
        }
        return view('client.page.search', compact('keyword','data_search','title_page'));
    }
}
