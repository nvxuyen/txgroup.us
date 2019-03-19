
<!doctype html>
<!--[if lt IE 7]><html class="no-js ie6 oldie" lang="en"><![endif]-->
<!--[if IE 7]><html class="no-js ie7 oldie" lang="en"><![endif]-->
<!--[if IE 8]><html class="no-js ie8 oldie" lang="en"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en">
	<!--<![endif]-->
	<head>

 		<meta name="msvalidate.01" content="73CE1AB0BA751D816D7BF2E720C4F877" />
		<link rel="shortcut icon" href="{{asset('public')}}/assets/images/favicon.png?v=772" type="image/png" />
		<meta charset="utf-8" />
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1' /><![endif]-->
		<title>
			TXGroup
		</title>
		
		<meta name="description" content="Cửa Hàng Vi Tính TXGroup - Chúng tôi chuyên cung cấp giải pháp hoàn hảo và linh kiện cao cấp dùng cho máy tính với giá thành và dịch vụ tốt nhất ." />
		<meta content='width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=0' name='viewport' />


		<script src="{{asset('public')}}/assets/js/jquery.min.1.11.0.js"></script>
<script src="{{asset('public')}}/assets/js/bootstrap.min.js"></script>
<script src='{{asset('public')}}/assets/js//option_selection.js' type='text/javascript'></script>
<script src='{{asset('public')}}/assets/js//api.jquery.js' type='text/javascript'></script>
<script src='//theme.hstatic.net/1000162654/1000230569/14/scripts.js?v=772' type='text/javascript'></script>
<script src='//theme.hstatic.net/1000162654/1000230569/14/modernizr.custom.js?v=772' type='text/javascript'></script>
<script src="{{asset('public')}}/assets/js/html5shiv.js"></script>
<script src="{{asset('public')}}/assets/js/jquery-migrate-1.2.0.min.js"></script>
<script src='{{asset('public')}}/assets/js/jquery.touchSwipe.min.js' type='text/javascript'></script>
<script data-target=".product-resize"  data-parent=".products-resize" data-img-box=".image-resize" src="{{asset('public')}}/assets/js/fixheightproductv2.js"></script>
<script src="{{asset('public')}}/assets/js/haravan.plugin.1.0.js"></script>

<script src='{{asset('public')}}/assets/js/jquery.flexslider.js' type='text/javascript'></script>
<script src='{{asset('public')}}/assets/js/owl.carousel.js' type='text/javascript'></script>
<link href='{{asset('public')}}/assets/css/owl.carousel.css' rel='stylesheet' type='text/css'  media='all'  />
<script src='{{asset('public')}}/assets/js/classie.js?v=772' type='text/javascript'></script>
<script src='{{asset('public')}}/assets/js/mlpushmenu.js?v=772' type='text/javascript'></script>


<!--------------CSS----------->
<link href='{{asset('public')}}/assets/css/page-contact-form.css' rel='stylesheet' type='text/css'  media='all'  />








	<meta property="og:type" content="website" />
	<meta property="og:title" content="TXGroup" />
	<meta property="og:image" content="http:assets/js/share_fb_home.png?v=772" />
	<meta property="og:image:secure_url" content="https:assets/js/share_fb_home.png?v=772" />
	

	
	<meta property="og:description" content="Cửa Hàng Vi Tính TXGroup - Chúng tôi chuyên cung cấp giải pháp hoàn hảo và linh kiện cao cấp dùng cho máy tính với giá thành và dịch vụ tốt nhất ." />
	
	<meta property="og:url" content="https://txgroup.us" />
	<meta property="og:site_name" content="TXGroup" />


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="{{asset('public')}}/assets/css/bootstrap.3.3.1.css">
<!-- Theme haravan-->
<link rel="stylesheet" href="{{asset('public')}}/assets/css/haravantheme.1.0.css?v=772">
<!-- Latest compiled and minified JavaScript -->
<link href='{{asset('public')}}/assets/css/font-awesome.min.css' rel='stylesheet' type='text/css'  media='all'  />

