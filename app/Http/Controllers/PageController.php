<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ImgProduct;
use App\Pages;
use App\Slider;

class PageController extends Controller
{
    public function getIndex(){
        $title = "Trang chủ";
        $index_page = "active";
        //Get Slider
        $slider = Slider::getSlider();
        //Get sản phẩm nổi bật
        $pro_highlighs = Product::sortByKey('manual')->limit(8)->get();
        //Get sản phẩm mới
        $pro_new = Product::sortByKey('created-descending')->limit(8)->get();
        //Get sản phẩm được quan tâm
        $pro_care = Product::sortByKey('view-descending')->limit(8)->get();
    	return view('client.page.home', compact('index_page','title','pro_highlighs','pro_new','pro_care','slider'));
    }
    public function postMail(Request $r){
        $email = new Email;
        $email->email = $r->samplees;
        $email->save();
        return redirect()->back();
    }

    public function getPageBaoHanh(){
        $data = Pages::find(1);
        $title_page = "Bảo hành";
        return view('client.pages.page', compact('data', 'title_page'));
    }

    public function getPageThanhToan(){
        $data = Pages::find(2);
        $title_page = "Phương thức thanh toán";
        return view('client.pages.page', compact('data', 'title_page'));
    }
}
