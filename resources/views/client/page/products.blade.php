@extends('client.master')
@section('sidebar')
@include('client.layout.sidebar')
@endsection
@section('banner')
@include('client.layout.banner')
@endsection
@section('content')
<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd5  ">
	<ol class="breadcrumb breadcrumb-arrow hidden-sm hidden-xs">
		<li><a href="/" target="_self">Trang chủ</a></li>
		
		
		
		
		<li><a href="/collections/case-thung-may" target="_self">Case - Thùng máy</a></li>
		
	
		<li class="active"><span> In-Win 303 Nvidia Limited Edition - Full Side Tempered Glass Mid-Tower Case</span></li>
		
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

					<img class="product-image-feature" src="{{$pro->image}}" alt="In-Win 303 Nvidia Limited Edition - Full Side Tempered Glass Mid-Tower Case">


					
					<div id="sliderproduct" class="">
						
					<div class="flex-viewport" style="overflow: hidden; position: relative;"><ul class="slides" style="width: 1000%; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
							
							<li class="product-thumb active" style="float: left; display: block; width: 95px;">
								<a href="javascript:" data-image="{{$pro->image}}" data-zoom-image="{{$pro->image}}">
									<img alt="In-Win 303 Nvidia Limited Edition - Full Side Tempered Glass Mid-Tower Case" data-image="{{$pro->image}}" src="{{$pro->image}}" draggable="false">
								</a></li>	
							<!--
							<li class="product-thumb" style="float: left; display: block; width: 95px;">
								<a href="javascript:" data-image="//product.hstatic.net/1000162654/product/upload_023c502b2e2a42ad824a2890cf74f760_master.jpg" data-zoom-image="//product.hstatic.net/1000162654/product/upload_023c502b2e2a42ad824a2890cf74f760_master.jpg">
									<img alt="In-Win 303 Nvidia Limited Edition - Full Side Tempered Glass Mid-Tower Case" data-image="//product.hstatic.net/1000162654/product/upload_023c502b2e2a42ad824a2890cf74f760_master.jpg" src="//product.hstatic.net/1000162654/product/upload_023c502b2e2a42ad824a2890cf74f760_small.jpg" draggable="false">
								</a></li>	
							
							<li class="product-thumb" style="float: left; display: block; width: 95px;">
								<a href="javascript:" data-image="//product.hstatic.net/1000162654/product/upload_60b1e95112be44d7a1de1466b83f55ee_master.jpg" data-zoom-image="//product.hstatic.net/1000162654/product/upload_60b1e95112be44d7a1de1466b83f55ee_master.jpg">
									<img alt="In-Win 303 Nvidia Limited Edition - Full Side Tempered Glass Mid-Tower Case" data-image="//product.hstatic.net/1000162654/product/upload_60b1e95112be44d7a1de1466b83f55ee_master.jpg" src="//product.hstatic.net/1000162654/product/upload_60b1e95112be44d7a1de1466b83f55ee_small.jpg" draggable="false">
								</a></li>	
							
							<li class="product-thumb" style="float: left; display: block; width: 95px;">
								<a href="javascript:" data-image="//product.hstatic.net/1000162654/product/upload_ad088d23bdf04b01b91ca03b09da737b_master.jpg" data-zoom-image="//product.hstatic.net/1000162654/product/upload_ad088d23bdf04b01b91ca03b09da737b_master.jpg">
									<img alt="In-Win 303 Nvidia Limited Edition - Full Side Tempered Glass Mid-Tower Case" data-image="//product.hstatic.net/1000162654/product/upload_ad088d23bdf04b01b91ca03b09da737b_master.jpg" src="//product.hstatic.net/1000162654/product/upload_ad088d23bdf04b01b91ca03b09da737b_small.jpg" draggable="false">
								</a></li>	
							
							<li class="product-thumb" style="float: left; display: block; width: 95px;">
								<a href="javascript:" data-image="//product.hstatic.net/1000162654/product/upload_f47d5aaada8d49c5813351871dd1cba3_master.jpg" data-zoom-image="//product.hstatic.net/1000162654/product/upload_f47d5aaada8d49c5813351871dd1cba3_master.jpg">
									<img alt="In-Win 303 Nvidia Limited Edition - Full Side Tempered Glass Mid-Tower Case" data-image="//product.hstatic.net/1000162654/product/upload_f47d5aaada8d49c5813351871dd1cba3_master.jpg" src="//product.hstatic.net/1000162654/product/upload_f47d5aaada8d49c5813351871dd1cba3_small.jpg" draggable="false">
								</a></li>	
							-->
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

				
				
				
				
				<form id="add-item-form" action="/cart/add" method="post" class="variants clearfix">				
					<div class="select clearfix" style="display:none">
						<select id="product-select" name="id" style="display:none">
							
							<option value="1011454585">Default Title - 2,990,000₫</option>
							
						</select>
					</div>

					<div class="select-wrapper ">
						<label>Số lượng</label>
						<input id="quantity" type="number" name="quantity" min="1" value="1" class="tc item-quantity">
					</div>


					<div class="row">
						<div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
							<button id="add-to-cart" class=" btn-detail btn-color-add btn-min-width btn-mgt" name="add"> 
									Thêm vào giỏ 
							</button>
						</div>
						<div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">								
							<button id="buy-now" class=" btn-detail btn-color-buy btn-min-width btn-mgt">
								Mua ngay
							</button>
						</div>			
					</div>
				</form>
				
				<div class="pt20">																
					<!-- Begin tags -->
					
					<div class="tag-wrapper">
						<label>
							Tags:
						</label>
						<ul class="tags">
							
							<li class="active">
								<a href="/collections/all/in-win">In Win</a>
							</li>
							
						</ul>
					</div>
					

					<!-- End tags -->
				</div>
				

				<div class="pt20">																
					<!-- Begin social icons -->
					<div class="addthis_toolbox addthis_default_style ">
						
						<a class="addthis_button_facebook_like at300b" fb:like:layout="button_count"><div class="fb-like fb_iframe_widget" data-layout="button_count" data-show_faces="false" data-share="false" data-action="like" data-width="90" data-height="25" data-font="arial" data-href="https://tandoanh.vn/products/in-win-303-nvidia-limited-edition-full-side-tempered-glass-mid-tower" data-send="false" style="height: 25px;" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=like&amp;app_id=771685443164176&amp;container_width=0&amp;font=arial&amp;height=25&amp;href=https%3A%2F%2Ftandoanh.vn%2Fproducts%2Fin-win-303-nvidia-limited-edition-full-side-tempered-glass-mid-tower&amp;layout=button_count&amp;locale=vi_VN&amp;sdk=joey&amp;send=false&amp;share=false&amp;show_faces=false&amp;width=90"><span style="vertical-align: bottom; width: 68px; height: 20px;"><iframe name="f135d23dc067a84" width="90px" height="25px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" title="fb:like Facebook Social Plugin" src="https://www.facebook.com/v3.2/plugins/like.php?action=like&amp;app_id=771685443164176&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2Fm5nTkygCewO.js%3Fversion%3D44%23cb%3Df1c4281ad771ad8%26domain%3Dtandoanh.vn%26origin%3Dhttps%253A%252F%252Ftandoanh.vn%252Ffc067ae7042e04%26relation%3Dparent.parent&amp;container_width=0&amp;font=arial&amp;height=25&amp;href=https%3A%2F%2Ftandoanh.vn%2Fproducts%2Fin-win-303-nvidia-limited-edition-full-side-tempered-glass-mid-tower&amp;layout=button_count&amp;locale=vi_VN&amp;sdk=joey&amp;send=false&amp;share=false&amp;show_faces=false&amp;width=90" style="border: none; visibility: visible; width: 68px; height: 20px;" __idm_frm__="1034" class=""></iframe></span></div></a>
						
						
						<a class="addthis_button_google_plusone" g:plusone:size="medium" g:plusone:count="false"></a>
						
					<div class="atclear"></div></div>
					<script type="text/javascript" src="//s7.addthis.com/js/250/addthis_widget.js"></script>

					<!-- End social icons -->
				</div>
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
				<h2>Sản phẩm khác</h2>
			</div>
			
			

			

			

			

			<div class="row product-list ">
				<div class="content-product-list">
					
					
					
					
					

					
					














