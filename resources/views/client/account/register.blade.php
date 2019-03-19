@extends('client.master')
@section('sidebar')
@include('client.layout.sidebar')
@endsection
@section('banner')
@include('client.layout.banner')
@endsection
@section('content')
<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
    <div id="layout-page" class="clearfix">
        <span class="header-contact header-page clearfix">
            <h1>Tạo tài khoản</h1>
        </span>
        <div class="userbox">
            <form action="{{route('register')}}" method="POST" id="signup-form" class="signup-form">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
<input name="form_type" type="hidden" value="create_customer">
<input name="utf8" type="hidden" value="✓">

                @if(count($errors) > 0)
                @foreach($errors->all() as $err)
                    <div class="alert alert-warning">
                        <strong>Cảnh báo!</strong> {{$err}}
                     </div>
                @endforeach
                @endif
                
                @if(session('thongbao'))
                  <div class="alert alert-success">
                    <strong>Thành công!</strong><br>
                    Đăng ký tài khoản thành công. <br>
                  </div>
                @endif

            
            <div id="last_name" class="clearfix large_form">
                <label for="last_name" class="label icon-field"><i class="icon-login icon-user "></i></label>
                <input required="" type="text" value="" name="fullname" placeholder="Họ và tên" id="last_name" class="text" size="30">
            </div>

            <div id="email" class="clearfix large_form">
                <label for="email" class="label icon-field"><i class="icon-login icon-envelope "></i></label>
                <input required="" type="email" value="" placeholder="Email" name="email" id="email" class="text" size="30">
            </div>
            <div id="password" class="clearfix large_form">
                <label for="password" class="label icon-field"><i class="icon-login icon-shield "></i></label>
                <input required="" type="password" value="" placeholder="Mật khẩu" name="password" id="password" class="password text" size="30" aria-autocomplete="list">
            </div>
            <div id="password" class="clearfix large_form">
                <label for="password" class="label icon-field"><i class="icon-login icon-shield "></i></label>
                <input required="" type="password" value="" placeholder="Nhập lại mật khẩu" name="repassword" id="repassword" class="password text" size="30" aria-autocomplete="list">
            </div>
            <div class="action_bottom">
                <input class="btn" type="submit" value="Đăng ký">
            </div>
            <div class="req_pass">
                <a class="come-back" href="{{route('login')}}">Quay về</a>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection