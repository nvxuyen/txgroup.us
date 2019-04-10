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
											@foreach($order->detail() as $c)
											@php
												$img = App\ImgProduct::getImgFirst($c->products_id); 
											@endphp
												<tr class="product" data-product-id="1017356864" data-variant-id="1033480280">
													<td class="product-image">
														<div class="product-thumbnail">
															<div class="product-thumbnail-wrapper">
																<img class="product-thumbnail-image" alt="{{ $c->getProduct()->name }}" src="{{asset('storage/app/'.$img)}}" />
															</div>
															<span class="product-thumbnail-quantity" aria-hidden="true">{{ $c->quantity }}</span>
														</div>
													</td>
													<td class="product-description">
														<span class="product-description-name order-summary-emphasis">{{ $c->getProduct()->name }}</span>
														
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
													<span class="payment-due-price" data-checkout-payment-due-target="{{ $order->total_price }}">
														{{ $order->total_prices }}₫
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
								
							</div>
							<div class="main-content">
								
                                    
									    <div >
										    <div class="section">
											    <div class="section-header os-header">
												    
													    <svg width="50" height="50" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="#000" stroke-width="2" class="hanging-icon checkmark"><path class="checkmark_circle" d="M25 49c13.255 0 24-10.745 24-24S38.255 1 25 1 1 11.745 1 25s10.745 24 24 24z"></path><path class="checkmark_check" d="M15 24.51l7.307 7.308L35.125 19"></path></svg>
												    
												    <div class="os-header-heading">
													    <h2 class="os-header-title">
														    
															    Đặt hàng thành công
														    
													    </h2>
													    <span class="os-order-number">
														    Mã đơn hàng # {{ $order->id }}
													    </span>
													    
														    <span class="os-description">
															    Cám ơn bạn đã mua hàng!
														    </span>
													    
												    </div>
											    </div>
										    </div>
										    
											    
										    
										    <div class="section thank-you-checkout-info">
											    <div class="section-content">
												    <div class="content-box">
													    <div class="content-box-row content-box-row-padding content-box-row-no-border">
														    <h2>Thông tin đơn hàng</h2>
													    </div>
													    <div class="content-box-row content-box-row-padding">
														    <div class="section-content">
															    <div class="section-content-column">
																    
																	    <h3>Thông tin giao hàng</h3>
																	    <p>
																		    
																			    {{ $order->getCustomer()->full_name }}
																			    <br />
																		    
																		    
																			    {{ $order->getCustomer()->address }}
																			    <br />
																		    
																			
																		    
																			    {{ $order->getCustomer()->getDistrict() }}
																			    <br />
																		    
																		    
																			    {{ $order->getCustomer()->getProvince() }}
																			    <br />
																		    
																			    {{ $order->getCustomer()->phone }}
																			    <br />
																		    
																	    </p>
																    
																    
																    
																	    <h3>Phương thức thanh toán</h3>
																	    <p>
																		    
																			    CHO KHÁCH HÀNG TRONG NỘI THÀNH THÀNH PHỐ HỒ CHÍ MINH (C.O.D)
																		    
																	    </p>
																    
															    </div>
														    </div>
													    </div>
												    </div>
											    </div>
										    </div>
										    <div class="step-footer">
                                                
                                                    <a href="{{ route('trang-chu') }}" class="step-footer-continue-btn btn">
                                                        <span class="btn-content">Tiếp tục mua hàng</span>
                                                    </a>
                                                
											    <p class="step-footer-info">
												    <i class="icon icon-os-question"></i>
												    <span>
													    
													    
													    Cần hỗ trợ? <a href="mailto:kinhdoanh@tandoanh.vn">Liên hệ chúng tôi</a>
												    </span>
											    </p>
										    </div>
									    </div>
                                    
								
							</div>
							<div class="main-footer">
							
							</div>
						</div>
@endsection