<div class="col-md-3 col-sm-6 col-xs-6 pro-loop"> <!--sử dụng  -->
	<div class="product-block product-resize fixheight" style="height: 424px;">
		<div class="product-img image-resize view view-third clearfix" style="height: 262px;">
			
			

			<a href="/products/aerocool-aero-1000-black" title="AeroCool Aero 1000 Black">
				<div class="mask hidden-xs">
					<img src="//hstatic.net/0/0/global/design/member/default/quick-look.png" data-handle="/products/aerocool-aero-1000-black" alt="AeroCool Aero 1000 Black">
				</div>
				<img alt="AeroCool Aero 1000 Black" src="//product.hstatic.net/1000162654/product/upload_5ed33526c2cf46c09bfdb3846f9fd4be_large.jpg">
			</a>
		</div>

		<div class="product-detail clearfix">
			

			<!-- sử dụng pull-left -->
			<p class="pro-price">1,650,000₫</p>
			<p class="pro-price-del text-left">
		</p><h3 class="pro-name"><a href="/collections/case-thung-may/products/aerocool-aero-1000-black" title="AeroCool Aero 1000 Black">AeroCool Aero 1000 Black </a></h3>
		
	</div>
</div>	
</div>
					
					
					
					

					
					














<div class="col-md-3 col-sm-6 col-xs-6 pro-loop"> <!--sử dụng  -->
	<div class="product-block product-resize fixheight" style="height: 424px;">
		<div class="product-img image-resize view view-third clearfix" style="height: 262px;">
			
			

			<a href="/products/aorus-ac300w" title="AORUS AC300W">
				<div class="mask hidden-xs">
					<img src="//hstatic.net/0/0/global/design/member/default/quick-look.png" data-handle="/products/aorus-ac300w" alt="AORUS AC300W">
				</div>
				<img alt="AORUS AC300W" src="//product.hstatic.net/1000162654/product/2018020909393356_src_large.png">
			</a>
		</div>

		<div class="product-detail clearfix">
			

			<!-- sử dụng pull-right -->
			<p class="pro-price">2,390,000₫</p>
			<p class="pro-price-del text-left">
		</p><h3 class="pro-name"><a href="/collections/case-thung-may/products/aorus-ac300w" title="AORUS AC300W">AORUS AC300W </a></h3>
		
	</div>
