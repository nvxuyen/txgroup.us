<?php
	use App\Collection;
?>
				<button type="button" class="navbar-toggle btn-sidebar" id="trigger">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<nav id="mp-menu" class="mp-menu">
	<div class="mp-level">
		<ul class="lv1">
		
			@foreach($col as $c)

			<li class="has-children icon icon-arrow-left">
				<a href="/">{{ $c->name }}</a>
				
				<div class="mp-level">
					<h2 >{{ $c->name }}</h2>
					<a class="mp-back" href="#">Quay lại</a>
					<ul class="cd-secondary-nav count-nav-6">
						
						@php
							$col1 = Collection::where('parent', $c->id)->orderBy('position', 'ASC')->get();
						@endphp

						@foreach($col1 as $c1)
						@php
							$col2 = Collection::where('parent', $c1->id)->orderBy('position', 'ASC')->get();
						@endphp
						@if(count($col2) == 0)
						<li><a href="{{ route('collection', ['name' => $c1->name_ascii]) }}">{{ $c1->name }}</a></li>
						@else
						<li class="has-children icon icon-arrow-left">
							<a href="/collections/dien-thoai-di-dong">{{ $c1->name }}</a>
							<div class="mp-level">
								<h2 >{{ $c1->name }}</h2>
								<a class="mp-back" href="#">Quay lại</a>
								<ul>	
									@foreach($col2 as $c2)													
										<li><a href="{{ route('collection', ['name' => $c2->name_ascii]) }}">{{ $c2->name }}</a></li>
									@endforeach		
								</ul>
							</div>
						</li>
						@endif
						@endforeach
						
					</ul>
				</div>
			</li>

			@endforeach
			
			
			<li class="has-children icon icon-arrow-left">
				<a href="#">Blog</a>
				
				<div class="mp-level">
					<h2 >Blog</h2>
					<a class="mp-back" href="#">Quay lại</a>
					<ul class="cd-secondary-nav count-nav-3">
						
						@foreach($cat_news as $cat)
							<li><a href="{{ route('blogs.cat',['name' => $cat->name_ascii]) }}">{{ $cat->name }}</a></li>
						@endforeach
					</ul>
				</div>
			</li>
			
			
		</ul>
	</div>
</nav>
