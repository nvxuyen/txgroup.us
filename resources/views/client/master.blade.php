@if($set->maintance == 1)
<title>{{$set->title}}</title>
<center><font color="red" size="12pt"><b>{{$set->maintance_content}}</b></font></center>
@else
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
			{{isset($title_page) ? "$title_page - $set->title" : "$set->title"}}
		</title>
		
		<meta name="description" content="{{$set->description}}" />
		<meta name="keywords" content="{{$set->keywords}}" />
		<meta content='width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=0' name='viewport' />


		<script src="{{asset('public/assets/js/jquery.min.1.11.0.js')}}"></script>
<script src="{{asset('public/assets/js/bootstrap.min.js')}}"></script>
<script src='{{asset('public/assets/js/option_selection.js')}}' type='text/javascript'></script>
<script src="{{asset('public/assets/js/scripts.js?v=772')}}"></script>
<script src="{{asset('public/assets/js/modernizr.custom.js?v=772')}}"></script>
<script src="{{asset('public/assets/js/html5shiv.js')}}"></script>
<script src="{{asset('public/assets/js/jquery-migrate-1.2.0.min.js')}}"></script>
<script src='{{asset('public/assets/js/jquery.touchSwipe.min.js')}}' type='text/javascript'></script>
<script data-target=".product-resize"  data-parent=".products-resize" data-img-box=".image-resize" src="{{asset('public/assets/js/fixheightproductv2.js')}}"></script>
<script src="{{asset('public/assets/js/haravan.plugin.1.0.js')}}"></script>

<script src='{{asset('public/assets/js/jquery.flexslider.js')}}' type='text/javascript'></script>
<script src='{{asset('public/assets/js/owl.carousel.js')}}' type='text/javascript'></script>
<link href='{{asset('public/assets/css/owl.carousel.css')}}' rel='stylesheet' type='text/css'  media='all'  />
<script src='{{asset('public/assets/js/classie.js?v=772')}}' type='text/javascript'></script>
<script src='{{asset('public/assets/js/mlpushmenu.js?v=772')}}' type='text/javascript'></script>


<!--------------CSS----------->
<link href='{{asset('public')}}/assets/css/page-contact-form.css' rel='stylesheet' type='text/css'  media='all'  />

	<meta property="og:type" content="website" />
	<meta property="og:title" content="{{$set->company_name}}" />
	<meta property="og:image" content="http:assets/js/share_fb_home.png?v=772" />
	<meta property="og:image:secure_url" content="https:assets/js/share_fb_home.png?v=772" />
	
	<meta property="og:description" content="{{$set->description}}" />
	
	<meta property="og:url" content="{{$set->domain}}" />
	<meta property="og:site_name" content="{{$set->title}}" />


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="{{asset('public')}}/assets/css/bootstrap.3.3.1.css">
<!-- Theme haravan-->
<link rel="stylesheet" href="{{asset('public')}}/assets/css/haravantheme.1.0.css?v=772">
<!-- Latest compiled and minified JavaScript -->
<link href='{{asset('public')}}/assets/css/font-awesome.min.css' rel='stylesheet' type='text/css'  media='all'  />

<link href='{{asset('public')}}/assets/css/flexslider.css' rel='stylesheet' type='text/css'  media='all'  />
<link href='{{asset('public')}}/assets/css/styles.css?v=772' rel='stylesheet' type='text/css'  media='all'  />

<link href='{{asset('public')}}/assets/css/sidebar.css?v=772' rel='stylesheet' type='text/css'  media='all'  />

<script>
	// Wait for window load
	$(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut("slow");;
	});
</script>

{!!$set->codeinhead!!}

	</head>
	<body>
		<div class="se-pre-con"></div>

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
	
<script>
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

{!!$set->codeinbody!!}
	</body>
</html>
@endif