</div>	
</div>
					
					
					
					

					
					














<div class="col-md-3 col-sm-6 col-xs-6 pro-loop"> <!--sử dụng end -->
	<div class="product-block product-resize fixheight" style="height: 424px;">
		<div class="product-img image-resize view view-third clearfix" style="height: 262px;">
			
			

			<a href="/products/aorus-atc700-cpu-cooler" title="AORUS ATC700 CPU COOLER">
				<div class="mask hidden-xs">
					<img src="//hstatic.net/0/0/global/design/member/default/quick-look.png" data-handle="/products/aorus-atc700-cpu-cooler" alt="AORUS ATC700 CPU COOLER">
				</div>
				<img alt="AORUS ATC700 CPU COOLER" src="//product.hstatic.net/1000162654/product/2017042718050455_big_large.png">
			</a>
		</div>

		<div class="product-detail clearfix">
			

			<!-- sử dụng pull-left -->
			<p class="pro-price">2,250,000₫</p>
			<p class="pro-price-del text-left">
		</p><h3 class="pro-name"><a href="/collections/case-thung-may/products/aorus-atc700-cpu-cooler" title="AORUS ATC700 CPU COOLER">AORUS ATC700 CPU COOLER </a></h3>
		
	</div>
</div>	
</div>
					
					
					
					

					
					














