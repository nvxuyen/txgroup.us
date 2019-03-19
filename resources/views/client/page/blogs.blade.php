@extends('client.master')

@section('content')

<div id="blog">
	
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="main-content row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd5  ">
	<ol class="breadcrumb breadcrumb-arrow hidden-sm hidden-xs">
		<li><a href="{{route('trang-chu')}}" target="_self">Trang chủ</a></li>
				
		
		
		<li class="active"><span>Blog - {{isset($cat_name) ? $cat_name : 'Tất cả'}}</span></li>
		
		
	</ol>
</div>
			<!-- Begin content -->
			<div class="blog-content col-md-12">
				<div class="row"> 
					<div class="col-md-9" id="blog-container">
						<div class="">
							<div class="col-md-12 articles clearfix" id="layout-page">
								<span class="header-page">
									<h1>{{isset($cat_name) ? $cat_name : 'Tất cả'}}</h1>
								</span>
								
								<!-- Begin: Nội dung blog -->      
							
								
								@foreach($news as $n)
								<div class="news-content">
									<div class="col-md-2 hidden-xs hidden-sm">
										<!--Begin:ngày giờ đăng bài viết  -->
										<div class="author-date">
											<ul class="date-post">
												<li> 
													<i class="icon-time"></i>
													<p>
														{{$n->created_at}}
													</p>
												</li>
											</ul>
										</div>
										<!--End:ngày giờ đăng bài viết  -->
										<!--Begin: số bình luận  -->
										
										<!--End: số đăng bình luận   -->
									</div>
									<!-- mobile -->

									<div class="col-xs-12 col-sm-12 hidden-lg hidden-md">
										<!-- Begin: Nội dung bài viết -->
										<h2 class="title-article"><a href="{{route('blogs')}}/readmore/{{$n->id}}/{{$n->title_ascii}}.html">{{$n->title}}</a></h2>
										<div class="body-content">
											<ul class="info-more">
												<li><i class="icon-info icon-hot clearfix"></i> <a href="#"> {{$n->name}}	</a> </li>
												<li><i class="icon-time"></i>
													<p>
														{{$n->created_at}}
													</p>
												</li>	
																						

											</ul>

										</div>
										<!-- End: Nội dung bài viết -->	
									</div>

									<div class="col-md-5 col-xs-12 col-sm-12 img-article">
										<div class="art-img">
											<img src="{{$n->image}}" alt="">
										</div>
									</div>
									

									<div class=" col-md-5  hidden-xs hidden-sm">
										<!-- Begin: Nội dung bài viết -->
										<h2 class="title-article"><a href="{{route('blogs')}}/readmore/{{$n->id}}/{{$n->title_ascii}}.html">{{$n->title}}</a></h2>
										<div class="body-content">
											<ul class="info-more">
												<li><i class="icon-info icon-hot clearfix"></i> <a href="#"> {{$n->name}}	</a> </li>
											</ul>
											<p>{{$n->quote}}</p>
										</div>
										<!-- End: Nội dung bài viết -->	
										<a class="readmore clear-fix" href="{{route('blogs')}}/readmore/{{$n->id}}/{{$n->title_ascii}}.html" role="button">Xem tiếp <span class="fa fa-angle-double-right"></span></a>
									</div>


									<div class="col-xs-12 hidden-lg hidden-md">
										<p class="text-mobi-blog">{{$n->quote}}</p>

										<a class="readmore clear-fix" href="{{route('blogs')}}/readmore/{{$n->id}}/{{$n->title_ascii}}.html" role="button">Xem tiếp <span class="fa fa-angle-double-right"></span></a>

									</div>

								</div>
								<hr class="line-blog">
								<!-- End: Nội dung blog --> 
								@endforeach

							</div>
							<div class="col-md-12">
								<!-- Begin: Phân trang blog --> 
								 {{$news->links()}}
								<div id="pagination" class="">

	

</div>
								<!-- End: Phân trang blog --> 
							</div>
						</div>
					</div>

					<div class="col-md-3 clearfix">
						<!-- Begin sidebar blog -->
						<div class="sidebar">
	
	<!-- Begin: Danh mục tin tức -->
	@include('client.page.blog_cat')

	<!-- End: Danh mục tin tức -->
	@include('client.page.blog_news_post')
	
</div>
						<!-- End sidebar blog -->
					</div>
				</div>
			</div>
		</div>

		<!-- End content -->
		
	</div>

</div>
@endsection