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
			@if(count($order) == 0)
			<p>Bạn chưa đặt mua sản phẩm.</p>
			@else

				<table>
					<thead>
						<tr>
							<th class="order_number text-center">Mã đơn hàng</th>
							<th class="date text-center">Thời gian đặt</th>
							<th class="payment_status text-center">Trạng thái đơn hàng</th>
							<th class="total text-center">Tổng tiền</th>
						</tr>
					</thead>
					<tbody>
						@foreach($order as $orders)
						@php
					        switch($orders->status){
					            case 0: 
					                $orderStatus = "Chờ xử lý";
					                break;
					            case 1: 
					                $orderStatus = "Đang xử lý";
					                break;
					            case 2: 
					                $orderStatus = "Đang giao hàng";
					                break;
					            case 3:
					                $orderStatus = "Đã giao hàng";
					                break;
					            case 4:
					                $orderStatus = "Đã hủy";
					                break;
					        }
						@endphp
							<tr class="even cancelled_order">
								<td class="text-center"><a href="{{ route('account.order', ['code' => $orders->code]) }}" title="">#{{ $orders->id }}</a></td>
								<td class="text-center"><span>{{ date('d/m/Y H:i:s', strtotime($orders->created_at)) }}</span></td>
								<td class="text-center"><span class="status_pending">{{ $orderStatus }}</span></td>
								<td class="text-center"><span class="total money">{{ number_format($orders->total_price) }}₫</span></td>
							</tr>
						@endforeach
					</tbody>
				</table>
			@endif
		</div>

		<div class="col-xs-12" id="customer_sidebar">
			
			<h2>{{Auth::user()->full_name}}</h2>
			

			<p class="email ">{{Auth::user()->email}}</p>
			<div class="address ">
				
				<p></p>
				
				<p></p>
				
				<p> </p>
				<p></p>
				
				<a id="view_address" href="{{ route('addresses') }}">Xem địa chỉ</a>
			</div>
		</div>
	</div>

</div>
@endsection