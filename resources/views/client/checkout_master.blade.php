<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" class="flexbox">
	<head>
		<link rel="shortcut icon" href="{{ asset('public/assets/images/favicon.png') }}" type="image/png" />
		<title>
			{{ $set->title }} - Thanh toán đơn hàng
		</title>

		
			<meta name="description" content="{{ $set->description }}" />
		
	    <link href='{{ asset('public/assets/css/checkouts.css?v=1.1') }}' rel='stylesheet' type='text/css'  media='all'  />
		<script src='{{ asset('public/assets/js/jquery.min.js') }}' type='text/javascript'></script>
		<script src='{{ asset('public/assets/js/jquery.validate.js') }}' type='text/javascript'></script>

		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2, user-scalable=no">		

		<script type="text/javascript">
			var toggleShowOrderSummary = false;
			$(document).ready(function() {
			    var currentUrl = '';			    

			    if ($('#reloadValue').val().length == 0)
			    {
			        $('#reloadValue').val(currentUrl);
			        $('body').show();
			    }
			    else
			    {
			        window.location = $('#reloadValue').val();
			        $('#reloadValue').val('');
			    }

				$('body')
					.on('click', '.order-summary-toggle', function() {
						toggleShowOrderSummary = !toggleShowOrderSummary;

						if(toggleShowOrderSummary) {
							$('.order-summary-toggle')
								.removeClass('order-summary-toggle-hide')
								.addClass('order-summary-toggle-show');

							$('.sidebar:not(".sidebar-second") .sidebar-content .order-summary')
								.removeClass('order-summary-is-collapsed')
								.addClass('order-summary-is-expanded');
								
							$('.sidebar.sidebar-second .sidebar-content .order-summary')
								.removeClass('order-summary-is-expanded')
								.addClass('order-summary-is-collapsed');
						} else {
							$('.order-summary-toggle')
								.removeClass('order-summary-toggle-show')
								.addClass('order-summary-toggle-hide');

							$('.sidebar:not(".sidebar-second") .sidebar-content .order-summary')
								.removeClass('order-summary-is-expanded')
								.addClass('order-summary-is-collapsed');
								
							$('.sidebar.sidebar-second .sidebar-content .order-summary')
								.removeClass('order-summary-is-collapsed')
								.addClass('order-summary-is-expanded');
						}
					});
			});
		</script>

	</head>
	<body>


        <input id="reloadValue" type="hidden" name="reloadValue" value="" />
		<input id="is_vietnam" type="hidden" value="true" />
		<input id="is_vietnam_location" type="hidden" value="true" />
		<div class="banner">
			<div class="wrap">
				<a href="/" class="logo">
					<h1 class="logo-text">{{ $set->company_name }}</h1>
				</a>
			</div>
		</div>
		<button class="order-summary-toggle order-summary-toggle-hide">
			<div class="wrap">
				<div class="order-summary-toggle-inner">
					<div class="order-summary-toggle-icon-wrapper">
						<svg width="20" height="19" xmlns="http://www.w3.org/2000/svg" class="order-summary-toggle-icon"><path d="M17.178 13.088H5.453c-.454 0-.91-.364-.91-.818L3.727 1.818H0V0h4.544c.455 0 .91.364.91.818l.09 1.272h13.45c.274 0 .547.09.73.364.18.182.27.454.18.727l-1.817 9.18c-.09.455-.455.728-.91.728zM6.27 11.27h10.09l1.454-7.362H5.634l.637 7.362zm.092 7.715c1.004 0 1.818-.813 1.818-1.817s-.814-1.818-1.818-1.818-1.818.814-1.818 1.818.814 1.817 1.818 1.817zm9.18 0c1.004 0 1.817-.813 1.817-1.817s-.814-1.818-1.818-1.818-1.818.814-1.818 1.818.814 1.817 1.818 1.817z"></path></svg>
					</div>
					<div class="order-summary-toggle-text order-summary-toggle-text-show">
						<span>Hiển thị thông tin đơn hàng</span>
						<svg width="11" height="6" xmlns="http://www.w3.org/2000/svg" class="order-summary-toggle-dropdown" fill="#000"><path d="M.504 1.813l4.358 3.845.496.438.496-.438 4.642-4.096L9.504.438 4.862 4.534h.992L1.496.69.504 1.812z"></path></svg>
					</div>
					<div class="order-summary-toggle-text order-summary-toggle-text-hide">
						<span>Ẩn thông tin đơn hàng</span>
						<svg width="11" height="7" xmlns="http://www.w3.org/2000/svg" class="order-summary-toggle-dropdown" fill="#000"><path d="M6.138.876L5.642.438l-.496.438L.504 4.972l.992 1.124L6.138 2l-.496.436 3.862 3.408.992-1.122L6.138.876z"></path></svg>
					</div>
					<div class="order-summary-toggle-total-recap" data-checkout-payment-due-target="2441000000">
						<span class="total-recap-final-price">{{ $totalPrice }}₫</span>
					</div>
				</div>
			</div>
		</button>
		<div class="content content-second">
			<div class="wrap">
				<div class="sidebar sidebar-second">
					<div class="sidebar-content">
						<div class="order-summary">
							<div class="order-summary-sections">
								
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
										---->
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="content">
		
			<div class="wrap">



					@yield('main')

					</div>
					<div class="main-footer">
					
					</div>
				</div>
			</div>
		
		</div>

	</body>
</html>

