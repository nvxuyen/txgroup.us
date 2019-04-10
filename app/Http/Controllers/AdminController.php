<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ImgProduct;
use App\Settings;
use App\Slider;
use Auth;
use Hash;
class AdminController extends Controller
{
    public function getIndex(){
    	return view('admin.layout.index');
    }
    public function getLogin(){
        if(Auth::check())
            return redirect()->route('admin');
    	return view('admin.pages.login');
    }
    public function postLogin(Request $req){
        $this->validate($req, [
            'email' => 'required|min:5|email|max:50',
            'password' => 'required|min:6|max:50',
        ],[
            'email.required' => 'Bạn chưa nhập địa chỉ email',
            'email.min' => 'Tên đăng nhập có tổi thiểu 10 ký tự',
            'email.max' => 'Tên đăng nhập có tối đa 50 ký tự',
            'email.email' => 'Bạn chưa nhập đúng định dạng Email',
            'password.required' => 'Bạn chưa nhập mật khẩu',
            'password.min' => 'Mật khẩu tối thiểu 6 ký tự',
            'password.max' => 'Mật khẩu tối đa 50 ký tự',
         ]);
        $credentials = array('email'=>$req->email,'password'=>$req->password);
            if(Auth::attempt($credentials))
                return redirect()->route('admin');
            else
                return redirect()->back()->with(['flag'=>'warning','title'=>'Thất bại','message'=>'Sai thông tin đăng nhập. Vui lòng kiểm tra lại thông tin đăng nhập!']);     
        }

    //Page Settings
    public function getSettings(){
        $settings_act = 1;
        $set_settings_act = 1;
        $set = Settings::first();
        return view('admin.pages.settings',compact('settings_act','set','set_settings_act'));
    }
    public function postSettings(Request $r){
        $set = Settings::first();
        $set->title = $r->title;
        $set->description = $r->description;
        $set->maintance = $r->maintance;
        $set->maintance_content = $r->maintance_notice;
        $set->domain = $r->domain;
        $set->company_name = $r->company_name;
        $set->address = $r->address;
        $set->email = $r->email;
        $set->skype = $r->skype;
        $set->hotline1 = $r->hotline1;
        $set->hotline2 = $r->hotline2;
        $set->hotline3 = $r->hotline3;
        $set->hotline4 = $r->hotline4;
        $set->fanpage = $r->fanpage;
        $set->copyright = $r->copyright;
        $set->keywords = $r->keywords;
        $set->codeinhead = $r->codeinhead;
        $set->codeinbody = $r->codeinbody;
        $set->save();
        return redirect()->back()->with('thongbao', 'Cập nhật thành công');
    }

    public function getSlider(){
        $settings_act = 1;
        $set_slider_act = 1;
        $slider = Slider::all();
        return view('admin.slider.list',compact('slider','settings_act','set_slider_act'));
    }
    public function getAddSlider(){
        $settings_act = 1;
        $set_slider_act = 1;
        return view('admin.slider.add', compact('settings_act','set_slider_act'));
    }
    public function postAddSlider(Request $r){
        $slider = new Slider;
        if($r->enable == "")
            $slider->active = 0;
        else
            $slider->active = $r->enable;
        $slider->link = $r->link;
        $slider->alt = $r->alt;
        //Upload Image and Insert Into Database
        //Create File name
        $filename = date('d_m_Y_H_i_s', time());
        //Get Extension
        $ext = $r->photos->getClientOriginalExtension();
        $ImageName = 'slider_'.$filename.'.'.$ext;
        $r->photos->move(public_path('assets/images/slider'), $ImageName);
        $slider->image = $ImageName;
        $slider->save();
        return redirect()->back()->with('thongbao','Thêm Slider thành công!');
    }
    public function getEditSlider($id){
        $settings_act = 1;
        $set_slider_act = 1;
        $slider = Slider::find($id);

        return view('admin.slider.edit', compact('settings_act','set_slider_act','slider'));
    }
    public function postEditSlider(Request $r, $id){
        $slider = Slider::find($id);
        $slider->image = $r->image;
        $slider->link = $r->link;
        $slider->alt = $r->alt;
        $slider->save();
        return redriect()->back()->with('thongbao', 'Cập nhật thành công!');
    }
    public function getDeleteSlider($id){
        $slider = Slider::find($id);
        $slider->delete();
        return back()->with('thongbao', 'Xóa thành công!');
    }

}