<div class="col-md-3 col-sm-6 col-xs-6 pro-loop"> <!--sử dụng  -->
	<div class="product-block product-resize fixheight" style="height: 424px;">
		<div class="product-img image-resize view view-third clearfix" style="height: 262px;">
			
			

			<a href="/products/case-van-phong-goldenfield" title="Case văn phòng GoldenField">
				<div class="mask hidden-xs">
					<img src="//hstatic.net/0/0/global/design/member/default/quick-look.png" data-handle="/products/case-van-phong-goldenfield" alt="Case văn phòng GoldenField">
				</div>
				<img alt="Case văn phòng GoldenField" src="//product.hstatic.net/1000162654/product/q14_9119932209ba4a24a87f76190c8041d6_large.jpg">
			</a>
		</div>

		<div class="product-detail clearfix">
			

			<!-- sử dụng pull-right -->
			<p class="pro-price">250,000₫</p>
			<p class="pro-price-del text-left">
		</p><h3 class="pro-name"><a href="/collections/case-thung-may/products/case-van-phong-goldenfield" title="Case văn phòng GoldenField">Case văn phòng GoldenField </a></h3>
		
	</div>
</div>	
</div>
					
					
					
					

					
					












<div class="col-md-3 col-sm-6 col-xs-6 pro-loop"> <!--sử dụng  -->
	<div class="product-block product-resize fixheight" style="height: 424px;">
		<div class="product-img image-resize view view-third clearfix" style="height: 262px;">
			
			
			<div class="sold-out">Hết hàng</div>
			

			<a href="/products/cooler-master-590-iii" title="Cooler Master 590 III">
				<div class="mask hidden-xs">
					<img src="//hstatic.net/0/0/global/design/member/default/quick-look.png" data-handle="/products/cooler-master-590-iii" alt="Cooler Master 590 III">
				</div>
				<img alt="Cooler Master 590 III" src="//product.hstatic.net/1000162654/product/upload_8dead7bfad504236baf268651c563c2f_large.jpg">
			</a>
		</div>

		<div class="product-detail clearfix">
			

			<!-- sử dụng pull-left -->
			<p class="pro-price">1,250,000₫</p>
			<p class="pro-price-del text-left">
		</p><h3 class="pro-name"><a href="/collections/case-thung-may/products/cooler-master-590-iii" title="Cooler Master 590 III">Cooler Master 590 III </a></h3>
		
	</div>
</div>	
</div>
					
					
					
					

					
					














<div class="col-md-3 col-sm-6 col-xs-6 pro-loop"> <!--sử dụng end -->
	<div class="product-block product-resize fixheight" style="height: 424px;">
		<div class="product-img image-resize view view-third clearfix" style="height: 262px;">
			
			

			<a href="/products/cooler-master-cosmos-700m-rgb-tempered-glass-full-tower-case" title="Cooler Master COSMOS 700M - RGB Tempered Glass Full Tower Case">
				<div class="mask hidden-xs">
					<img src="//hstatic.net/0/0/global/design/member/default/quick-look.png" data-handle="/products/cooler-master-cosmos-700m-rgb-tempered-glass-full-tower-case" alt="Cooler Master COSMOS 700M - RGB Tempered Glass Full Tower Case">
				</div>
				<img alt="Cooler Master COSMOS 700M - RGB Tempered Glass Full Tower Case" src="//product.hstatic.net/1000162654/product/upload_7fd12a1754374362b227027001d25c3b_large.jpg">
			</a>
		</div>

		<div class="product-detail clearfix">
			

			<!-- sử dụng pull-right -->
			<p class="pro-price">10,900,000₫</p>
			<p class="pro-price-del text-left">
		</p><h3 class="pro-name"><a href="/collections/case-thung-may/products/cooler-master-cosmos-700m-rgb-tempered-glass-full-tower-case" title="Cooler Master COSMOS 700M - RGB Tempered Glass Full Tower Case">Cooler Master COSMOS 700M - RGB Tempered Glass Full Tower Case </a></h3>
		
	</div>
