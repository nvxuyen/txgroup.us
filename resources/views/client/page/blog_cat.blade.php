<?php
	use App\Collection;
?>
	<div class="news-menu list-group">
		<span class="list-group-item active">Danh mục</span>
		<ul class="nav sidebar" id="menu-blog">
			@foreach($col as $key => $row)
			<li class="items has-sub  @if($key == 0) first @endif">
				<a href="{{ route('collection', ['name' => $row->name_ascii]) }}">
					<span class="lbl">{{ $row->name }}</span>
					<span data-toggle="collapse" data-parent="#cssmenu" href="#sub-item-{{ $row->id }}" class="sign">
						<img src="{{ asset('public/assets/images/arrow-down.png') }}">
					</span>
				</a>

				@php
					$col1 = Collection::where('parent', $row->id)->orderBy('position', 'ASC')->get();
				@endphp
				@if(count($col))
				<ul class="nav children collapse" id="sub-item-{{ $row->id }}">
					@php
						$last_key = count($col1)-1;
					@endphp
					@foreach($col1 as $key1 => $row1)
					@php
						$col2 = Collection::where('parent', $row1->id)->orderBy('position', 'ASC')->get();
						$class = "";
						if(count($col2) > 0)
						{
							if($key1 == 0)
								$class = "has-sub first";
							elseif($key1 == $last_key)
								$class = "has-sub last";
							else
								$class = "has-sub";
						}else{
							if($key1 == 0)
								$class = "first";
							elseif($key1 == $last_key)
								$class = "last";
							else
								$class = "";
						}
					@endphp
					<li class="{{ $class }}">
						<a href="{{ route('collection', ['name' => $row1->name_ascii]) }}" title="{{ $row1->name }}">
							<span>{{ $row1->name }}</span>
							@if(count($col2) > 0)
							<span class="sign drop-down-1">
								<img src="{{ asset('public/assets/images/arrow-down.png') }}">
							</span>
							@endif
						</a>
						@if(count($col2) > 0)
						<ul class="nav children collapse lve2-blog">
							@foreach($col2 as $key2 => $c2)
							<li class="@if($key2 % 2 == 0) even @else odd @endif">
								<a href="{{ route('collection', ['name' => $c2->name_ascii]) }}" title="{{ $c2->name }}">
									<span>{{ $c2->name }}</span>
								</a>				
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
			
			
			<li class="item has-sub active last">
				<a href="#">
					<span class="lbl">Blog</span>
					<span data-toggle="collapse" data-parent="#cssmenu" href="#sub-item-6" class="sign">
						<img src="{{ asset('public/assets/images/arrow-down.png') }}">
					</span>
				</a>
				<ul class="nav children collapse" id="sub-item-6">
					
					@php
						$last_news = count($cat_news)-1;
					@endphp
					@foreach($cat_news as $key => $v)

					<li class="@if($key == 0) first current active @elseif($key == $last_news) last @else  @endif">
						<a href="{{ route('blogs.cat',['name' => $v->name_ascii]) }}" title="{{ $v->name }}">
							<span>{{ $v->name }}</span>
						</a>
					</li>
					@endforeach				
					
				</ul>
			</li>
			
			
		</ul>
		<script>
		$(document).ready(function(){
			//$('ul li:has(ul)').addClass('hassub');
			$('#menu-blog ul ul li:odd').addClass('odd');
			$('#menu-blog ul ul li:even').addClass('even');
			$('#menu-blog > ul > li > a').click(function() {
				$('#menu-blog li').removeClass('active');
				$(this).closest('li').addClass('active');
				var checkElement = $(this).nextS();
				if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
					$(this).closest('li').removeClass('active');
					checkElement.slideUp('normal');
				}
				if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
					$('#menu-blog ul ul:visible').slideUp('normal');
					checkElement.slideDown('normal');
				}
				if($(this).closest('li').find('ul').children().length == 0) {
					return true;
				} else {
					return false;
				}
			});

			$('.drop-down-1').click(function(e){		
				if ( $(this).parents('li').hasClass('has-sub') ){
					e.preventDefault();
					if($(this).hasClass('open-nav')){
						$(this).removeClass('open-nav');
						$(this).parents('li').children('ul.lve2-blog').slideUp('normal').removeClass('in');
					}else {
						$(this).addClass('open-nav');
						$(this).parents('li').children('ul.lve2-blog').slideDown('normal').addClass('in');
					}
				}else {

				}
			});

		});

		$(".news-menu  ul.navs li.active").parents('ul.children').addClass("in");
		</script>
	</div>