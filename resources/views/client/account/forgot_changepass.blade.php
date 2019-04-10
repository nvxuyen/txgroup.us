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
            <h1>Phục hồi mật khẩu</h1>
        </span>
        @if($checkEnable != 0)
        <div id="customer-login">
            <div id="login" class="userbox">
                <div class="accounttype">
                    <h2 class="title"></h2>
                </div>
                <form accept-charset="UTF-8" action="{{ route('forgot.changepass',['code'=>$code]) }}" method="post">
                {{ csrf_field() }}

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
                    <label for="customer_password" class="icon-field"><i class="icon-login icon-shield"></i></label>
                    <input required="" type="password" value="" name="password" id="password" placeholder="Mật khẩu" class="text" size="16">
                </div>
                <div class="clearfix large_form">
                    <label for="customer_password" class="icon-field"><i class="icon-login icon-shield"></i></label>
                    <input required="" type="password" value="" name="repassword" id="repassword" placeholder="Xác nhận mật khẩu" class="text" size="16">
                </div>
                <div class="action_bottom">
                    <input class="btn btn-signin" type="submit" value="Lưu">
                </div>
                </form>
            </div>
        </div>
        @else
            <h4 style="text-align:center;">Phiên tìm mật khẩu hết hiệu lực. Vui lòng thực hiện lại!</h4>
        @endif
    </div>
</div>
@endsection