</div>	
</div>
					
					
					
					

					
					














<div class="col-md-3 col-sm-6 col-xs-6 pro-loop"> <!--sử dụng  -->
	<div class="product-block product-resize fixheight" style="height: 424px;">
		<div class="product-img image-resize view view-third clearfix" style="height: 262px;">
			
			

			<a href="/products/cooler-master-h500m-master-case" title="Cooler Master H500M - Master Case">
				<div class="mask hidden-xs">
					<img src="//hstatic.net/0/0/global/design/member/default/quick-look.png" data-handle="/products/cooler-master-h500m-master-case" alt="Cooler Master H500M - Master Case">
				</div>
				<img alt="Cooler Master H500M - Master Case" src="//product.hstatic.net/1000162654/product/upload_0aa9712ca4894125a832aed7e7d47fa1_large.jpg">
			</a>
		</div>

		<div class="product-detail clearfix">
			

			<!-- sử dụng pull-left -->
			<p class="pro-price">4,400,000₫</p>
			<p class="pro-price-del text-left">
		</p><h3 class="pro-name"><a href="/collections/case-thung-may/products/cooler-master-h500m-master-case" title="Cooler Master H500M - Master Case">Cooler Master H500M - Master Case </a></h3>
		
	</div>
</div>	
</div>
					
					
					
					

					
					












<div class="col-md-3 col-sm-6 col-xs-6 pro-loop"> <!--sử dụng  -->
	<div class="product-block product-resize fixheight" style="height: 424px;">
		<div class="product-img image-resize view view-third clearfix" style="height: 262px;">
			
			
			<div class="sold-out">Hết hàng</div>
			

			<a href="/products/cooler-master-masterbox-lite3" title="Cooler Master MasterBox Lite3">
				<div class="mask hidden-xs">
					<img src="//hstatic.net/0/0/global/design/member/default/quick-look.png" data-handle="/products/cooler-master-masterbox-lite3" alt="Cooler Master MasterBox Lite3">
				</div>
				<img alt="Cooler Master MasterBox Lite3" src="//product.hstatic.net/1000162654/product/upload_d0924aebdf8647088fa218d00caf9f30_large.jpg">
			</a>
		</div>

		<div class="product-detail clearfix">
			

			<!-- sử dụng pull-right -->
			<p class="pro-price">790,000₫</p>
			<p class="pro-price-del text-left">
		</p><h3 class="pro-name"><a href="/collections/case-thung-may/products/cooler-master-masterbox-lite3" title="Cooler Master MasterBox Lite3">Cooler Master MasterBox Lite3 </a></h3>
		
	</div>
</div>	
</div>
					
					
					
					

					
					














<div class="col-md-3 col-sm-6 col-xs-6 pro-loop"> <!--sử dụng end -->
	<div class="product-block product-resize fixheight" style="height: 424px;">
		<div class="product-img image-resize view view-third clearfix" style="height: 262px;">
			
			

			<a href="/products/cooler-master-masterbox-mb511-rgb" title="Cooler Master MasterBox MB511 RGB">
				<div class="mask hidden-xs">
					<img src="//hstatic.net/0/0/global/design/member/default/quick-look.png" data-handle="/products/cooler-master-masterbox-mb511-rgb" alt="Cooler Master MasterBox MB511 RGB">
				</div>
				<img alt="Cooler Master MasterBox MB511 RGB" src="//product.hstatic.net/1000162654/product/upload_7cb141d6de39468d8245efadb9f95d95_large.jpg">
			</a>
		</div>

		<div class="product-detail clearfix">
			

			<!-- sử dụng pull-left -->
			<p class="pro-price">1,850,000₫</p>
			<p class="pro-price-del text-left">
		</p><h3 class="pro-name"><a href="/collections/case-thung-may/products/cooler-master-masterbox-mb511-rgb" title="Cooler Master MasterBox MB511 RGB">Cooler Master MasterBox MB511 RGB </a></h3>
		
	</div>
