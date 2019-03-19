@extends('client.master')
@section('sidebar')
@include('client.layout.sidebar')
@endsection
@section('banner')
@include('client.layout.banner')
@endsection
@section('row-content')
							<div class="row contents">
								<div class="col-md-9 col-sm-12 col-xs-12">
									
									<!-- Begin slider -->
									<div class="slider-default col-md-12 col-sm-12 col-xs-12">
										<div class="flexslider-container">
											<div class="flexslider">
												<ul class="slides">
													
													<li>
														<a href="#">
															<img src="{{asset('public/assets/images/slider/slideshow_1.jpg?v=772')}}" alt="2323123" />
														</a>
													</li>
													
													<li>
														<a href="#">
															<img src="{{asset('public/assets/images/slider/slideshow_2.jpg?v=772')}}" alt="" />
														</a>
													</li>
													
													<li>
														<a href="#">
															<img src="{{asset('public/assets/images/slider/slideshow_3.jpg?v=772')}}" alt="" />
														</a>
													</li>

													<li>
														<a href="#">
															<img src="{{asset('public/assets/images/slider/slideshow_4.jpg?v=772')}}" alt="" />
														</a>
													</li>
													
													
												</ul>
												<div class="flex-controls"></div>
											</div>
										</div>
									</div>
									<!-- End slider -->
									
								</div>

								<div class="top-banner col-lg-3 col-md-3 col-sm-12 col-xs-12">

									<div class="banner1">
										<div class="image">
											<a href="#">
												<img class="img-responsive" alt="" src="{{asset('public/assets/images/banner/img_left_1.jpg?v=772')}}"></a>
										</div>		
									</div>


									<div class="banner2">
										<div class="image">
											<a href="{{route('phuong-thuc-thanh-toan')}}">
												<img class="img-responsive" alt="" src="{{asset('public/assets/images/banner/img_left_2.jpg?v=772')}}"></a>
										</div>		
									</div>

								</div>

							</div>
@endsection

@section('content')
<div class="col-md-9 col-sm-12 col-xs-12">
	<!-- Content-->
	<div class="main-content">

		<!-- Sản phẩm trang chủ -->
		

		
		<div class="product-list clearfix" >
			<div class="title-line">
				<h3>Sản phẩm mới</h3>
			</div>
			<!--Product loop-->
			<div class="row content-product-list products-resize">
				
@foreach($pro as $p)
<div class="col-md-3 col-sm-6 col-xs-6 pro-loop"> <!--sử dụng  -->
	<div class="product-block product-resize">
		<div class="product-img image-resize view view-third clearfix">
			
			

			<a href="{{route('trang-chu')}}/products/{{$p->id}}/{{$p->name_ascii}}.html" title="PowerColor Radeon™ VII 16GB HBM2">
				<div class="mask hidden-xs">
					<img src="{{asset('public')}}/assets/images/quick-look.png" data-handle="{{route('trang-chu')}}/products/{{$p->id}}/{{$p->name_ascii}}.html" alt="{{$p->name}}" />
				</div>
				<img alt="{{$p->name}}" src="{{$p->image}}" alt="" />
			</a>
		</div>

		<div class="product-detail clearfix">
			

			<!-- sử dụng pull-left -->
			<p class="pro-price">{{number_format($p->price)}}₫</p>
			<p class="pro-price-del text-left"></h3>
		<h3 class="pro-name"><a href="{{route('trang-chu')}}/products/{{$p->id}}/{{$p->name_ascii}}.html" title="{{$p->name}}">{{$p->name}} </a></h3>
		
	</div>
</div>	
</div>
@endforeach

				
			</div>
			<div class="row">
				<div class="col-lg-12 pull-center">
					
					
					<a class="btn btn-readmore" href="/collections/san-pham-moi" role="button">Xem thêm </a>
					
					
				</div>
			</div>
		</div>
		<!--Product loop-->
		

		
		<div class="product-list clearfix ">
			<div class="title-line">
				<h3>Sản phẩm bán chạy</h3>
			</div>

			<div class="row content-product-list products-resize">
				
				














