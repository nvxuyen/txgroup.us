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
			<h1>Tài khoản của bạn <a class="logout" href="{{route('logout')}}"><span class="fa fa-sign-out"></span>Thoát</a></h1>
		</span>
		<div id="customer_orders" class="col-xs-12">
			
			<p>Bạn chưa đặt mua sản phẩm.</p>
			
		</div>

		<div class="col-xs-12" id="customer_sidebar">
			
			<h2>{{Auth::user()->full_name}}</h2>
			

			<p class="email ">{{Auth::user()->email}}</p>
			<div class="address ">
				
				<p></p>
				
				<p></p>
				
				<p> </p>
				<p></p>
				
				<a id="view_address" href="/account/addresses">Xem địa chỉ</a>
			</div>
		</div>
	</div>

</div>
@endsection