</div>	
</div>
					
					
					
					

					
					














<div class="col-md-3 col-sm-6 col-xs-6 pro-loop"> <!--sử dụng  -->
	<div class="product-block product-resize fixheight" style="height: 424px;">
		<div class="product-img image-resize view view-third clearfix" style="height: 262px;">
			
			

			<a href="/products/cooler-master-masterbox-q300l" title="Cooler Master MasterBox Q300L">
				<div class="mask hidden-xs">
					<img src="//hstatic.net/0/0/global/design/member/default/quick-look.png" data-handle="/products/cooler-master-masterbox-q300l" alt="Cooler Master MasterBox Q300L">
				</div>
				<img alt="Cooler Master MasterBox Q300L" src="//product.hstatic.net/1000162654/product/13_ecf62922aced4be2f3e736a0ec232788_1515546600_3fc16f56f1da4071942db1c026d3e33a_large.jpg">
			</a>
		</div>

		<div class="product-detail clearfix">
			

			<!-- sử dụng pull-right -->
			<p class="pro-price">890,000₫</p>
			<p class="pro-price-del text-left">
		</p><h3 class="pro-name"><a href="/collections/case-thung-may/products/cooler-master-masterbox-q300l" title="Cooler Master MasterBox Q300L">Cooler Master MasterBox Q300L </a></h3>
		
	</div>
</div>	
</div>
					
					
					
					

					
					














<div class="col-md-3 col-sm-6 col-xs-6 pro-loop"> <!--sử dụng  -->
	<div class="product-block product-resize fixheight" style="height: 424px;">
		<div class="product-img image-resize view view-third clearfix" style="height: 262px;">
			
			

			<a href="/products/coolermaster-mastercase-h500p" title="Cooler Master MasterCase H500P">
				<div class="mask hidden-xs">
					<img src="//hstatic.net/0/0/global/design/member/default/quick-look.png" data-handle="/products/coolermaster-mastercase-h500p" alt="Cooler Master MasterCase H500P">
				</div>
				<img alt="Cooler Master MasterCase H500P" src="//product.hstatic.net/1000162654/product/upload_1653c24af67d4d1b8c939ee427a1ff0b_large.jpg">
			</a>
		</div>

		<div class="product-detail clearfix">
			

			<!-- sử dụng pull-left -->
			<p class="pro-price">3,490,000₫</p>
			<p class="pro-price-del text-left">
		</p><h3 class="pro-name"><a href="/collections/case-thung-may/products/coolermaster-mastercase-h500p" title="Cooler Master MasterCase H500P">Cooler Master MasterCase H500P </a></h3>
		
	</div>
</div>	
</div>
					
					
					
					

					
					














<div class="col-md-3 col-sm-6 col-xs-6 pro-loop"> <!--sử dụng end -->
	<div class="product-block product-resize fixheight" style="height: 424px;">
		<div class="product-img image-resize view view-third clearfix" style="height: 262px;">
			
			

			<a href="/products/cooler-master-n200-case" title="Cooler Master N200 - Case">
				<div class="mask hidden-xs">
					<img src="//hstatic.net/0/0/global/design/member/default/quick-look.png" data-handle="/products/cooler-master-n200-case" alt="Cooler Master N200 - Case">
				</div>
				<img alt="Cooler Master N200 - Case" src="//product.hstatic.net/1000162654/product/13_6b1b299b73d1c77bc53be52fe0291146_1366066083_8e2e2d3cfa3e4f318db52b62dfbe8c70_large.jpg">
			</a>
		</div>

		<div class="product-detail clearfix">
			

			<!-- sử dụng pull-right -->
			<p class="pro-price">920,000₫</p>
			<p class="pro-price-del text-left">
		</p><h3 class="pro-name"><a href="/collections/case-thung-may/products/cooler-master-n200-case" title="Cooler Master N200 - Case">Cooler Master N200 - Case </a></h3>
		
	</div>
</div>	
</div>
					
					
					
					

					
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
@endsection