<div class="col-md-3 col-sm-6 col-xs-6 pro-loop"> <!--sử dụng end -->
	<div class="product-block product-resize">
		<div class="product-img image-resize view view-third clearfix">
			
			

			<a href="/products/intel-pentium-gold-g5400-4m-3-7ghz-2-nhan-4-luong-socket-1151v2-coffee-lake" title="Intel Pentium Gold G5400 / 4M / 3.7GHZ / 2 nhân 4 luồng - Socket 1151v2 Coffee Lake">
				<div class="mask hidden-xs">
					<img src="{{asset('public')}}/assets/images/quick-look.png" data-handle="/products/intel-pentium-gold-g5400-4m-3-7ghz-2-nhan-4-luong-socket-1151v2-coffee-lake" alt="Intel Pentium Gold G5400 / 4M / 3.7GHZ / 2 nhân 4 luồng - Socket 1151v2 Coffee Lake" />
				</div>
				<img alt="Intel Pentium Gold G5400 / 4M / 3.7GHZ / 2 nhân 4 luồng - Socket 1151v2 Coffee Lake" src="//product.hstatic.net/1000162654/product/intel-pentium-gold-1-lbox-800x800-fefefe_large.jpg" alt="" />
			</a>
		</div>

		<div class="product-detail clearfix">
			

			<!-- sử dụng pull-left -->
			<p class="pro-price">1,950,000₫</p>
			<p class="pro-price-del text-left"></h3>
		<h3 class="pro-name"><a href="/products/intel-pentium-gold-g5400-4m-3-7ghz-2-nhan-4-luong-socket-1151v2-coffee-lake" title="Intel Pentium Gold G5400 / 4M / 3.7GHZ / 2 nhân 4 luồng - Socket 1151v2 Coffee Lake">Intel Pentium Gold G5400 / 4M / 3.7GHZ / 2 nhân 4 luồng - Socket 1151v2 Coffee Lake </a></h3>
		
	</div>
</div>	
</div>
				
				












<div class="col-md-3 col-sm-6 col-xs-6 pro-loop"> <!--sử dụng  -->
	<div class="product-block product-resize">
		<div class="product-img image-resize view view-third clearfix">
			
			
			<div class="sold-out">Hết hàng</div>
			

			<a href="/products/intel-core-i3-8100-processor-6m-cache-3-60-ghz-socket-1151v2-coffee-lake-hang-tray-khong-box" title="Intel Core i3-8100 Processor 6M Cache, 3.60 GHz - Socket 1151v2 Coffee Lake ( Hàng Tray không Box )">
				<div class="mask hidden-xs">
					<img src="{{asset('public')}}/assets/images/quick-look.png" data-handle="/products/intel-core-i3-8100-processor-6m-cache-3-60-ghz-socket-1151v2-coffee-lake-hang-tray-khong-box" alt="Intel Core i3-8100 Processor 6M Cache, 3.60 GHz - Socket 1151v2 Coffee Lake ( Hàng Tray không Box )" />
				</div>
				<img alt="Intel Core i3-8100 Processor 6M Cache, 3.60 GHz - Socket 1151v2 Coffee Lake ( Hàng Tray không Box )" src="//product.hstatic.net/1000162654/product/51rvnr94h7l_large.jpg" alt="" />
			</a>
		</div>

		<div class="product-detail clearfix">
			

			<!-- sử dụng pull-right -->
			<p class="pro-price">2,750,000₫</p>
			<p class="pro-price-del text-left"></h3>
		<h3 class="pro-name"><a href="/products/intel-core-i3-8100-processor-6m-cache-3-60-ghz-socket-1151v2-coffee-lake-hang-tray-khong-box" title="Intel Core i3-8100 Processor 6M Cache, 3.60 GHz - Socket 1151v2 Coffee Lake ( Hàng Tray không Box )">Intel Core i3-8100 Processor 6M Cache, 3.60 GHz - Socket 1151v2 Coffee Lake ( Hàng Tray không Box ) </a></h3>
		
	</div>
