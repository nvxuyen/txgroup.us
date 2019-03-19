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
            <h1>Đăng nhập</h1>
        </span>
        <div id="customer-login">
            <div id="login" class="userbox">
                <div class="accounttype">
                    <h2 class="title"></h2>
                </div>
                <form action="{{route('login')}}" method="POST" id="signup-form" id="customer_login">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
<input name="form_type" type="hidden" value="customer_login">
<input name="utf8" type="hidden" value="✓">

                @if(count($errors) > 0)
                    <div class="errors">
                        <ul>
                @foreach($errors->all() as $err)
                            <li>{{$err}}</li>
                @endforeach
                        </ul>
                    </div>
                @endif
                
                @if(Session::has('flag'))
                  <div class="alert alert-{{Session::get('flag')}}">
                    <strong>{{Session::get('title')}}</strong> {{Session::get('message')}}
                  </div>
                @endif

                
                <div class="clearfix large_form">
                    <label for="customer_email" class="icon-field"><i class="icon-login icon-envelope "></i></label>
                    <input required="" type="email" value="" name="email" id="customer_email" placeholder="Email" class="text" value="{{old('email')}}">
                </div>
                
                <div class="clearfix large_form">
                    <label for="customer_password" class="icon-field"><i class="icon-login icon-shield"></i></label>
                    <input required="" type="password" value="" name="password" id="customer_password" placeholder="Mật khẩu" class="text" size="16">
                </div>
                

                <div class="action_bottom">
                    <input class="btn btn-signin" type="submit" value="Đăng nhập">
                </div>
                <div class="req_pass">
                    <a href="{{route('forgot')}}">Quên mật khẩu?</a>

                    hoặc <a href="{{route('register')}}" title="Đăng ký">Đăng ký</a>
                </div>
                </form>
            </div>
            <div id="recover-password" style="display:none;" class="userbox">
                <div class="accounttype">
                    <h2>Phục hồi mật khẩu</h2>
                </div>
                <form accept-charset="UTF-8" action="/account/recover" method="post">
<input name="form_type" type="hidden" value="recover_customer_password">
<input name="utf8" type="hidden" value="✓">

                
                <label for="email" class="icon-field"><i class="icon-login icon-envelope "></i></label>
                <input type="email" value="" size="30" name="email" placeholder="Email" id="recover-email" class="text">
                <div class="action_bottom">
                    <input class="btn" type="submit" value="Gửi">
                </div>
                <div class="req_pass">
                    <a href="#" onclick="hideRecoverPasswordForm();return false;">Hủy</a>
                </div>
                </form>
            </div>
            
        </div>
    </div>
</div>
@endsection