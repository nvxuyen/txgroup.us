@extends('client.checkout_master')
@section('main')

<div class="sidebar">
<div class="sidebar-content">
<div class="order-summary order-summary-is-collapsed">
<h2 class="visually-hidden">Thông tin đơn hàng</h2>
<div class="order-summary-sections">
	<div class="order-summary-section order-summary-section-product-list" data-order-summary-section="line-items">
		<table class="product-table">
			<thead>
				<tr>
					<th scope="col"><span class="visually-hidden">Hình ảnh</span></th>
					<th scope="col"><span class="visually-hidden">Mô tả</span></th>
					<th scope="col"><span class="visually-hidden">Số lượng</span></th>
					<th scope="col"><span class="visually-hidden">Giá</span></th>
				</tr>
			</thead>
			<tbody>
				@foreach($cart as $c)
				@php
					$img = App\ImgProduct::getImgFirst($c->id); 
				@endphp
					<tr class="product" data-product-id="1017356864" data-variant-id="1033480280">
						<td class="product-image">
							<div class="product-thumbnail">
								<div class="product-thumbnail-wrapper">
									<img class="product-thumbnail-image" alt="{{ $c->name }}" src="{{asset('storage/app/'.$img)}}" />
								</div>
								<span class="product-thumbnail-quantity" aria-hidden="true">{{ $c->qty }}</span>
							</div>
						</td>
						<td class="product-description">
							<span class="product-description-name order-summary-emphasis">{{ $c->name }}</span>
							
						</td>
						<td class="product-quantity visually-hidden">{{ $c->qty }}</td>
						<td class="product-price">
							<span class="order-summary-emphasis">{{ number_format($c->price) }}₫</span>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<!---
	
		<div class="order-summary-section order-summary-section-discount" data-order-summary-section="discount">
			<form id="form_discount_add" accept-charset="UTF-8" method="post">
				<input name="utf8" type="hidden" value="✓">
				<div class="fieldset">
					<div class="field  ">
						<div class="field-input-btn-wrapper">
							<div class="field-input-wrapper">
								<label class="field-label" for="discount.code">Mã giảm giá</label>
								<input placeholder="Mã giảm giá" class="field-input" data-discount-field="true" autocomplete="off" autocapitalize="off" spellcheck="false" size="30" type="text" id="discount.code" name="discount.code" value="" />
							</div>
							<button type="submit" class="field-input-btn btn btn-default btn-disabled">
								<span class="btn-content">Sử dụng</span>
								<i class="btn-spinner icon icon-button-spinner"></i>
							</button>
						</div>
						
					</div>
				</div>
			</form>
		</div>

	-->
	
	<div class="order-summary-section order-summary-section-total-lines" data-order-summary-section="payment-lines">
		<table class="total-line-table">
			<thead>
				<tr>
					<th scope="col"><span class="visually-hidden">Mô tả</span></th>
					<th scope="col"><span class="visually-hidden">Giá</span></th>
				</tr>
			</thead>
			<tbody>
				<tr class="total-line total-line-subtotal">
					<td class="total-line-name">Tạm tính</td>
					<td class="total-line-price">
						<span class="order-summary-emphasis" data-checkout-subtotal-price-target="2441000000">
							{{ $totalPrice }}₫
						</span>
					</td>
				</tr>
				<!---
				<tr class="total-line total-line-shipping">
					<td class="total-line-name">Phí vận chuyển</td>
					<td class="total-line-price">
						<span class="order-summary-emphasis" data-checkout-total-shipping-target="0">
							
								—
							
						</span>
					</td>
				</tr>
				--->
			</tbody>
			<tfoot class="total-line-table-footer">
				<tr class="total-line">
					<td class="total-line-name payment-due-label">
						<span class="payment-due-label-total">Tổng cộng</span>
					</td>
					<td class="total-line-name payment-due">
						<span class="payment-due-currency">VND</span>
						<span class="payment-due-price" data-checkout-payment-due-target="2441000000">
							{{ $totalPrice }}₫
						</span>
					</td>
				</tr>
			</tfoot>
		</table>
	</div>
