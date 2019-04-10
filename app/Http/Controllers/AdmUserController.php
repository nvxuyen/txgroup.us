<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;

class AdmUserController extends Controller
{
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
}
