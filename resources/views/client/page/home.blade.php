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
													
													@foreach($slider as $s)
													<li>
														<a href="{{ $s->link }}">
															<img src="{{asset('public/assets/images/slider/'.$s->image)}}" alt="{{ $s->alt }}" />
														</a>
													</li>
													@endforeach
													
													
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
@php
	use App\ImgProduct;
@endphp
<div class="col-md-9 col-sm-12 col-xs-12">
	<!-- Content-->
	<div class="main-content">

		<!-- Sản phẩm trang chủ -->

		<div class="product-list clearfix" >
			<div class="title-line">
				<h3>Sản phẩm nổi bật</h3>
			</div>
			<!--Product loop-->
			<div class="row content-product-list products-resize">
				
@foreach($pro_highlighs as $p)
		@php
			$img = ImgProduct::where('product_id', $p->id)->first();
		@endphp	

<div class="col-md-3 col-sm-6 col-xs-6 pro-loop"> <!--sử dụng  -->
	<div class="product-block product-resize">
		@if($p->inventory == 0)
		<div class="sold-out">Hết hàng</div>
		@endif
		<div class="product-img image-resize view view-third clearfix">
			

			<a href="{{route('products',['name'=>$p->name_ascii])}}" title="{{ $p->name }}">
				<div class="mask hidden-xs">
					<img src="{{asset('public')}}/assets/images/quick-look.png" alt="{{$p->name}}" />
				</div>
				<img alt="{{$p->name}}" src="{{asset('storage/app/'.$img->images)}}" alt="" />
			</a>
		</div>

		<div class="product-detail clearfix">
			
			<!-- sử dụng pull-left -->
			<p class="pro-price">{{number_format($p->price)}}₫</p>
			<p class="pro-price-del text-left"></h3>
		<h3 class="pro-name"><a href="{{route('products',['name'=>$p->name_ascii])}}" title="{{$p->name}}">{{$p->name}} </a></h3>
		
	</div>
</div>	
</div>
@endforeach

				
			</div>
			<div class="row">
				<div class="col-lg-12 pull-center">
					
					
					<a class="btn btn-readmore" href="{{ route('products.all', ['sort_by'=>'manual']) }}" role="button">Xem thêm </a>
					
					
				</div>
			</div>
		</div>
		<!--Product loop-->
		

		
		<div class="product-list clearfix" >
			<div class="title-line">
				<h3>Sản phẩm mới</h3>
			</div>
			<!--Product loop-->
			<div class="row content-product-list products-resize">
				
@foreach($pro_new as $p)

		@php
			$img = ImgProduct::where('product_id', $p->id)->first();
		@endphp	
<div class="col-md-3 col-sm-6 col-xs-6 pro-loop"> <!--sử dụng  -->
	<div class="product-block product-resize">
		@if($p->inventory == 0)
		<div class="sold-out">Hết hàng</div>
		@endif
		<div class="product-img image-resize view view-third clearfix">
			
			

			<a href="{{route('products',['name'=>$p->name_ascii])}}" title="{{ $p->name }}">
				<div class="mask hidden-xs">
					<img src="{{asset('public/assets/images/quick-look.png')}}" data-handle="{{route('products',['name'=>$p->name_ascii])}}" alt="{{$p->name}}" />
				</div>
				<img alt="{{$p->name}}" src="{{asset('storage/app/'.$img->images)}}" alt="" />
			</a>
		</div>

		<div class="product-detail clearfix">
			

			<!-- sử dụng pull-left -->
			<p class="pro-price">{{number_format($p->price)}}₫</p>
			<p class="pro-price-del text-left"></h3>
		<h3 class="pro-name"><a href="{{route('products',['name'=>$p->name_ascii])}}" title="{{$p->name}}">{{$p->name}} </a></h3>
		
	</div>
</div>	
</div>
@endforeach

				
			</div>
			<div class="row">
				<div class="col-lg-12 pull-center">
					
					
					<a class="btn btn-readmore" href="{{ route('products.all', ['sort_by'=>'created-descending']) }}" role="button">Xem thêm </a>
					
					
				</div>
			</div>
		</div>
		<!--Product loop-->

		<div class="product-list clearfix" >
			<div class="title-line">
				<h3>Sản phẩm mới</h3>
			</div>
			<!--Product loop-->
			<div class="row content-product-list products-resize">
				
@foreach($pro_care as $p)

		@php
			$img = ImgProduct::where('product_id', $p->id)->first();
		@endphp	
<div class="col-md-3 col-sm-6 col-xs-6 pro-loop"> <!--sử dụng  -->
	<div class="product-block product-resize">
		@if($p->inventory == 0)
		<div class="sold-out">Hết hàng</div>
		@endif
		<div class="product-img image-resize view view-third clearfix">
			
			

			<a href="{{route('products',['name'=>$p->name_ascii])}}" title="{{ $p->name }}">
				<div class="mask hidden-xs">
					<img src="{{asset('public/assets/images/quick-look.png')}}" data-handle="{{route('products',['name'=>$p->name_ascii])}}" alt="{{$p->name}}" />
				</div>
				<img alt="{{$p->name}}" src="{{asset('storage/app/'.$img->images)}}" alt="" />
			</a>
		</div>

		<div class="product-detail clearfix">
			

			<!-- sử dụng pull-left -->
			<p class="pro-price">{{number_format($p->price)}}₫</p>
			<p class="pro-price-del text-left"></h3>
		<h3 class="pro-name"><a href="{{route('products',['name'=>$p->name_ascii])}}" title="{{$p->name}}">{{$p->name}} </a></h3>
		
	</div>
</div>	
</div>
@endforeach

				
			</div>
			<!---
			<div class="row">
				<div class="col-lg-12 pull-center">
					
					
					<a class="btn btn-readmore" href="{{ route('products.all', ['sort_by'=>'created-descending']) }}" role="button">Xem thêm </a>
					
					
				</div>
			</div>-->
		</div>
		<!--Product loop-->
		
		<!-- End sản phẩm trang chủ -->
	</div>
	<!-- Content-->
</div>
@endsection