<link href='{{asset('public')}}/assets/css/flexslider.css' rel='stylesheet' type='text/css'  media='all'  />
<link href='{{asset('public')}}/assets/css/styles.css?v=772' rel='stylesheet' type='text/css'  media='all'  />

<link href='{{asset('public')}}/assets/css/sidebar.css?v=772' rel='stylesheet' type='text/css'  media='all'  />

	</head>
	<body>

		<div class="container-mp nav-wrapper">
			<!-- Begin: wrapper -->
			<div class="wrapper mp-pusher" id="mp-pusher">
			@include('client.layout.nav_mobile')
<script>
new mlPushMenu( document.getElementById( 'mp-menu' ), document.getElementById( 'trigger' ), {
	type : 'cover'
} );
</script>

				<div class="scroller">
					<div class="scroller-inner">
					
					@include('client.layout.header')
			
					@include('client.layout.nav')

						<section id="content" class="clearfix container">
					
					@yield('row-content')
							
							
							<aside class="col-md-3  hidden-sm hidden-xs">
								<!-- Sidebar menu-->
<div class="list-group" id="list-group-l">
	
</div>


<script>

$(document).ready(function(){
	//$('ul li:has(ul)').addClass('hassub');
	$('#cssmenu ul ul li:odd').addClass('odd');
	$('#cssmenu ul ul li:even').addClass('even');
	$('#cssmenu > ul > li > a').click(function() {
		$('#cssmenu li').removeClass('active');
		$(this).closest('li').addClass('active');
		var checkElement = $(this).nextS();
		if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
			$(this).closest('li').removeClass('active');
			checkElement.slideUp('normal');
		}
		if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
			$('#cssmenu ul ul:visible').slideUp('normal');
			checkElement.slideDown('normal');
		}
		if($(this).closest('li').find('ul').children().length == 0) {
			return true;
		} else {
			return false;
		}
	});

	$('.drop-down').click(function(e){		
		if ( $(this).parents('li').hasClass('has-sub') ){
			e.preventDefault();
			if($(this).hasClass('open-nav')){
				$(this).removeClass('open-nav');
				$(this).parents('li').children('ul.lve2').slideUp('normal').removeClass('in');
			}else {
				$(this).addClass('open-nav');
				$(this).parents('li').children('ul.lve2').slideDown('normal').addClass('in');
			}
		}else {

		}
	});

});

$("#list-group-l ul.navs li.active").parents('ul.children').addClass("in");
</script>


<!-- Sidebar menu-->

@yield('sidebar')



<!-- Facebook -->


<!-- Facebook-->

@yield('banner')

							</aside>
							

							<h1 class="hidden">TXGroup</h1>

