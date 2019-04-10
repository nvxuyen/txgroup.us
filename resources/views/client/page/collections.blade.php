@extends('client.master')
@section('sidebar')
@include('client.layout.sidebar')
@endsection
@section('banner')
@include('client.layout.banner')
@endsection
@section('content')
<div id="collection">
@php
	use App\ImgProduct;
@endphp
	
	<!-- Begin collection info -->
	<!-- Content-->
	<div class="col-md-9 col-sm-12 col-xs-12">
		<div class="row">
			<div class="main-content">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd5  ">
	<ol class="breadcrumb breadcrumb-arrow hidden-sm hidden-xs">
		<li><a href="/" target="_self">Trang chủ</a></li>
		
		<li class="active"><span>{{ $breadcrumb }}</span></li>
				
	</ol>
</div>
				
				<div class="col-md-12">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<h1>
								
							</h1>
						</div>
						<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">

              
              <div class="browse-tags">
                <span>Sắp xếp theo:</span>
                <span class="custom-dropdown custom-dropdown--white">
                  <select class="sort-by custom-dropdown__select custom-dropdown__select--white">
                    <option value="manual">Sản phẩm nổi bật</option>
                    <option value="price-ascending">Giá: Tăng dần</option>
                    <option value="price-descending">Giá: Giảm dần</option>
                    <option value="title-ascending">Tên: A-Z</option>
                    <option value="title-descending">Tên: Z-A</option>
                    <option value="created-ascending">Cũ nhất</option>
                    <option value="created-descending">Mới nhất</option>
                    <option value="best-selling">Bán chạy nhất</option>
                  </select>
                </span>
              </div>
              
            </div>
					</div>
				</div>
				<div class="col-md-12 product-list">
					<div class="row content-product-list">
						@foreach($product as $p)
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
				</div>
				<div class="col-md-12 ">
					<div id="pagination" class="">

	

</div>
				</div>
			</div>
		</div>
	</div>

	<!-- End collection info -->
	<!-- Begin no products -->
	
	
	<!-- End no products -->
</div>
<script>
Haravan.queryParams = {};
if (location.search.length) {
	for (var aKeyValue, i = 0, aCouples = location.search.substr(1).split('&'); i < aCouples.length; i++) {
		aKeyValue = aCouples[i].split('=');
		if (aKeyValue.length > 1) {
			Haravan.queryParams[decodeURIComponent(aKeyValue[0])] = decodeURIComponent(aKeyValue[1]);
		}
	}
}
var collFilters = jQuery('.coll-filter');
collFilters.change(function() {
	var newTags = [];
	var newURL = '';
	delete Haravan.queryParams.page;
	collFilters.each(function() { 
		if (jQuery(this).val()) {
			newTags.push(jQuery(this).val());
		}
	});
	
	newURL = '/collections/' + 'sieu-khuyen-mai';
	 if (newTags.length) {
		 newURL += '/' + newTags.join('+');
	 }
	 var search = jQuery.param(Haravan.queryParams);
	 if (search.length) {
		 newURL += '?' + search;
	 }
	 location.href = newURL;    
	       
		});
		jQuery('.sort-by')
		.val('{{ $title_sort }}')
		.bind('change', function() {
			Haravan.queryParams.sort_by = jQuery(this).val();
			location.search = jQuery.param(Haravan.queryParams);
		});
		</script>
@endsection