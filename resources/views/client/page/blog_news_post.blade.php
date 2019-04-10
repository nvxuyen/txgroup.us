	<!--Begin: Bài viết mới nhất-->
	<div class="news-latest list-group">
		<span class="list-group-item active">
			Bài viết mới nhất
		</span>
		
		@foreach($news as $n)
		<div class="article">
		
			<div class="col-ld-3 col-md-3 col-sm-4 col-xs-4">
				<a href="{{route('blogs.read',['cat'=>$n->cat_news->name_ascii, 'title'=>$n->title_ascii])}}"><img src="{{$n->image}}" alt="{{ $n->title }}"></a>
			</div>
			
			<div class="post-content  col-lg-9 col-md-9 col-sm-8 col-xs-8 ">
				<a href="{{route('blogs.read',['cat'=>$n->cat_news->name_ascii, 'title'=>$n->title_ascii])}}">{{ $n->title }}</a><span class="date"> <i class="time-date"></i>{{ $n->created_at->format('d/m/Y') }}</span>
			</div>
		</div>
		@endforeach
		
	</div>
	<!--End: Bài viết mới nhất-->