</div>	
</div>
				
				














<div class="col-md-3 col-sm-6 col-xs-6 pro-loop"> <!--sử dụng  -->
	<div class="product-block product-resize">
		<div class="product-img image-resize view view-third clearfix">
			
			

			<a href="/products/thermalright-true-120-direct-vardar" title="Thermalright True 120 Direct- Vardar">
				<div class="mask hidden-xs">
					<img src="{{asset('public')}}/assets/images/quick-look.png" data-handle="/products/thermalright-true-120-direct-vardar" alt="Thermalright True 120 Direct- Vardar" />
				</div>
				<img alt="Thermalright True 120 Direct- Vardar" src="//product.hstatic.net/1000162654/product/09_73cabf37d71844b6b6195135bfc416b2_large.jpg" alt="" />
			</a>
		</div>

		<div class="product-detail clearfix">
			

			<!-- sử dụng pull-left -->
			<p class="pro-price">990,000₫</p>
			<p class="pro-price-del text-left"></h3>
		<h3 class="pro-name"><a href="/products/thermalright-true-120-direct-vardar" title="Thermalright True 120 Direct- Vardar">Thermalright True 120 Direct- Vardar </a></h3>
		
	</div>
</div>	
</div>
				
				














<div class="col-md-3 col-sm-6 col-xs-6 pro-loop"> <!--sử dụng end -->
	<div class="product-block product-resize">
		<div class="product-img image-resize view view-third clearfix">
			
			

			<a href="/products/intel-pentium-gold-g5400-tray-ko-box-4m-3-7ghz-2-nhan-4-luong-socket-1151v2-coffee-lake" title="Intel Pentium Gold G5400 ( Tray ko box ) / 4M / 3.7GHZ / 2 nhân 4 luồng - Socket 1151v2 Coffee Lake">
				<div class="mask hidden-xs">
					<img src="{{asset('public')}}/assets/images/quick-look.png" data-handle="/products/intel-pentium-gold-g5400-tray-ko-box-4m-3-7ghz-2-nhan-4-luong-socket-1151v2-coffee-lake" alt="Intel Pentium Gold G5400 ( Tray ko box ) / 4M / 3.7GHZ / 2 nhân 4 luồng - Socket 1151v2 Coffee Lake" />
				</div>
				<img alt="Intel Pentium Gold G5400 ( Tray ko box ) / 4M / 3.7GHZ / 2 nhân 4 luồng - Socket 1151v2 Coffee Lake" src="//product.hstatic.net/1000162654/product/41x9-nkyekl_large.jpg" alt="" />
			</a>
		</div>

		<div class="product-detail clearfix">
			

			<!-- sử dụng pull-right -->
			<p class="pro-price">1,630,000₫</p>
			<p class="pro-price-del text-left"></h3>
		<h3 class="pro-name"><a href="/products/intel-pentium-gold-g5400-tray-ko-box-4m-3-7ghz-2-nhan-4-luong-socket-1151v2-coffee-lake" title="Intel Pentium Gold G5400 ( Tray ko box ) / 4M / 3.7GHZ / 2 nhân 4 luồng - Socket 1151v2 Coffee Lake">Intel Pentium Gold G5400 ( Tray ko box ) / 4M / 3.7GHZ / 2 nhân 4 luồng - Socket 1151v2 Coffee Lake </a></h3>
		
	</div>
</div>	
</div>
				
				














