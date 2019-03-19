<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CatNews;
use App\News;
use App\User;
use App\Email;
use App\ForgotPass;
use App\Product;
use Hash;
use Auth;
use DB;
use Session;
use Mail;

class PageController extends Controller
{
    public function getIndex(){
        $title = "Trang chủ";
        $index_page = "active";
        $pro = Product::offset(0)->limit(8)->get();
    	return view('client.page.home', compact('index_page','title','pro'));
    }

    public function getProduct($id){
        $pro = Product::find($id);
        return view('client.page.products', compact('pro'));
    }
    public function getBlog(){
        $title = "Blog";
        $blog_page = "active";
    	$news = DB::table('news')
                ->join('cat_news','news.cat_id', '=', 'cat_news.id')
                ->select('news.*', 'cat_news.name')
                ->orderBy('news.id','desc')
                ->paginate(8);
    	return view('client.page.blogs',compact('news','blog_page','title'));
    }
    public function getBlogCat($id){
        $blog_page = "active";
        $news = DB::table('news')
                    ->join('cat_news','news.cat_id','=','cat_news.id')
                    ->select('news.*','cat_news.name')
                    ->where('news.cat_id','=',$id)
                    ->orderBy('news.id','desc')
                    ->paginate(8);
        $cat = CatNews::find($id);
        $cat_name = $cat->name;
        $title = "Blog - ".$cat_name;
        return view('client.page.blogs',compact('news','blog_page','title','cat_name'));
    }
    public function getRead($id){
        $blog_page = "active";
        $read = News::find($id);
        //Lay id chuyen muc
        $cat_id = $read->cat_id;
        //Modules Bai viet moi
        $new_post = DB::table('news')->orderBy('news.id','desc')->limit(3)->get();
        //Modules Bai viet lien quan
        //Bai viet lien quan la bai viet co cung chuyen muc voi bai viet dang xem
        $new_related = DB::table('news')->orderBy('news.id','desc')->where('cat_id', '=', $cat_id)->limit(3)->get();
        $title = $read->title;
        return view('client.page.readmore', compact('read','new_post','new_related','blog_page','title'));
    }
    public function getAccount(){
        return view('client.account.account');
    }
    public function getLogin(){
        $title = "Đăng nhập";
        if(Auth::check())
            return redirect()->route('trang-chu');
    	return view('client.account.login',compact('title'));
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
                return redirect()->route('trang-chu');
            else
                return redirect()->back()->with(['flag'=>'warning','title'=>'Thất bại','message'=>'Sai thông tin đăng nhập. Vui lòng kiểm tra lại thông tin đăng nhập!']);     }
    public function getLogout(){
        Auth::logout();
        return redirect()->route('trang-chu');
    }
    public function getRegister(){
        $title = "Đăng ký";
        if(Auth::check())
            return redirect()->route('trang-chu');
    	return view('client.account.register',compact('title'));
    }
    public function postRegister(Request $request){
        $this->validate($request, [
            'fullname' => 'required|max:100', 
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|max:50',
            'repassword' => 'required|same:password'
        ],[
            'fullname.required' => 'Bạn chưa nhập họ và tên',
            'fullname.max' => 'Họ và tên có tối đa 100 ký tự',
            'email.required' => 'Bạn chưa nhập địa chỉ Email',
            'email.unique' => 'Email đã tồn tại',
            'email.email' => 'Bạn chưa nhập đúng định dạng Email',
            'password.required' => 'Bạn chưa nhập mật khẩu',
            'password.min' => 'Mật khẩu tối thiểu 6 ký tự',
            'password.max' => 'Mật khẩu tối đa 50 ký tự',
            'repassword.required' => 'Bạn chưa nhập lại mật khẩu',
            'repassword.same' => 'Mật khẩu nhập lại không trùng khớp'
         ]);
        $user = new User();
        $user->full_name = $request->fullname;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->back()->with('thongbao','Thành công!!!');

    }
    //Start Chức năng tìm mật khẩu
    public function getForgotPassword(){
        $title = "Quên mật khẩu";
        if(Auth::check())
            return redirect()->route('trang-chu');
        return view('client.account.forgot',compact('title'));
    }
    public function postForgotPassword(Request $r){
        /*
        B1: Người dùng nhập địa chỉ Email của tài khoản để tìm mật khẩu
            - Xác thực xem địa chỉ Email đó có tồn tại trong CSDL hay không?
        TRUE: 
        B2: Tạo 1 mã xác thực gửi tới Email người dùng
        B3: Lưu mã xác thực vào trong Database
        B4: Người dùng nhận được Email và nhấn vào liên kết để tới trang thay đổi mật khẩu. Đường dẫn có thời hạn là 15 phút. Nếu quá 15 phút. Hủy đường dẫn.
        FALSE:
        Trả về thông báo Email không tồn tại
         */

        $email = $r->email;
        $this->validate($r, [
            'email' => 'required|email|exists:users,email'
        ],[
            'email.required' => 'Bạn chưa nhập địa chỉ Email',
            'email.exists' => 'Địa chỉ Email không tồn tại',
            'email.email' => 'Bạn chưa nhập đúng định dạng Email'
        ]);
        //Create code verify
        $character = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
        $result = "";
        for($i=0;$i<=5;$i++)
            $result .=$character[mt_rand(0,61)];
        $code = rand(0000,9999).$result.time();

        $user = User::where('email',$email)->first();
        $id_user = $user->id;
        //Kiểm tra đã sử dụng chức năng tìm mật khẩu chưa
        //Nếu đã sử dụng thì 15 phút sau mới có thể sử dụng tiếp
        $count = ForgotPass::where('id_users',$id_user)
                                ->orderBy('created_at','desc')
                                ->count();
        if($count>0)
        {
            $checkUse = ForgotPass::where('id_users',$id_user)
                                    ->orderBy('created_at','desc')
                                    ->first();
            //So sánh thời gian chênh lệch 900 giây = 15 phút                        
            $timestamp = strtotime($checkUse->created_at)+900;
            $realtime = time();
            //Kiểm tra nếu thời gian thực mà bé hơn thời gian đã sử dụng + 15 phút thì trả về thông báo vui lòng đợi 15 phút
            if($realtime < $timestamp)
                return redirect()->back()->with('canhbao','Vui lòng chờ sau 15 phút để thực hiện lại chức năng tìm mật khẩu.');
        }                        
     
        //Lưu vào CSDL
        $verify = new ForgotPass;
        $verify->id_verify = $code;
        $verify->id_users = $id_user;
        $verify->save();
        //Gửi Email
        Mail::send('client.mail.send_code', ['user' => $user, 'code' => $code], function ($m) use ($user) {
            $m->from('auto.txgroup@gmail.com', 'TXGroup Support');

            $m->to($user->email, $user->full_name)->subject('[TXGroup.us] Khôi phục mật khẩu!');
        });
        return redirect()->back()->with('thongbao','Thông tin mật khẩu đã được gửi tới Email. Bạn vui lòng kiểm tra để tiếp tục tìm mật khẩu');

    }
    //Tìm mật khẩu -> Thay đổi mật khẩu
    public function getVerifyPassword($code){
        /*
        B1: Kiểm tra
            - exists 
            - enable = 1
            - realtime < time start + 15 mins

        B2: TRUE: Hiển thị trang thay đổi mật khẩu
            FALSE: Thông báo lỗi
         */
        
        //GET INFO
        $checkUse = ForgotPass::where('id_verify',$code)
                                ->orderBy('created_at','desc')
                                ->first();
        $count = ForgotPass::where('id_verify',$code)
                                ->orderBy('created_at','desc')
                                ->count();
        $checkEnable = $checkUse->enable;
        $timestamp = strtotime($checkUse->created_at)+900;
        $realtime = time();
        if($checkEnable == 0)
            $error = "Phiên tìm mật khẩu hết hiệu lực. Vui lòng thực hiện lại!";
        //Nếu không tìm thấy mã xác thực => trở về trang chủ
        if($count == 0)
            return redirect()->route('trang-chu');
        //So sánh thời gian chênh lệch 900 giây = 15 phút                        
        if($realtime > $timestamp)
            $error = "Quá hạn thay đổi mật khẩu. Vui lòng thực hiện lại chức năng tìm mật khẩu!";
        //Khi thay đổi mật khẩu thành công thì update enable = 0 => Disable
            return view('client.layout.forgotpass_form',compact('error','code','checkEnable'));
    }
    public function postVerifyPassword(Request $r, $code){
        $this->validate($r, [
            'password' => 'required|min:6|max:50',
            'repassword' => 'required|same:password'
        ],[
            'password.required' => 'Bạn chưa nhập mật khẩu',
            'password.min' => 'Mật khẩu tối thiểu 6 ký tự',
            'password.max' => 'Mật khẩu tối đa 50 ký tự',
            'repassword.required' => 'Bạn chưa nhập lại mật khẩu',
            'repassword.same' => 'Mật khẩu nhập lại không trùng khớp',
        ]);
        $forgot = ForgotPass::select('id_users','enable')
                ->where('id_verify',$code)->first();
        $id = $forgot->id_users;
        $user = User::find($id);
        //Thay đổi mật khẩu
        $password = Hash::make($r->password);
        $user->password = $password;
        $user->save();
        //Disable Code verify
        ForgotPass::where('id_verify',$code)->update(['enable'=>0]);

        //Gửi Email
        Mail::send('client.mail.changepass_complete', ['user' => $user, 'code' => $code], function ($m) use ($user) {
            $m->from('auto.txgroup@gmail.com', 'TXGroup Support');

            $m->to($user->email, $user->full_name)->subject('[TXGroup.us] Thay đổi mật khẩu thành công.');
        });
        return redirect()->back()->with('thongbao','Thay đổi mật khẩu thành công');
    }
    //End
    public function getProfile(){
        $title = "Thông tin cá nhân";
        if(Auth::check()){
        $userlogin = Auth::user()->id;
        $user = User::find($userlogin);
        return view('client.layout.profile',compact('user','title'));
        }
        return redirect()->route('login');

    }
    public function postProfile(Request $request){
        $title = "Cập nhật thông tin cá nhân";
        $this->validate($request, [
            'fullname' => 'required|max:100'
        ],[
            'fullname.required' => 'Bạn chưa nhập họ và tên',
            'fullname.max' => 'Họ và tên có tối đa 100 ký tự',
         ]);
        $user = User::find(Auth::user()->id);
        $user->full_name = $request->fullname;
        if($request->password != "" && $request->repassword != "")
        {
            $this->validate($request,[
                'password' => 'required|min:6|max:50',
                'repassword' => 'required|same:password'
            ],[
                'password.required' => 'Bạn chưa nhập mật khẩu',
                'password.min' => 'Mật khẩu tối thiểu 6 ký tự',
                'password.max' => 'Mật khẩu tối đa 50 ký tự',
                'repassword.required' => 'Bạn chưa nhập lại mật khẩu',
                'repassword.same' => 'Mật khẩu nhập lại không trùng khớp'
            ]);
            $user->password = Hash::make($request->password);
        }
        $user->save();
        return redirect()->back()->with('thongbao','Cập nhật thông tin thành công!!!');

    }
    public function postMail(Request $r){
        $email = new Email;
        $email->email = $r->samplees;
        $email->save();
        return redirect()->back();
    }
}
