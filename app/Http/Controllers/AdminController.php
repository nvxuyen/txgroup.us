<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\CatNews;
use App\User;
use App\Collection;
use App\Product;
use Hash;
class AdminController extends Controller
{
    public function getIndex(){
    	return view('admin.layout.index');
    }
    public function getLogin(){
    	return view('admin.login');
    }
    //Collection Manager///////////////////////////////////////////////////////////////////
    //List
    public function getListCollection(){
        $collection = Collection::all();
        $col_act = 1;
        $col_list_act = 1;
        return view('admin.collection.list',compact('collection', 'col_act', 'col_list_act'));
    }
    //Add
    public function getAddCollection(){
        $col_act = 1;
        $col_add_act = 1;
        return view('admin.collection.add', compact('col_act', 'col_add_act'));
    }
    public function postAddCollection(Request $r){
        $col = new Collection;
        $col->name = $r->name;
        $col->name_ascii = m_cut_space($r->name);
        $col->des = $r->des;
        $col->save();
        return redirect()->back()->with('thongbao', 'Bạn đã thêm danh mục thành công!');
    }
    //Product Manager//////////////////////////////////////////////////////////////////////
    //List
    public function getListProduct(){
        $pro_act = 1;
        $pro_list_act = 1;
        $product = Product::paginate(15);
        return view('admin.product.list', compact('pro_act', 'pro_list_act', 'product'));
    }
    //Add
    public function getAddProduct(){
        $pro_act = 1;
        $pro_add_act = 1;
        $col = Collection::all();
        return view('admin.product.add', compact('pro_act', 'pro_add_act','col'));
    }
    public function postAddProduct(Request $r){
        $pro = new Product;
        $pro->collection_id = $r->col;
        $pro->name = $r->name;
        $pro->name_ascii = m_cut_space($r->name);
        $pro->image = $r->image;
        $pro->description = $r->content;
        $pro->price = $r->price;
        $pro->save();
        return redirect()->back()->with('thongbao',"Bạn đã thêm sản phẩm thành công");
    }
    //News Manager/////////////////////////////////////////////////////////////////////////
    public function getCatList(){
    	$allcat = CatNews::all();
        $news_act = 1;
        $news_cat_act = 1;
    	return view('admin.news.cat_list', compact('allcat','news_act','news_cat_act'));
    }
    public function postCatAdd(Request $request){
    	$this->validate($request, [
    		'cat_name'=>'required|unique:cat_news,name|min:3|max:100'
    	], [
    		'cat_name.required'=>'Bạn chưa nhập tên chuyên mục',
    		'cat_name.unique'=>'Tên chuyên mục đã tồn tại', 
    		'cat_name.min'=>'Tên chuyên mục có độ dài từ 3 đến 100 ký tự',
    		'cat_name.max'=>'Tên chuyên mục có độ dài từ 3 đến 100 ký tự'
    	]);

    	$catnews = new CatNews;
    	$catnews->name = $request->cat_name;
        $catnews->name_ascii = m_cut_space($request->cat_name);
    	$catnews->save();
    	return redirect()->back()->with('thongbao','Bạn đã thêm thành công');
    }
    public function getCatEdit($id){
    	$cat = CatNews::find($id);
    	return view('admin.news.cat_edit',compact('cat'));
    }
    public function postCatEdit(Request $request, $id){
        $this->validate($request,[
            'ten'=>'required|unique:cat_news,name|min:3|max:100'
        ],[
            'ten.required'=>'Bạn chưa nhập tên chuyên mục',
            'ten.unique'=>'Tên chuyên mục đã tồn tại',
            'ten.min'=>'Tên chuyên mục có độ dài từ 3 đến 100 ký tự.',
            'ten.max'=>'Tên chuyên mục có độ dài từ 3 đến 100 ký tự'
        ]);
        $cat_edit = CatNews::find($id);
        $cat_edit->name = $request->ten;
        $cat_edit->name_ascii = m_cut_space($request->ten);
        $cat_edit->save();
        return redirect('admincp/news/cat/edit/'.$id)->with('thongbao',"Bạn đã sửa thành công");
    }
    //Cat Delete
    public function getCatDel($id){
        $cat = CatNews::find($id);
        $cat->delete();
        return redirect()->back()->with('thongbao','Xóa chuyên mục thành công');
    }
    //News
    public function getNewsList(){
    	$allnews = News::paginate(15);
        $news_act = 1;
        $news_list_act = 1;
    	return view('admin.news.list',compact('allnews','news_act','news_list_act'));
    }
    public function getNewsAdd(){
    	$cat = CatNews::all();
        $news_act = 1;
        $news_add_act = 1;
    	return view('admin.news.add',compact('cat','news_act','news_add_act'));
    }
    public function postNewsAdd(Request $request){
        $this->validate($request, [
            'title'=>'required|min:3|max:150',
            'quote'=>'required|min:10|max:200',
            'content'=>'required|min:5'
        ],[
            'title.required'=>'Bạn chưa nhập tiêu đề',
            'title.min'=>'Tiêu đề có độ dài từ 3 đến 150 ký tự',
            'title.max'=>'Tiêu đề có độ dài từ 3 đến 150 ký tự',
            'quote.required'=>'Bạn chưa nhập nội dung tóm tắt',
            'quote.min'=>'Tóm tắt có độ dài từ 10 đến 200 ký tự',
            'quote.max'=>'Tóm tắt có độ dài từ 10 đến 200 ký tự',
            'content.required'=>'Bạn chưa nhập nhập nội dung',
            'content.min'=>'Nội dung có tối thiểu 5 ký tự'
        ]);
        $news = new News;
        $news->title = $request->title;
        $news->title_ascii = m_cut_space($request->title);
        $news->cat_id = $request->cat_news;
        $news->quote = $request->quote;
        $news->image = $request->image;
        $news->content = $request->content;
        $news->save();
        return redirect('admincp/news/add')->with('thongbao',"Bạn đã thêm tin tức thành công");
    }
    public function getNewsEdit($id){
    	$cat = CatNews::all();
    	$edit = News::find($id);
    	return view('admin.news.edit',compact('edit','cat'));
    }
    public function postNewsEdit(Request $request, $id){
        $this->validate($request, [
            'title'=>'required|min:3|max:150',
            'quote'=>'required|min:10|max:200',
            'content'=>'required|min:5'
        ],[
            'title.required'=>'Bạn chưa nhập tiêu đề',
            'title.min'=>'Tiêu đề có độ dài từ 3 đến 150 ký tự',
            'title.max'=>'Tiêu đề có độ dài từ 3 đến 150 ký tự',
            'quote.required'=>'Bạn chưa nhập nội dung tóm tắt',
            'quote.min'=>'Tóm tắt có độ dài từ 10 đến 200 ký tự',
            'quote.max'=>'Tóm tắt có độ dài từ 10 đến 200 ký tự',
            'content.required'=>'Bạn chưa nhập nhập nội dung',
            'content.min'=>'Nội dung có tối thiểu 5 ký tự'
        ]);

        $news = News::find($id);
        $news->title = $request->title;
        $news->title_ascii = m_cut_space($request->title);
        $news->cat_id = $request->cat_news;
        $news->quote = $request->quote;
        $news->image = $request->image;
        $news->content = $request->content;
        $news->save();
        return redirect('admincp/news/edit/'.$id)->with('thongbao', 'Bạn đã sửa thành công');

    }
    public function getNewsDelete($id){
        $news = News::find($id);
        $mess = "Bạn đã xóa thành công bài viết ".$news->title;
        $news->delete();
        return redirect()->back()->with('thongbao',$mess);
    }

//User Manager
    public function getUserList(){
        $user = User::paginate(10);
        $user_act = 1;
        return view('admin.users.list',compact('user','user_act'));
    }
    public function postUserAdd(Request $request){
        $this->validate($request, [
            'username' => 'required|unique:users,username|alpha_dash|min:3|max:30',
            'fullname' => 'required|max:100', 
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|unique:users,phone|alpha_num|min:10|max:11',
            'password' => 'required|min:6|max:50'
        ],[
            'username.required' => 'Bạn chưa nhập tên đăng nhập',
            'username.unique' => 'Tên đăng nhập đã tồn tại',
            'username.alpha_dash' => 'Tên đăng nhập không hợp lệ',
            'username.min' => 'Tên đăng nhập có tổi thiểu 3 ký tự',
            'username.max' => 'Tên đăng nhập có tối đa 30 ký tự',
            'fullname.required' => 'Bạn chưa nhập họ và tên',
            'fullname.max' => 'Họ và tên có tối đa 100 ký tự',
            'email.required' => 'Bạn chưa nhập địa chỉ Email',
            'email.unique' => 'Email đã tồn tại',
            'email.email' => 'Bạn chưa nhập đúng định dạng Email',
            'phone.required' => 'Bạn chưa nhập số điện thoại',
            'phone.alpha_num' => 'Số điện thoại chỉ bao gồm ký tự số',
            'phone.unique' => 'Số điện thoại đã tồn tại',
            'phone.min' => 'Số điện thoại tối thiểu 10 ký tự',
            'phone.max' => 'Số điện thoại tối đa 11 ký tự',
            'password.required' => 'Bạn chưa nhập mật khẩu',
            'password.min' => 'Mật khẩu tối thiểu 6 ký tự',
            'password.max' => 'Mật khẩu tối đa 50 ký tự'
         ]);
        $user = new User();
        $user->username = $request->username;
        $user->full_name = $request->fullname;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        $user->level = $request->level;
        $user->active = 1;
        $user->save();
        return redirect()->back()->with('thongbao','Đã thêm tài khoản thành công');
    }
    public function getUserEdit(){
        
    }
    public function postUserEdit(Request $request, $id){
        //Cập nhật thông tin users
        //Blank = Không cập nhập
        $user = User::find($id);
        if($request->fullname != ""){
            $user->full_name = $request->fullname;
            $request->validate([
                'fullname' => 'required|min:10|max:100'
            ],[
                'fullname.required' => 'Bạn chưa nhập họ và tên',
                'fullname.min' => 'Họ và tên có tối thiểu 10 ký tự',
                'fullname.max' => 'Họ và tên có tối đa 100 ký tự'
            ]); 
        }
        if($request->email != ""){
            $user->email = $request->email;
            $request->validate([
                'email' => 'email|unique:users,email|min:10|max:150'
            ],[
                'email.required' => 'Bạn chưa nhập địa chỉ Email',
                'email.unique' => 'Email đã tồn tại',
                'email.email' => 'Bạn chưa nhập đúng định dạng Email',
                'email.min' => 'Địa chỉ Email tối thiểu có 10 ký tự',
                'email.max' => 'Địa chỉ email tối đa có 150 ký tự'
            ]);
        }
        if($request->phone != ""){
            $request->validate([
                'phone' => 'unique:users,phone|alpha_num|min:10|max:11',
            ],[
                'phone.required' => 'Bạn chưa nhập số điện thoại',
                'phone.alpha_num' => 'Số điện thoại chỉ bao gồm ký tự số',
                'phone.unique' => 'Số điện thoại đã tồn tại',
                'phone.min' => 'Số điện thoại tối thiểu 10 ký tự',
                'phone.max' => 'Số điện thoại tối đa 11 ký tự',
            ]);
            $user->phone = $request->phone;
        }
        if($request->password != ""){
            $request->validate([
                'password' => 'required|min:6|max:50'
            ],[
                'password.required' => 'Bạn chưa nhập mật khẩu',
                'password.min' => 'Mật khẩu tối thiểu 10 ký tự',
                'password.max' => 'Mật khẩu tối đa 50 ký tự'
            ]);
            $user->password = Hash::make($request->password);
        }
        $user->level = $request->level;
        $user->save();
        return redirect()->back()->with('thongbao','Đã thay đổi thông tin tài khoản thành công!');
    }
    public function getUserDelete($id){
        $user = User::find($id);
        $user->delete();
        return redirect()->back()->with('thongbao','Xóa thành công!');
    }
    public function getActiveUsers($id){
        $user = User::find($id);
        $act = $user->active;
        if($act == 0)
            $user->active = 1;
        else
            $user->active = 0;
        $user->save();
        return redirect()->back();
    }

    //Page Settings
    public function getSettings(){
        $settings_act = 1;
        return view('admin.pages.settings',compact('settings_act'));
    }

}