<div class="col-md-3 col-sm-6 col-xs-6 pro-loop"> <!--sử dụng  -->
	<div class="product-block product-resize">
		<div class="product-img image-resize view view-third clearfix">
			
			

			<a href="/products/intel-pentium-gold-g5500-4mb-3-8ghz-2-nhan-4-luong-socket-1151v2-coffee-lake" title="Intel Pentium Gold G5500 / 4M / 3.8GHZ / 2 nhân 4 luồng - Socket 1151v2 Coffee Lake">
				<div class="mask hidden-xs">
					<img src="{{asset('public')}}/assets/images/quick-look.png" data-handle="/products/intel-pentium-gold-g5500-4mb-3-8ghz-2-nhan-4-luong-socket-1151v2-coffee-lake" alt="Intel Pentium Gold G5500 / 4M / 3.8GHZ / 2 nhân 4 luồng - Socket 1151v2 Coffee Lake" />
				</div>
				<img alt="Intel Pentium Gold G5500 / 4M / 3.8GHZ / 2 nhân 4 luồng - Socket 1151v2 Coffee Lake" src="//product.hstatic.net/1000162654/product/upload_7b4485b5cb174c3c945edf881b017c60_large.jpg" alt="" />
			</a>
		</div>

		<div class="product-detail clearfix">
			

			<!-- sử dụng pull-left -->
			<p class="pro-price">2,400,000₫</p>
			<p class="pro-price-del text-left"></h3>
		<h3 class="pro-name"><a href="/products/intel-pentium-gold-g5500-4mb-3-8ghz-2-nhan-4-luong-socket-1151v2-coffee-lake" title="Intel Pentium Gold G5500 / 4M / 3.8GHZ / 2 nhân 4 luồng - Socket 1151v2 Coffee Lake">Intel Pentium Gold G5500 / 4M / 3.8GHZ / 2 nhân 4 luồng - Socket 1151v2 Coffee Lake </a></h3>
		
	</div>
</div>	
</div>
				
				














<div class="col-md-3 col-sm-6 col-xs-6 pro-loop"> <!--sử dụng  -->
	<div class="product-block product-resize">
		<div class="product-img image-resize view view-third clearfix">
			
			

			<a href="/products/cougar-minos-x3-white-gaming-mouse" title="Cougar Minos X3 White - Gaming Mouse">
				<div class="mask hidden-xs">
					<img src="{{asset('public')}}/assets/images/quick-look.png" data-handle="/products/cougar-minos-x3-white-gaming-mouse" alt="Cougar Minos X3 White - Gaming Mouse" />
				</div>
				<img alt="Cougar Minos X3 White - Gaming Mouse" src="//product.hstatic.net/1000162654/product/02_large.png" alt="" />
			</a>
		</div>

		<div class="product-detail clearfix">
			

			<!-- sử dụng pull-right -->
			<p class="pro-price">520,000₫</p>
			<p class="pro-price-del text-left"></h3>
		<h3 class="pro-name"><a href="/products/cougar-minos-x3-white-gaming-mouse" title="Cougar Minos X3 White - Gaming Mouse">Cougar Minos X3 White - Gaming Mouse </a></h3>
		
	</div>
</div>	
</div>
				
				














<div class="col-md-3 col-sm-6 col-xs-6 pro-loop"> <!--sử dụng end -->
	<div class="product-block product-resize">
		<div class="product-img image-resize view view-third clearfix">
			
			

			<a href="/products/intel-core-i5-8400-processor-9m-cache-up-to-4-00-ghz-socket-1151v2-coffee-lake" title="Intel Core i5-8400 Processor 9M Cache, up to 4.00 GHz - Socket 1151v2 Coffee Lake">
				<div class="mask hidden-xs">
					<img src="{{asset('public')}}/assets/images/quick-look.png" data-handle="/products/intel-core-i5-8400-processor-9m-cache-up-to-4-00-ghz-socket-1151v2-coffee-lake" alt="Intel Core i5-8400 Processor 9M Cache, up to 4.00 GHz - Socket 1151v2 Coffee Lake" />
				</div>
				<img alt="Intel Core i5-8400 Processor 9M Cache, up to 4.00 GHz - Socket 1151v2 Coffee Lake" src="//product.hstatic.net/1000162654/product/5883_large.jpg" alt="" />
			</a>
		</div>

		<div class="product-detail clearfix">
			

			<!-- sử dụng pull-left -->
			<p class="pro-price">5,100,000₫</p>
			<p class="pro-price-del text-left"></h3>
		<h3 class="pro-name"><a href="/products/intel-core-i5-8400-processor-9m-cache-up-to-4-00-ghz-socket-1151v2-coffee-lake" title="Intel Core i5-8400 Processor 9M Cache, up to 4.00 GHz - Socket 1151v2 Coffee Lake">Intel Core i5-8400 Processor 9M Cache, up to 4.00 GHz - Socket 1151v2 Coffee Lake </a></h3>
		
	</div>
