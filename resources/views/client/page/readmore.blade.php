@extends('client.master')

@section('content')
<section id="content" class="clearfix container">

							
							

							
<div id="article" class="article-detail clearfix">
	<div class="col-md-12 col-sm-12 col-xs-12 article">
		<div class="main-content">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd5 blog-breadcrumb ">
	<ol class="breadcrumb breadcrumb-arrow hidden-sm hidden-xs">
		<li><a href="/" target="_self">Trang chủ</a></li>
		
	
		<li><a href="{{ route('blogs.cat', ['name'=>$detail->cat_news->name_ascii]) }}">Blog - {{ $detail->cat_news->name }}</a></li>

		<li class="active"><span>{{$detail->title}}</span></li>
		
	</ol>
</div>
			<!-- Begin article -->
			<div class="article-body">
				<div class="col-md-9 articles clearfix" id="layout-page">
					<span class="header-page clearfix">
						<h1>{{$detail->title}}</h1>
					</span>

					<div class="content-page row">
						<div class="col-md-2">
							<!--Begin:ngày giờ đăng bài viết  -->
							<div class="author-date">
								<ul class="date-post">
									<li> 
										<i class="icon-time"></i>
										<p>
											{{date_format($detail->created_at, "d/m/Y")}}
											}
										</p>
									</li>
								</ul>
							</div>
							<!--End:ngày giờ đăng bài viết  -->

							<!--Begin: số bình luận  -->
                            
							<!--End: số đăng bình luận   -->
						</div>

						<div class="col-md-10 article-content">
							
							<div class="body-content">
								{!!$detail->content!!}
							</div>

						</div>
                        
					</div>

				</div>   
				<!-- End article--> 


				<!-- Begin sidebar -->
				<div class="col-md-3 clearfix">
					<div class="sidebar">
	
	<!-- Begin: Danh mục tin tức -->
	@include('client.page.blog_cat')

	<!-- End: Danh mục tin tức -->
	@include('client.page.blog_news_post')




</div>
					<!-- End sidebar -->
				</div>
			</div>    


		</div>
	</div>
</div>


						</section>
@endsection