</div>
</div>
</div>
</div>
<div class="main">
<div class="main-header">
<a href="/" class="logo">
<h1 class="logo-text">{{ $set->company_name }}</h1>
</a>

<ul class="breadcrumb">
	<li class="breadcrumb-item">
		<a href="{{ route('cart') }}">Giỏ hàng</a>
	</li>
    
	    <li class="breadcrumb-item breadcrumb-item-current">
		    
				    Thông tin giao hàng
		    
	    </li>
	    <li class="breadcrumb-item ">
		    
				    Phương thức thanh toán
		    
	    </li>
    
</ul>

</div>
<div class="main-content">
<form id="form_next_step" action="{{ route('checkout') }}" accept-charset="UTF-8" method="post">
{{ csrf_field() }}

<div class="step">
	<div class="step-sections " step="1">
        
		
			<div class="section">
				<div class="section-header">
					<h2 class="section-title">Thông tin giao hàng</h2>
				</div>
				<div class="section-content section-customer-information no-mb">
                    
					    <input name="utf8" type="hidden" value="✓">
					    <div class="inventory_location_data">
						    
							
							    <input name="customer_shipping_district" type="hidden" value="" />
								<input name="customer_shipping_ward" type="hidden" value="" />
						    
					    </div>
					@if(Auth::check())
					<div class="logged-in-customer-information">
					<div class="logged-in-customer-information-avatar-wrapper">
						<div class="logged-in-customer-information-avatar gravatar" style="background-image: url(//www.gravatar.com/avatar/024566c048e241b85ed59f3b0b7a1c62.jpg?s=100&amp;d=blank);filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='//www.gravatar.com/avatar/024566c048e241b85ed59f3b0b7a1c62.jpg?s=100&amp;d=blank', sizingMethod='scale')"></div>
					</div>
					<input type="hidden" name="email" value="{{ Auth::user()->email }}" />
					<p class="logged-in-customer-information-paragraph">
						{{ Auth::user()->full_name }} ({{ Auth::user()->email }})
						<br>
						<a href="{{ route('logout', ['return_url' => 'checkout']) }}">Đăng xuất</a>
					</p>
					</div>
					@else
						<p class="section-content-text">
							Bạn đã có tài khoản?
							<a href="{{ route('login',['urlredirect' => 'checkout']) }}">Đăng nhập</a>
						</p>
					@endif
					
					
					<div class="fieldset">
						@if(Auth::check())			
						<div class="field field-show-floating-label">
							<div class="field-input-wrapper field-input-wrapper-select">
								<label class="field-label" for="stored_addresses">Địa chỉ đã lưu trữ</label>
								<select class="field-input" id="stored_addresses">
									<option value="0">Thêm địa chỉ mới...</option>
									@foreach($customer as $c)
										<option value="{{ $c->id }}">
											{{ $c->full_name }},
											{{ $c->phone }},
											{{ $c->address }},
											{{ $c->getDistrict() }},
											{{ $c->getProvince() }}
										</option>
									@endforeach
								</select>
							</div>
						</div>
						@endif
						
						
							<div class="field field-required  ">
								<div class="field-input-wrapper">
									<label class="field-label" for="billing_address_full_name">Họ và tên</label>
									<input placeholder="Họ và tên" autocapitalize="off" spellcheck="false" class="field-input" size="30" type="text" id="full_name" name="full_name" value="" />
								</div>
								
							</div>
						
						
								@if(!Auth::check())
								<div class="field  field-two-thirds  ">
									<div class="field-input-wrapper">
										<label class="field-label" for="checkout_user_email">Email</label>
										<input placeholder="Email" autocapitalize="off" spellcheck="false" class="field-input" size="30" type="email" id="email" name="email" value="" />
									</div>
									
								</div>
								@endif
							
						
						
							<div class="field field-required field-third  ">
								<div class="field-input-wrapper">
									<label class="field-label" for="billing_address_phone">Số điện thoại</label>
									<input placeholder="Số điện thoại" autocapitalize="off" spellcheck="false" class="field-input" size="30" maxlength="11" type="phone" id="phone" name="phone" value="" />
								</div>
								
							</div>
						
						
							<div class="field field-required  ">
								<div class="field-input-wrapper">
									<label class="field-label" for="billing_address_address1">Địa chỉ</label>
									<input placeholder="Địa chỉ" autocapitalize="off" spellcheck="false" class="field-input" size="30" type="text" id="address" name="address" value="" />
								</div>
								
							</div>
						
					</div>
				</div>
				<div class="section-content">
					<div class="fieldset">
						
							<form id="form_update_location" class="clearfix" accept-charset="UTF-8" method="post">
							<input name="selected_customer_shipping_province" type="hidden" value="">
										<input name="selected_customer_shipping_district" type="hidden" value="">
								        <input name="selected_customer_shipping_ward" type="hidden" value="">
								<input name="utf8" type="hidden" value="✓">
								
								<div class="field field-show-floating-label field-required field-half ">
									<div class="field-input-wrapper field-input-wrapper-select">
										<label class="field-label" for="customer_shipping_province"> Tỉnh / thành  </label>
										<select class="field-input" id="province" name="province">
											<option data-code="null" value="0" >  Chọn tỉnh / thành </option>
												@foreach($province as $pro)
													<option value="{{ $pro->id }}" >{{ $pro->name }}</option>
												@endforeach
											  
										</select>
									</div>
									
								</div>
								
									
										<div class="field field-show-floating-label field-required field-half ">
											<div class="field-input-wrapper field-input-wrapper-select">
												<label class="field-label" for="customer_shipping_district">Quận / huyện</label>
												<select class="field-input" id="district" name="district">
													<option value="null">Chọn quận / huyện</option>
												</select>
											</div>
											
										</div>
										
									
								
							</form>
						
					</div>

				</div>
                <div id="change_pick_location_or_shipping">
				    
                    
                </div>
			</div>
        
		
	</div>
	<div class="step-footer">
        
                    <input name="utf8" type="hidden" value="✓">
                    <button type="submit" class="step-footer-continue-btn btn">
                        <span class="btn-content">Tiếp tục đến phương thức thanh toán</span>
                        <i class="btn-spinner icon icon-button-spinner"></i>
                    </button>
                </form>
                <a class="step-footer-previous-link" href="{{ route('cart') }}">
                    <svg class="previous-link-icon icon-chevron icon" xmlns="http://www.w3.org/2000/svg" width="6.7" height="11.3" viewBox="0 0 6.7 11.3"><path d="M6.7 1.1l-1-1.1-4.6 4.6-1.1 1.1 1.1 1 4.6 4.6 1-1-4.6-4.6z"></path></svg>
                    Giỏ hàng
                </a>
            
        
	</div>
</div>

		<script>
			$(document).ready(function(){
				$("#province").change(function(){
					var idProvince  = $(this).val();
					$.get("{{ route('trang-chu') }}/ajax/district/"+idProvince,function(data){
						$("#district").html(data);
					});

				});

				$("#stored_addresses").change(function(){
					var idCustomer = $(this).val();
					if(idCustomer == 0){
						document.getElementById('full_name').value = '';
						document.getElementById('phone').value = '';
						document.getElementById('address').value = '';
						document.getElementById('province').value = '';
						document.getElementById('district').value = '';
						$("#district").html('<option value="null">Chọn quận / huyện</option>');
					}
					$.getJSON("{{ route('trang-chu') }}/ajax/customer/"+idCustomer, function(data){

						$.get("{{ route('trang-chu') }}/ajax/district/"+data.provinces_id+"/"+data.districts_id,function(result){
							$("#district").html(result);
						});
						document.getElementById('full_name').value = data.full_name;
						document.getElementById('phone').value = data.phone;
						document.getElementById('address').value = data.address;
						document.getElementById('province').value = data.provinces_id;
						document.getElementById('district').value = data.districts_id;
						//var e = document.getElementById("district");

					});
				});
			});
		</script>
@endsection