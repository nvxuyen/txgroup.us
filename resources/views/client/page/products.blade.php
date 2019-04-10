@extends('client.master')
@section('sidebar')
@include('client.layout.sidebar')
@endsection
@section('banner')
@include('client.layout.banner')
@endsection
@section('content')
@php
	use App\ImgProduct;
@endphp
<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd5  ">
	<ol class="breadcrumb breadcrumb-arrow hidden-sm hidden-xs">
		<li><a href="{{ route('trang-chu') }}" target="_self">Trang chủ</a></li>
		
		<li><a href="{{ route('collection',['id'=>$col->id,'name'=>$col->name_ascii]) }}" target="_self">{{ $col->name }}</a></li>
	
		<li class="active"><span> {{$pro->name}}</span></li>
		
	</ol>
</div>
	</div>
</div>
<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
	<div id="wrapper-detail">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div id="surround">
					
					
					<a class="slide-prev slide-nav" href="javascript:">
						<i class="fa fa-arrow-circle-o-left fa-2"></i>
					</a>
					<a class="slide-next slide-nav" href="javascript:">
						<i class="fa fa-arrow-circle-o-right fa-2"></i>
					</a>

					<img class="product-image-feature" src="{{asset('storage/app/'.$img[0]['images'])}}" alt="{{$pro->name}}">


					
					<div id="sliderproduct" class="">
						
					<div class="flex-viewport" style="overflow: hidden; position: relative;"><ul class="slides" style="width: 1000%; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
							@foreach($img as $key => $v)
							<li class="product-thumb @if($key==0) active @endif" style="float: left; display: block; width: 95px;">
								<a href="javascript:" data-image="{{asset('storage/app/'.$v->images)}}" data-zoom-image="{{asset('storage/app/'.$v->images)}}">
									<img alt="In-Win 303 Nvidia Limited Edition - Full Side Tempered Glass Mid-Tower Case" data-image="{{asset('storage/app/'.$v->images)}}" src="{{asset('storage/app/'.$v->images)}}" draggable="false">
								</a>
							</li>	
							@endforeach	
						</ul></div><ul class="flex-direction-nav"><li><a class="flex-prev flex-disabled" href="#" tabindex="-1">Previous</a></li><li><a class="flex-next" href="#">Next</a></li></ul></div>
					

					
				</div>

			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="product-title">
					<h1>{{$pro->name}}</h1>

					<span id="pro_sku"></span>

				</div>
				<div class="product-price" id="price-preview">
					<span>{{number_format($pro->price)}}₫</span>
				</div>

				
				
				
				
				<form id="add-item-form" action="{{ route('cart.add') }}" method="post" class="variants clearfix">				
					{{ csrf_field() }}
					<input type="hidden" name="productID" value="{{ $pro->id }}" /> 
					<div class="select-wrapper ">
						<label>Số lượng</label>
						<input id="quantity" type="number" name="quantity" min="1" max="{{ $pro->inventory }}" value="1" class="tc item-quantity">
					</div>

					
					<div class="row">
						<div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
							<button class=" btn-detail btn-color-add btn-min-width btn-mgt" name="submit" value="add" @if($pro->inventory == 0) disabled="disable" @endif> 
									@if($pro->inventory != 0) Thêm vào giỏ @else Hết hàng @endif
							</button>
						</div>
						<div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">								
							<button class=" btn-detail btn-color-buy btn-min-width btn-mgt" name="submit" value="buy" @if($pro->inventory == 0) disabled="disable" @endif>
								Mua ngay
							</button>
						</div>			
					</div>

				</form>
				@if($pro->tags != "")
				<div class="pt20">																
					<!-- Begin tags -->
					
					<div class="tag-wrapper">
						<label>
							Tags:
						</label>
						<ul class="tags">
							@foreach($tags as $v)
							<li class="active">
								<a href="{{ route('products.tags',['tags'=>str_replace(' ', '-',$v)]) }}">{{ strtoupper($v) }}</a>
							</li>
							@endforeach
							
						</ul>
					</div>
					<!-- End tags -->
				</div>
				@endif
				
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top:20px;">
				<div role="tabpanel" class="product-comment">
					<!-- Nav tabs -->
					<ul class="nav visible-lg visible-md" role="tablist">
						<li role="presentation" class="active"><a data-spy="scroll" data-target="#mota" href="#mota" aria-controls="mota" role="tab">Mô tả sản phẩm</a></li>
						
						<li role="presentation">
							<a data-spy="scroll" href="#binhluan" aria-controls="binhluan" role="tab">Bình luận</a>
						</li>
						
						
						<li role="presentation">
							<a data-spy="scroll" href="#like" aria-controls="like" role="tab">Sản phẩm khác</a>
						</li>
						

					</ul>
					<!-- Tab panes -->

					<div id="mota">		

						<div class="title-bl visible-xs visible-sm">
							<h2>Mô tả</h2>
						</div>										

						<div class="container-fluid product-description-wrapper">
							
							{!!$pro->description!!}
							
						</div>
					</div>
					
					<div id="binhluan">
						<div class="title-bl">
							<h2>Bình luận</h2>
						</div>
						<div class="container-fluid">
							<div id="fb-root"></div>					
							<div class="fb-comments fb_iframe_widget fb_iframe_widget_fluid_desktop" data-href="https://tandoanh.vn/products/in-win-303-nvidia-limited-edition-full-side-tempered-glass-mid-tower" data-numposts="5" width="100%" data-colorscheme="light" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=771685443164176&amp;color_scheme=light&amp;container_width=775&amp;height=100&amp;href=https%3A%2F%2Ftandoanh.vn%2Fproducts%2Fin-win-303-nvidia-limited-edition-full-side-tempered-glass-mid-tower&amp;locale=vi_VN&amp;numposts=5&amp;sdk=joey&amp;version=v3.2" style="width: 100%;"><span style="vertical-align: bottom; width: 100%; height: 203px;"><iframe name="f3b8b64835f0b8" width="1000px" height="100px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" title="fb:comments Facebook Social Plugin" src="https://www.facebook.com/v3.2/plugins/comments.php?app_id=771685443164176&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2Fm5nTkygCewO.js%3Fversion%3D44%23cb%3Df48b1c9160a30c%26domain%3Dtandoanh.vn%26origin%3Dhttps%253A%252F%252Ftandoanh.vn%252Ffc067ae7042e04%26relation%3Dparent.parent&amp;color_scheme=light&amp;container_width=775&amp;height=100&amp;href=https%3A%2F%2Ftandoanh.vn%2Fproducts%2Fin-win-303-nvidia-limited-edition-full-side-tempered-glass-mid-tower&amp;locale=vi_VN&amp;numposts=5&amp;sdk=joey&amp;version=v3.2" style="border: none; visibility: visible; width: 0px; height: 203px;" __idm_frm__="1032" class=" fb_iframe_widget_lift"></iframe></span></div>
							<!-- script comment fb -->
							<script type="text/javascript">(function(d, s, id) {
								var js, fjs = d.getElementsByTagName(s)[0];
								if (d.getElementById(id)) return;
								js = d.createElement(s); js.id = id;
								js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.0";
								fjs.parentNode.insertBefore(js, fjs);
								}(document, 'script', 'facebook-jssdk'));
							</script>
						</div>
					</div>	
										
				</div>
			</div>
		</div>
	</div>
	
	<div class="col-md-12 list-like">
		<div id="like">
			<div class="title-like">
				<h2>Sản phẩm ngẫu nhiên</h2>
			</div>
			
			

			<div class="row product-list ">
				<div class="content-product-list">
				

