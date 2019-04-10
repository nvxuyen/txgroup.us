<?php
	use App\Collection;
?>
						<nav class="navbar-main navbar navbar-default cl-pri">
							
<!-- MENU MAIN -->
<div class="container nav-wrapper check_nav">
	<div class="row">
		<div class="navbar-header">		
			<div class="pull-right mobile-menu-icon-wrapper">
				<ul class="mobile-menu-icon">
					<li class="search">
						<div class="btn-group">
							<button type="button" class="btn btn-default dropdown-toggle icon-search" data-toggle="dropdown" aria-expanded="false">
							</button>
							<div class="dropdown-menu" role="menu">
								<div class="search-bar">
									<div class="">
										<form class="col-md-12" action="/search">
											<input type="hidden" name="type" value="product" />
											<input type="text" name="q" placeholder="Tìm kiếm..." />
										</form>
									</div>
								</div>
							</div>
						</div>
					</li>
<li id="cart-target" class="cart">
						<a href="{{ route('cart') }}" class="cart " title="Giỏ hàng">
							<span class="fa fa-shopping-cart"></span>							
							<span id="cart-count">{{ $totalItem }}</span>
						</a>
					</li>
					<li class="user">
						@if(Auth::check())
							Hi<a href="{{ route('account') }}" title="Tài khoản">{{ Auth::user()->full_name }}</a>
						@else
							<a href="{{route('login')}}" title="Đăng nhập" class="fa fa-user"></a>
						@endif
					</li>
					
				</ul>
			</div>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav clearfix">
				
				@foreach($col as $c)
				<li class="dropdown">
					<a href="{{ route('collection', ['name' => $c->name_ascii]) }}" title="{{$c->name}}" class=" current">
						<span>{{$c->name}}</span>
					</a>
					@php 
						$col1 = Collection::where('parent', $c->id)->orderBy('position', 'ASC')->get();
					@endphp
					@if(count($col1) > 0)
					<ul class="dropdown-menu" role="menu">
						@foreach($col1 as $c1)
						<li>
							<a href="{{ route('collection', ['name' => $c1->name_ascii]) }}" title="{{$c1->name}}">{{$c1->name}}</a>
							@php 
								$col2 = Collection::where('parent', $c1->id)->orderBy('position', 'ASC')->get();
							@endphp
							@if(count($col2) > 0)
							<ul class="dropdown-menu">
								@foreach($col2 as $c2)
								<li>
									<a href="{{ route('collection', ['name' => $c2->name_ascii]) }}" title="{{$c2->name}}">{{$c2->name}}</a>
								</li>
								@endforeach
							</ul>
							@endif
						</li>
						@endforeach
					</ul>
					@endif
				</li>
				@endforeach
				
				<li class="dropdown">
					<a href="#" title="Blog" class="">
						<span>Blog</span>
					</a>
					<ul class="dropdown-menu" role="menu">
						
						@foreach($cat_news as $cat)
							<li><a href="{{ route('blogs.cat',['name' => $cat->name_ascii]) }}">{{ $cat->name }}</a></li>
						@endforeach
						
					</ul>
				</li>
				
				
			</ul>

		</div>
		<div  class="hidden-xs pull-right right-menu">
			<ul class="nav navbar-nav pull-right">
				
				<li id="user-icon">
					<ul>
                        @if(Auth::check())
                        <li><a class="acc" href="{{route('account')}}" title="Tài khoản">TÀI KHOẢN CỦA BẠN</a></li>
						@else
						<li><a class="reg" href="{{route('register')}}" title="Đăng ký">ĐĂNG KÝ</a></li>
						<li>hay <a class="log" href="{{route('login')}}" title="Đăng nhập">Đăng nhập</a></li>
						@endif
					</ul>
				</li>
				
				<li class=""> 
					<ul class="nodrop">
						<li id="search-icon" class="drop-control">
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle icon-search" data-toggle="dropdown" aria-expanded="false">

								</button>
								<div class="dropdown-menu" role="menu">
									<div class="search-bar">
										<div class="">
											<form class="col-md-12" action="{{route('search')}}">
												<input type="hidden" name="type" value="product" />
												<input type="text" name="q" placeholder="Tìm kiếm..." />
											</form>
										</div>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</li>
				<!-- Card --> 

				<li class=""> 
					<ul class="nodrop" >
						<li id="cart-target" class="toolbar-cart ">
							<a href="{{ route('cart') }}" title="Giỏ hàng" class="cart">
								<span class="icon-cart"></span>
								<span>
									<span id="cart-count">{{ $totalItem }}</span>
								</span>
							</a>
						</li>
					</ul>
				</li> <!-- Card --> 


			</ul>
		</div><!--/.nav-collapse -->
	</div>
</div><!-- End container  -->

<script>

$(window).resize(function(){
	$('li.dropdown li.active').parents('.dropdown').addClass('active');
	if($('.right-menu').width() + $('#navbar').width() > $('.check_nav.nav-wrapper').width() - 40)
	{
		$('.container-mp.nav-wrapper').addClass('responsive-menu');
	}
	else{
		$('.container-mp.nav-wrapper').removeClass('responsive-menu');
	}
})

$(document).on("click", "ul.mobile-menu-icon .dropdown-menu ,.drop-control .dropdown-menu, .drop-control .input-dropdown", function (e) {
	e.stopPropagation();
});
</script>
						</nav>