</div>	
</div>
				
				














<div class="col-md-3 col-sm-6 col-xs-6 pro-loop"> <!--sử dụng  -->
	<div class="product-block product-resize">
		<div class="product-img image-resize view view-third clearfix">
			
			

			<a href="/products/cougar-minos-x3-rgb-led-optical-pro-gaming-mouse" title="Cougar Minos X3 RGB Led - Optical Pro Gaming Mouse">
				<div class="mask hidden-xs">
					<img src="{{asset('public')}}/assets/images/quick-look.png" data-handle="/products/cougar-minos-x3-rgb-led-optical-pro-gaming-mouse" alt="Cougar Minos X3 RGB Led - Optical Pro Gaming Mouse" />
				</div>
				<img alt="Cougar Minos X3 RGB Led - Optical Pro Gaming Mouse" src="//product.hstatic.net/1000162654/product/02_193bb2982eb84696b48d3ee03b706f9d_large.png" alt="" />
			</a>
		</div>

		<div class="product-detail clearfix">
			

			<!-- sử dụng pull-right -->
			<p class="pro-price">520,000₫</p>
			<p class="pro-price-del text-left"></h3>
		<h3 class="pro-name"><a href="/products/cougar-minos-x3-rgb-led-optical-pro-gaming-mouse" title="Cougar Minos X3 RGB Led - Optical Pro Gaming Mouse">Cougar Minos X3 RGB Led - Optical Pro Gaming Mouse </a></h3>
		
	</div>
</div>	
</div>
				
			</div>
			<div class="row">
				<div class="col-lg-12 pull-center">
					
					
					<a class="btn btn-readmore" href="/collections/san-pham-ban-chay" role="button">Xem thêm </a>
					
					
				</div>
			</div>
		</div>
		

		
		<div class="product-list clearfix ">
			<div class="title-line">
				<h3>Sản phẩm khuyến mãi</h3>
			</div>
			<div class="row content-product-list products-resize">
				
				














<div class="col-md-3 col-sm-6 col-xs-6 pro-loop"> <!--sử dụng  -->
	<div class="product-block product-resize">
		<div class="product-img image-resize view view-third clearfix">
			
			

			<a href="/products/anda-seat-assassin-king-v2-black-red-full-pvc-leather-4d-armrest-gaming-chair" title="Anda Seat Assassin King V2 Black/Red - Full PVC Leather 4D Armrest Gaming Chair">
				<div class="mask hidden-xs">
					<img src="{{asset('public')}}/assets/images/quick-look.png" data-handle="/products/anda-seat-assassin-king-v2-black-red-full-pvc-leather-4d-armrest-gaming-chair" alt="Anda Seat Assassin King V2 Black/Red - Full PVC Leather 4D Armrest Gaming Chair" />
				</div>
				<img alt="Anda Seat Assassin King V2 Black/Red - Full PVC Leather 4D Armrest Gaming Chair" src="//product.hstatic.net/1000162654/product/_00a5824_dd4a8b1926104a90aa6c751f027b516d_5631171ffcc84ae7b1f821be747e8d85_large.jpg" alt="" />
			</a>
		</div>

		<div class="product-detail clearfix">
			

			<!-- sử dụng pull-left -->
			<p class="pro-price">7,990,000₫</p>
			<p class="pro-price-del text-left"></h3>
		<h3 class="pro-name"><a href="/products/anda-seat-assassin-king-v2-black-red-full-pvc-leather-4d-armrest-gaming-chair" title="Anda Seat Assassin King V2 Black/Red - Full PVC Leather 4D Armrest Gaming Chair">Anda Seat Assassin King V2 Black/Red - Full PVC Leather 4D Armrest Gaming Chair </a></h3>
		
	</div>