@yield('content')


						</section>
						@include('client.layout.footer')

					</div>

					<!--Scroll to Top-->
					
					<a href="#" class="scrollToTop">
						<i class="fa fa-chevron-up"></i>
					</a>
					

					<script>
					jQuery(document).ready(function() {
						//Check to see if the window is top if not then display button
						jQuery(window).scroll(function() {
							if ($(this).scrollTop() > 100) {
								$('.scrollToTop').fadeIn();
							} else {
								$('.scrollToTop').fadeOut();
							}
						});

						//Click event to scroll to top
						jQuery('.scrollToTop').click(function() {
							$('html, body').animate({
								scrollTop: 0
							}, 600);
							return false;
						});

					});
					</script>

				</div>
			</div>
		</div>
		<div id="myCart" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title" id="exampleModalLabel">
							Bạn có <b></b> sản phẩm trong giỏ hàng
						</h4>

						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<a aria-hidden="true"></a>
						</button>

					</div>
					<form action="/cart" method="post" id="cartform">
						<div class="modal-body">
							<table style="width:100%;" id="cart-table">
								<tr>
									<th></th>
									<th>Tên sản phẩm</th>
									<th>Số lượng</th>
									<th>Giá tiền</th>
									<th></th>
								</tr>
								<tr class="line-item original">
									<td class="item-image"></td>
									<td class="item-title">
										<a></a>
									</td>
									<td class="item-quantity"></td>
									<td class="item-price"></td>
									<td class="item-delete"></td>
								</tr>
							</table>
						</div>
						<div class="modal-footer">
							<div class="row">
								<div class="col-sm-6">
									<div class="modal-note">
										<textarea placeholder="Viết ghi chú" id="note" name="note" rows="5"></textarea>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="total-price-modal">
										Tổng cộng : <span class="item-total"></span>
									</div>
								</div>
							</div>
							<div class="row" style="margin-top:10px;">
								<div class="col-lg-6">
									<div class="comeback">
										<a href="/collections/all">
											<img src="{{asset('public')}}/assets/images/icon-tieptuc.png" />Tiếp tục mua hàng
										</a>
									</div>
								</div>
								<div class="col-lg-6 text-right">
									<div class="buttons btn-modal-cart">
										<button type="submit" class="button-default" id="checkout" name="checkout">
											Đặt hàng
										</button>
									</div>

									<div class="buttons btn-modal-cart">
										<button type="submit" class="button-default"  id="update-cart-modal" name="">
											Cập nhật
										</button>
									</div>
								</div>
							</div>

						</div>

					</form>
				</div>
			</div>
		</div>

		<!-- Quick view -->
		<div class="modal fade hidden-xs" id="quick-view-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="false">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="p-title   modal-title " id="">Tên sản phẩm</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><a aria-hidden="true"></a></button>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<div class="row">
						<form method="post" action="/cart/add">
							<div class="col-lg-5 col-md-6">
								<div class="image-zoom row">
									<img class="p-product-image-feature" src="">
									<div id="p-sliderproduct" class="flexslider">
										<ul class="slides"></ul>
									</div>
								</div>
							</div>
							<div class="col-lg-7 col-md-6 pull-right">
								<div class="form-input">
									<div class="product-price">
										<span class="p-price "></span>
										<del></del>
									</div>
								</div>
								<div class="p-option-wrapper">
									<select name="id" class="" id="p-select"></select>
								</div>
								<div class="form-input ">
									<label>Số lượng</label>
									<input name="quantity" type="number" min="1" value="1" />
								</div>

								<div class="form-input" style="width: 100%">
									<button type="submit" class="btn-detail  btn-color-add btn-min-width btn-mgt btn-addcart">Thêm vào giỏ</button>
									<button disabled class="btn-detail addtocart btn-color-add btn-min-width btn-mgt btn-soldout">Hết hàng</button>
									<div class="qv-readmore">
										<span> hoặc </span><a class="read-more p-url" href="" role="button">Xem chi tiết</a>
									</div>
								</div>
							</div>
							<div class="col-lg-7 col-md-6 pull-right">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<script>
