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
        <div id="customer-login">

            <div id="recover-password" style="display: block;" class="userbox">
                <div class="accounttype">
                    <h2>Phục hồi mật khẩu</h2>
                </div>
                <form action="{{route('forgot')}}" method="POST" id="signup-form" class="signup-form">
                {{ csrf_field() }}

                @if(count($errors) > 0)
                @foreach($errors->all() as $err)
                    <div class="alert alert-warning">
                        <strong>Cảnh báo!</strong> {{$err}}
                     </div>
                @endforeach
                @endif
                
                @if(session('thongbao'))
                  <div class="alert alert-success">
                    <strong>Thành công!</strong> {{session('thongbao')}}
                  </div>
                @endif

                @if(session('canhbao'))
                    <div class="alert alert-warning">
                        <strong>Cảnh báo!</strong> {{session('canhbao')}}
                     </div>
                @endif

                
                <label for="email" class="icon-field"><i class="icon-login icon-envelope "></i></label>
                <input type="email" value="" size="30" name="email" placeholder="Email" id="recover-email" class="text">
                <div class="action_bottom">
                    <input class="btn" type="submit" value="Gửi">
                </div>
                </form>
            </div>
            
        </div>
    </div>
</div>
@endsection