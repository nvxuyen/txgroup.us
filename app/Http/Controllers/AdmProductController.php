<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Collection;

class AdmProductController extends Controller
{
    //Product Manager//////////////////////////////////////////////////////////////////////
    //List
    public function getListProduct(){
        $pro_act = 1;
        $pro_list_act = 1;
        $product = Product::orderBy('created_at', 'DESC')->paginate(15);
        return view('admin.product.list', compact('pro_act', 'pro_list_act', 'product'));
    }
    //Add
    public function getAddProduct(){
        $pro_act = 1;
        $pro_list_act = 1;
        $col = Collection::where('parent', 0)->orderBy('position', 'ASC')->get();
        return view('admin.product.add', compact('pro_act', 'pro_list_act','col'));
    }
    public function postAddProduct(Request $r){
        $this->validate($r, [
            'photos.*' => 'mimes:jpeg,bmp,png,jpg'
        ],[
        ]);
        $pro = new Product;
        $pro->collection_id = $r->col;
        $pro->name = $r->name;
        $pro->name_ascii = m_cut_space($r->name);
        $pro->description = $r->content;
        $pro->price = $r->price;
        $pro->price_import = $r->price_import;
        $pro->inventory = $r->inventory;
        $pro->promotion = $r->promotion;
        if($r->highlights != "")
            $pro->highlights = $r->highlights;
        $pro->tags = $r->tags;
        $pro->save();
        //Multi Upload Image
        if($r->hasFile('photos'))
        {
            foreach ($r->file('photos') as $photo) {
                $filename = $photo->store('public/product');
                $img_pro = new ImgProduct;
                $img_pro->images = $filename;
                $img_pro->product_id = $pro->id;
                $img_pro->save();
            }
        }

        return redirect()->back()->with('thongbao',"Bạn đã thêm sản phẩm thành công");
    }
}