var p_select_data = $('.p-option-wrapper').html();
var p_zoom = $('.image-zoom').html();
var quickViewProduct = function (purl) {

	if ($(window).width() < 680) { window.location = purl; return false; }
	modal = $('#quick-view-modal'); modal.modal('show');
	$.ajax({
		url: purl + '.js',
		success: function (product) {
			$.each(product.options, function (i, v) {
				product.options[i] = v.name;
			})
			modal.find('.p-title').html(product.title);
			modal.find('.p-option-wrapper').html(p_select_data);
			$('.image-zoom').html(p_zoom);
			modal.find('.p-url').attr('href', product.url);

			$.each(product.variants, function (i, v) {
				modal.find('select#p-select').append("<option value='" + v.id + "'>" + v.title + ' - ' + v.price + "</option>");
			})
			if (product.variants.length == 1 && product.variants[0].title.indexOf('Default') != -1)
				$('.p-option-wrapper').hide();
			else
				$('.p-option-wrapper').show();
			if (product.variants.length == 1 && product.variants[0].title.indexOf('Default') != -1) {
				callBack(product.variants[0], null);
			}
			else {
				new Haravan.OptionSelectors("p-select", { product: product, onVariantSelected: callBack });
				if (product.options.length == 1 && product.options[0].indexOf('Tiêu đề')==-1)
					modal.find('.selector-wrapper:eq(0)').prepend('<label>' + product.options[0] + '</label>');
				$('.p-option-wrapper select:not(#p-select)').each(function () {
					$(this).wrap('<span class="custom-dropdown custom-dropdown--white"></span>');
					$(this).addClass("custom-dropdown__select custom-dropdown__select--white");
				});
				callBack(product.variants[0], null);
			}
			if (product.images.length == 0) {
				modal.find('.p-product-image-feature').attr('src', '{{asset('public')}}/assets/js//noDefaultImage6_large.gif');
			}
			else {
				/*
				$('#p-sliderproduct').remove();
				 $('.image-zoom').append("<div id='p-sliderproduct' class='flexslider'>");
				 $('#p-sliderproduct').append("<ul class='slides'>");

				 $.each(product.images, function (i, v) {
					 elem = $('<li class="product-thumb">').append('<a href="#" data-image="" data-zoom-image=""><img /></a>');
					 elem.find('a').attr('data-image', Haravan.resizeImage(v, 'medium'));
					 elem.find('a').attr('data-zoom-image', v);
					 elem.find('img').attr('data-image', Haravan.resizeImage(v, 'medium'));
					 elem.find('img').attr('data-zoom-image',v);
					 elem.find('img').attr('src', Haravan.resizeImage(v, 'small'));
					 modal.find('.slides').append(elem);
				 });

				 modal.find('.p-product-image-feature').attr('src', product.featured_image);
				 $(".modal-footer .btn-readmore").attr('href', purl);
				 var iflag = 0;
				 $('#p-sliderproduct img').load(function () {
					 iflag++;
					 if (iflag == $('#p-sliderproduct img').length) {
						 $('#p-sliderproduct img').imagesLoaded( function() {
							 $('#p-sliderproduct').flexslider({
								 animation: "slide",
								 controlNav: false,
								 animationLoop: false,
								 slideshow: false,
								 itemWidth: 90
							 });
						 });
					 }
				 });
				 */
				$('#p-sliderproduct').remove();
				$('.image-zoom').append("<div id='p-sliderproduct'>");
				$('#p-sliderproduct').append("<ul class='owl-carousel'>");
				$.each(product.images, function (i, v) {
					elem = $('<li class="item">').append('<a href="#" data-image="" data-zoom-image=""><img /></a>');
					elem.find('a').attr('data-image', Haravan.resizeImage(v, 'medium'));
					elem.find('a').attr('data-zoom-image', v);
					elem.find('img').attr('data-image', Haravan.resizeImage(v, 'medium'));
					elem.find('img').attr('data-zoom-image',v);
					elem.find('img').attr('src', Haravan.resizeImage(v, 'small'));
					modal.find('.owl-carousel').append(elem);
				});
				var owl = $('.owl-carousel');
				owl.owlCarousel({
					items:3,
					navigation : true,
					navigationText :['owl-prev', 'owl-next']
				});
				$('#p-sliderproduct .owl-carousel .owl-item').first().children('.item').addClass('active');
				modal.find('.p-product-image-feature').attr('src', product.featured_image);
				$(".modal-footer .btn-readmore").attr('href', purl);
			}

		}
	});

	//$('.modal-backdrop').css('opacity', '0');
	return false;
}
$('#quick-view-modal').on('click', '.item img', function (event) {
	event.preventDefault();
	modal = $('#quick-view-modal');
	modal.find('.p-product-image-feature').attr('src', $(this).attr('data-zoom-image'));
	modal.find('.item').removeClass('active');
	$(this).parents('li').addClass('active');
	return false;
});

$(document).on("click",".mask img", function(event){
	event.preventDefault();
	quickViewProduct($(this).attr('data-handle'));
});

</script>

	</body>