@foreach($pro_random as $p)
		@php
			$img = ImgProduct::where('product_id', $p->id)->first();
		@endphp	

<div class="col-md-3 col-sm-6 col-xs-6 pro-loop"> <!--sử dụng  -->
	<div class="product-block product-resize">
		@if($p->inventory == 0)
		<div class="sold-out">Hết hàng</div>
		@endif
		<div class="product-img image-resize view view-third clearfix">
			

			<a href="{{route('products',['name'=>$p->name_ascii])}}" title="{{ $p->name }}" title="{{ $p->name }}">
				<div class="mask hidden-xs">
					<img src="{{asset('public')}}/assets/images/quick-look.png" data-handle="{{route('products',['name'=>$p->name_ascii])}}" title="{{ $p->name }}" alt="{{$p->name}}" />
				</div>
				<img alt="{{$p->name}}" src="{{asset('storage/app/'.$img->images)}}" alt="" />
			</a>
		</div>

		<div class="product-detail clearfix">
			
			<!-- sử dụng pull-left -->
			<p class="pro-price">{{number_format($p->price)}}₫</p>
			<p class="pro-price-del text-left"></h3>
		<h3 class="pro-name"><a href="{{route('products',['name'=>$p->name_ascii])}}" title="{{ $p->name }}" title="{{$p->name}}">{{$p->name}} </a></h3>
		
	</div>
</div>	
</div>
@endforeach
					
	
				</div>
			</div>

			<script>
			var add_to_wishlist = function(){
				if(typeof(Storage) !== "undefined")
				{
					if (localStorage.recently_viewed)
					{

						if(localStorage.recently_viewed.indexOf('1st-birthday-princess-basic-party-kit-18-guests') == -1)
							localStorage.recently_viewed = '1st-birthday-princess-basic-party-kit-18-guests_'+localStorage.recently_viewed ;

					} else
						localStorage.recently_viewed = '1st-birthday-princess-basic-party-kit-18-guests';
				}
				else {
					console.log('Your Browser does not support storage!');
				}
			}
			</script>
		</div>
	</div>
	
</div>




<script>
$(".product-thumb img").click(function(){
	$(".product-thumb").removeClass('active');
	$(this).parents('li').addClass('active');
	$(".product-image-feature").attr("src",$(this).attr("data-image"));
	$(".product-image-feature").attr("data-zoom-image",$(this).attr("data-zoom-image"));
});

$(".product-thumb").first().addClass('active');

</script>



<script>
$(document).ready(function(){
	if($(".slides .product-thumb").length>4){
		$('#sliderproduct').flexslider({
			animation: "slide",
			controlNav: false,
			animationLoop: false,
			slideshow: false,
			itemWidth:95,
			itemMargin: 10,
		});
	}
	if($(window).width() > 960){
		jQuery(".product-image-feature").elevateZoom({
			gallery:'sliderproduct',
			scrollZoom : true
		});
	} else {

	}
	jQuery('.slide-next').click(function(){
		if($(".product-thumb.active").prev().length>0){
			$(".product-thumb.active").prev().find('img').click();
		}
		else{
			$(".product-thumb:last img").click();
		}
	});
	jQuery('.slide-prev').click(function(){
		if($(".product-thumb.active").next().length>0){
			$(".product-thumb.active").next().find('img').click();
		}
		else{
			$(".product-thumb:first img").click();
		}
	});
});
</script>
		</div>
	</div>
	
</div>
@endsection