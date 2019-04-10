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
											<a href="/cart">Giỏ hàng</a>
										</li>
                                        
										    <li class="breadcrumb-item ">
											    
												    <a href="{{ url()->previous() }}" class="breadcrumb-link">
											    
													    Thông tin giao hàng
											    
												    </a>
											    
										    </li>
										    <li class="breadcrumb-item breadcrumb-item-current">
											    
													    Phương thức thanh toán
											    
										    </li>
                                        
									</ul>
								
							</div>
							<div class="main-content">
								<form id="form_next_step" accept-charset="UTF-8" method="post">
									<div class="step">
										<div class="step-sections " step="2">
                                            
												
												<div id="section-payment-method" class="section">
													<div class="section-header">
														<h2 class="section-title">Phương thức thanh toán</h2>
													</div>
													<div class="section-content">
														<div class="content-box">
															
																
																	<div class="radio-wrapper content-box-row">
																		<label class="radio-label" for="payment_method_id">
																			<div class="radio-input">
																				<input class="input-radio" name="payment_method" type="radio" value="1" checked />
																			</div>
																			<span class="radio-label-primary">CHUYỂN KHOẢN NGÂN HÀNG</span>
																		</label>
																	</div>
																	
		<div class="radio-wrapper content-box-row content-box-row-secondary " for="payment_method_id_436163">
			<div class="blank-slate">															
- Ngân hàng Vietcombank chi nhánh xyz

Tên chủ tài khoản : NGUYỄN VĂN XUYÊN
Số TK: 0421000999999

- Ngân hàng ACB chi nhánh 3 tháng 2

Tên chủ tài khoản : PHAN MINH TRIẾT
Số TK: 89808888

Vui lòng liên hệ với kinh doanh qua hotline: 1900.**** trước khi chuyển khoản đặt hàng.

																			</div>
																		</div>
																	
																
																	<div class="radio-wrapper content-box-row">
																		<label class="radio-label" for="payment_method_id">
																			<div class="radio-input">
																				<input class="input-radio" name="payment_method" type="radio" value="2"  />
																			</div>
																			<span class="radio-label-primary">THANH TOÁN TẠI NHÀ</span>
																		</label>
																	</div>		
															
														</div>
													</div>
												</div>
											
										</div>
										<div class="step-footer">
                                     
                                                        {{ csrf_field() }}
                                                        <button type="submit" class="step-footer-continue-btn btn">
                                                            <span class="btn-content">Hoàn tất đơn hàng</span>
                                                            <i class="btn-spinner icon icon-button-spinner"></i>
                                                        </button>
                                                    </form>
                                                    <a href="/checkouts/fc1c6947861344bd817a8800d359d2ab?step=1" class="step-footer-previous-link">
                                                        <svg class="previous-link-icon icon-chevron icon" xmlns="http://www.w3.org/2000/svg" width="6.7" height="11.3" viewBox="0 0 6.7 11.3"><path d="M6.7 1.1l-1-1.1-4.6 4.6-1.1 1.1 1.1 1 4.6 4.6 1-1-4.6-4.6z"></path></svg>
                                                        Quay lại thông tin giao hàng
                                                    </a>
                                                
                                            
										</div>
									</div>
								
							</div>
						</div>
@endsection