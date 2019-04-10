<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\CatNews;
use App\Pages;

class AdmBlogController extends Controller
{
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
        $news_list_act = 1;
    	return view('admin.news.add',compact('cat','news_act','news_list_act'));
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
        $news_act = 1;
        $news_list_act = 1;
    	$cat = CatNews::all();
    	$edit = News::find($id);
    	return view('admin.news.edit',compact('edit','cat','news_act','news_list_act'));
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
    public function getRemoveAllNews(Request $r){
        $id_arr = explode(',',$r->listid);
        foreach($id_arr as $id)
        {
            $data = News::find($id);
            $data->delete();
        }
        return redirect()->back();
    }

    public function getEditPage($id){
        $news_act = 1;
        if($id == 1)
            $news_1 = 1;
        else
            $news_2 = 1;
        $data = Pages::find($id);
        return view('admin.news.page_edit',compact('data','news_act','news_1','news_2'));
    }
    public function postEditPage(Request $r, $id){
        $data = Pages::find($id);
        $data->content = $r->content;
        $data->save();
        return redirect()->back()->with('thongbao', 'Cập nhật thành công!');

    }
}
