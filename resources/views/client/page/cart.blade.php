@extends('client.master')
@section('sidebar')
@include('client.layout.sidebar')
@endsection
@section('banner')
@include('client.layout.banner')
@endsection
@section('content')

<div id="cart" class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
	<!-- Begin empty cart -->
	
	<div class="row">
		<div id="layout-page" class="col-md-12">
			<span class="header-page clearfix">
				<h1>Giỏ hàng</h1> </span>
			@if(count($cart) != 0)
			<form action="{{ route('cart') }}" method="post" id="cartformpage">
				{{ csrf_field() }}
				<table>
					<thead>
						<tr>
							<th class="image">&nbsp;</th>
							<th class="item">Tên sản phẩm</th>
							<th class="qty">Số lượng</th>
							<th class="price">Giá tiền</th>
							<th class="remove"></th>
						</tr>
					</thead>
					<tbody>
						@foreach($cart as $p)

						@php 
						$img = App\ImgProduct::getImgFirst($p->id); 
						$pro = App\Product::findorFail($p->id);
						@endphp
						<tr>
							<td class="image">
								<div class="product_image">
									<a href="{{ route('products', ['name'=>$pro->name_ascii]) }}">
										<img src="{{asset('storage/app/'.$img)}}">
									</a>
								</div>
							</td>
							<td class="item">
								<a href="{{ route('products', ['name'=>$pro->name_ascii]) }}">
									<strong>{{ $p->name }}</strong>
									
								</a>
							</td>
							<td class="qty">
								<input type="number" size="4" name="qty[][{{ $p->rowId }}]" min="1" value="{{ $p->qty }}" onfocus="this.select();" class="tc item-quantity">
							</td>
							<td class="price">{{ number_format($p->price) }}₫</td>
							<td class="remove">
								<a href="{{ route('cart.remove.item',['id'=>$p->rowId]) }}" class="cart">Xóa</a>
							</td>
						</tr>
						@endforeach
						
						<tr class="summary">
							<td class="image">&nbsp;</td>
							<td>&nbsp;</td>
							<td class="text-center"><b>Tổng cộng:</b></td>
							<td class="price">
								<span class="total">
									<strong>{{ $totalPrice }}₫</strong>
								</span>
							</td>
							<td>&nbsp;</td>
						</tr>
					</tbody>
				</table>

				<div class="col-md-6 inner-left inner-right">
					<div class="checkout-buttons clearfix">
						<label for="note">Ghi chú </label>
						<textarea id="note" name="note" rows="8" cols="50"></textarea>
					</div>
				</div>

				<div class="col-md-6 cart-buttons inner-right inner-left">
					<div class="buttons clearfix">
						<button type="submit" id="checkout" class="button-default" name="btn" value="checkout">Thanh toán</button>
						<button type="submit" id="update-cart" class="button-default" name="btn" value="update">Cập nhật</button>
					</div>
				</div>
<div class="col-md-12">
	
<a href="{{ route('products.all') }}">
          <i class="fa fa-reply"></i> Tiếp tục mua hàng</a>
				</div>
				

			</form>
			@else
				<p class="text-center">Không có sản phẩm nào trong giỏ hàng!</p>
				<p class="text-center"><a href="{{ route('products.all') }}">
          			<i class="fa fa-reply"></i> Tiếp tục mua hàng</a>
        		</p>
			@endif
		</div>
	</div>
	


	<!-- End cart -->

</div>
@endsection