</div>	
</div>
				
				














<div class="col-md-3 col-sm-6 col-xs-6 pro-loop"> <!--sử dụng end -->
	<div class="product-block product-resize">
		<div class="product-img image-resize view view-third clearfix">
			
			

			<a href="/products/anda-seat-assassin-king-v2-black-yellow-full-pvc-leather-4d-armrest-gaming-chair" title="Anda Seat Assassin King V2 Black/Yellow - Full PVC Leather 4D Armrest Gaming Chair">
				<div class="mask hidden-xs">
					<img src="{{asset('public')}}/assets/images/quick-look.png" data-handle="/products/anda-seat-assassin-king-v2-black-yellow-full-pvc-leather-4d-armrest-gaming-chair" alt="Anda Seat Assassin King V2 Black/Yellow - Full PVC Leather 4D Armrest Gaming Chair" />
				</div>
				<img alt="Anda Seat Assassin King V2 Black/Yellow - Full PVC Leather 4D Armrest Gaming Chair" src="//product.hstatic.net/1000162654/product/_00a5824__2__2f325ac34a3b4622b0dda0ed99506e28_large.jpg" alt="" />
			</a>
		</div>

		<div class="product-detail clearfix">
			

			<!-- sử dụng pull-right -->
			<p class="pro-price">7,990,000₫</p>
			<p class="pro-price-del text-left"></h3>
		<h3 class="pro-name"><a href="/products/anda-seat-assassin-king-v2-black-yellow-full-pvc-leather-4d-armrest-gaming-chair" title="Anda Seat Assassin King V2 Black/Yellow - Full PVC Leather 4D Armrest Gaming Chair">Anda Seat Assassin King V2 Black/Yellow - Full PVC Leather 4D Armrest Gaming Chair </a></h3>
		
	</div>
</div>	
</div>
				
				














<div class="col-md-3 col-sm-6 col-xs-6 pro-loop"> <!--sử dụng  -->
	<div class="product-block product-resize">
		<div class="product-img image-resize view view-third clearfix">
			
			

			<a href="/products/anda-seat-spirit-king-black-red-full-pu-leather-4d-armrest-gaming-chair" title="Anda Seat Spirit King Black/Red - Full PVC Leather 4D Armrest Gaming Chair">
				<div class="mask hidden-xs">
					<img src="{{asset('public')}}/assets/images/quick-look.png" data-handle="/products/anda-seat-spirit-king-black-red-full-pu-leather-4d-armrest-gaming-chair" alt="Anda Seat Spirit King Black/Red - Full PVC Leather 4D Armrest Gaming Chair" />
				</div>
				<img alt="Anda Seat Spirit King Black/Red - Full PVC Leather 4D Armrest Gaming Chair" src="//product.hstatic.net/1000162654/product/upload_a3f7781de3394d46af7e388951c88e5a_large.jpg" alt="" />
			</a>
		</div>

		<div class="product-detail clearfix">
			

			<!-- sử dụng pull-left -->
			<p class="pro-price">7,990,000₫</p>
			<p class="pro-price-del text-left"></h3>
		<h3 class="pro-name"><a href="/products/anda-seat-spirit-king-black-red-full-pu-leather-4d-armrest-gaming-chair" title="Anda Seat Spirit King Black/Red - Full PVC Leather 4D Armrest Gaming Chair">Anda Seat Spirit King Black/Red - Full PVC Leather 4D Armrest Gaming Chair </a></h3>
		
	</div>
