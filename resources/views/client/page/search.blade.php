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

<div class="col-md-9 col-xs-12 col-sm-12" id="layout-page">
	<span class="header-search header-page clearfix">
		<h1>Tìm kiếm</h1>
	</span>

	<div class="content-page" id="search">
		<div class="col-md-12">
			<span class="subtext">
				Kết quả tìm kiếm cho  <strong>"{{$keyword}}"</strong>.
			</span>
		</div>
	</div>
	<div class="results content-page content-product-list product-list">
		<!-- Begin results -->

@foreach($data_search as $p)
@php
	$img = ImgProduct::where('product_id', $p->id)->first();
@endphp	
		<div class="col-md-3 col-sm-6 col-xs-6 pro-loop"> <!--sử dụng  -->
			<div class="product-block product-resize">
				@if($p->inventory == 0)
				<div class="sold-out">Hết hàng</div>
				@endif
				<div class="product-img image-resize view view-third clearfix">
					
				@php
					$img = ImgProduct::where('product_id', $p->id)->first();
				@endphp	

					<a href="{{route('products',['name'=>$p->name_ascii])}}" title="{{ $p->name }}">
						<div class="mask hidden-xs">
							<img src="{{asset('public')}}/assets/images/quick-look.png" data-handle="{{route('products',['name'=>$p->name_ascii])}}" alt="{{$p->name}}" />
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
	<!-- End results -->

  <div id="pagination" class="">

	

</div>

  
  

  

  
	<!-- /#search -->

	<style>
    div#search {
    float: left;
    width: 100%;
    outline: none;
    }
    .search-field {
    width: 100%!important;
    }
    input#go {
    width: 34px!important;
    height: 34px!important;
    float: right!important;
    background: url(//hstatic.net/0/0/global/design/theme-default/icon-search.png) #28303e center no-repeat;
    margin: 0px!important;
    font-size: 0px;
    position: relative!important;
    top:0px!important;
    }
    #search .search_box
    {
    width: calc(100% - 34px)!important;
    float: left;
    outline: none;
    padding: 0px 0px 0px 10px;
    }
  </style>

</div>
@endsection