</div>	
</div>
				
				
















<div class="col-md-3 col-sm-6 col-xs-6 pro-loop"> <!--sử dụng  -->
	<div class="product-block product-resize">
		<div class="product-img image-resize view view-third clearfix">
			
			<div class="product-sale" >
				<img src="{{asset('public')}}/assets/images/sale.png" alt="Colorful GTX 1060 3GB V3 BA2V - VGA" />
				<span><label class="sale-lb">Sale</label> 8%</span>
			</div>
			
			

			<a href="/products/colorful-gtx-1060-3gb-v3-ba2v-vga" title="Colorful GTX 1060 3GB V3 BA2V - VGA">
				<div class="mask hidden-xs">
					<img src="{{asset('public')}}/assets/images/quick-look.png" data-handle="/products/colorful-gtx-1060-3gb-v3-ba2v-vga" alt="Colorful GTX 1060 3GB V3 BA2V - VGA" />
				</div>
				<img alt="Colorful GTX 1060 3GB V3 BA2V - VGA" src="//product.hstatic.net/1000162654/product/upload_c6e2afb8879246719452c3a32f24373a_large.jpg" alt="" />
			</a>
		</div>

		<div class="product-detail clearfix">
			

			<!-- sử dụng pull-right -->
			<p class="pro-price">4,990,000₫</p>
			<p class="pro-price-del text-left"><del class="compare-price">5,400,000₫</del></h3>
		<h3 class="pro-name"><a href="/products/colorful-gtx-1060-3gb-v3-ba2v-vga" title="Colorful GTX 1060 3GB V3 BA2V - VGA">Colorful GTX 1060 3GB V3 BA2V - VGA </a></h3>
		
	</div>
</div>	
</div>
				
				














<div class="col-md-3 col-sm-6 col-xs-6 pro-loop"> <!--sử dụng end -->
	<div class="product-block product-resize">
		<div class="product-img image-resize view view-third clearfix">
			
			

			<a href="/products/in-win-303-nvidia-limited-edition-full-side-tempered-glass-mid-tower" title="In-Win 303 Nvidia Limited Edition - Full Side Tempered Glass Mid-Tower Case">
				<div class="mask hidden-xs">
					<img src="{{asset('public')}}/assets/images/quick-look.png" data-handle="/products/in-win-303-nvidia-limited-edition-full-side-tempered-glass-mid-tower" alt="In-Win 303 Nvidia Limited Edition - Full Side Tempered Glass Mid-Tower Case" />
				</div>
				<img alt="In-Win 303 Nvidia Limited Edition - Full Side Tempered Glass Mid-Tower Case" src="//product.hstatic.net/1000162654/product/upload_37b481d3628f46a5b030afa2a1cbe6fd_large.jpg" alt="" />
			</a>
		</div>

		<div class="product-detail clearfix">
			

			<!-- sử dụng pull-left -->
			<p class="pro-price">2,990,000₫</p>
			<p class="pro-price-del text-left"></h3>
		<h3 class="pro-name"><a href="/products/in-win-303-nvidia-limited-edition-full-side-tempered-glass-mid-tower" title="In-Win 303 Nvidia Limited Edition - Full Side Tempered Glass Mid-Tower Case">In-Win 303 Nvidia Limited Edition - Full Side Tempered Glass Mid-Tower Case </a></h3>
		
	</div>
</div>	
</div>
				
				














<div class="col-md-3 col-sm-6 col-xs-6 pro-loop"> <!--sử dụng  -->
	<div class="product-block product-resize">
		<div class="product-img image-resize view view-third clearfix">
			
			

			<a href="/products/lg-32gk850f-qhd144hz-freesync-ii-gaming-monitor" title="LG 32GK850F QHD144Hz Freesync II Gaming Monitor">
				<div class="mask hidden-xs">
					<img src="{{asset('public')}}/assets/images/quick-look.png" data-handle="/products/lg-32gk850f-qhd144hz-freesync-ii-gaming-monitor" alt="LG 32GK850F QHD144Hz Freesync II Gaming Monitor" />
				</div>
				<img alt="LG 32GK850F QHD144Hz Freesync II Gaming Monitor" src="//product.hstatic.net/1000162654/product/upload_6d9b4ebd91d74e929861dbd9eb558854_large.jpg" alt="" />
			</a>
		</div>

		<div class="product-detail clearfix">
			

			<!-- sử dụng pull-right -->
			<p class="pro-price">8,990,000₫</p>
			<p class="pro-price-del text-left"></h3>
		<h3 class="pro-name"><a href="/products/lg-32gk850f-qhd144hz-freesync-ii-gaming-monitor" title="LG 32GK850F QHD144Hz Freesync II Gaming Monitor">LG 32GK850F QHD144Hz Freesync II Gaming Monitor </a></h3>
		
	</div>
</div>	
</div>
				
				














<div class="col-md-3 col-sm-6 col-xs-6 pro-loop"> <!--sử dụng  -->
	<div class="product-block product-resize">
		<div class="product-img image-resize view view-third clearfix">
			
			

			<a href="/products/steelseries-rival-710-mouse" title="SteelSeries Rival 710 - Mouse">
				<div class="mask hidden-xs">
					<img src="{{asset('public')}}/assets/images/quick-look.png" data-handle="/products/steelseries-rival-710-mouse" alt="SteelSeries Rival 710 - Mouse" />
				</div>
				<img alt="SteelSeries Rival 710 - Mouse" src="//product.hstatic.net/1000162654/product/3_f6b2ac3282774a7786d837bde45c281d_large.jpg" alt="" />
			</a>
		</div>

		<div class="product-detail clearfix">
			

			<!-- sử dụng pull-left -->
			<p class="pro-price">2,150,000₫</p>
			<p class="pro-price-del text-left"></h3>
		<h3 class="pro-name"><a href="/products/steelseries-rival-710-mouse" title="SteelSeries Rival 710 - Mouse">SteelSeries Rival 710 - Mouse </a></h3>
		
	</div>
</div>	
</div>
				
				
















<div class="col-md-3 col-sm-6 col-xs-6 pro-loop"> <!--sử dụng end -->
	<div class="product-block product-resize">
		<div class="product-img image-resize view view-third clearfix">
			
			<div class="product-sale" >
				<img src="{{asset('public')}}/assets/images/sale.png" alt="Zalman ZM-HPS200 - Gaming Headset" />
				<span><label class="sale-lb">Sale</label> 28%</span>
			</div>
			
			

			<a href="/products/zalman-zm-hps200-gaming-headset" title="Zalman ZM-HPS200 - Gaming Headset">
				<div class="mask hidden-xs">
					<img src="{{asset('public')}}/assets/images/quick-look.png" data-handle="/products/zalman-zm-hps200-gaming-headset" alt="Zalman ZM-HPS200 - Gaming Headset" />
				</div>
				<img alt="Zalman ZM-HPS200 - Gaming Headset" src="//product.hstatic.net/1000162654/product/upload_462be1284e134c4582997c374901dcfb_large.jpg" alt="" />
			</a>
		</div>

		<div class="product-detail clearfix">
			

			<!-- sử dụng pull-right -->
			<p class="pro-price">180,000₫</p>
			<p class="pro-price-del text-left"><del class="compare-price">250,000₫</del></h3>
		<h3 class="pro-name"><a href="/products/zalman-zm-hps200-gaming-headset" title="Zalman ZM-HPS200 - Gaming Headset">Zalman ZM-HPS200 - Gaming Headset </a></h3>
		
	</div>
</div>	
</div>
				
			</div>
			<div class="row">
				<div class="col-lg-12 pull-center">

					
					
					
				</div>
			</div>
		</div>
		

		
		<!-- End sản phẩm trang chủ -->
	</div>
	<!-- Content-->
</div>
@endsection