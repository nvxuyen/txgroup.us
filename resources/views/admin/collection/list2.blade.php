@extends('admin.master')
@section('content')
<?php
	use App\Collection;
?>
			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="{{route('admin')}}">Home</a>
							</li>

							<li>
								<a href="#">Quản lý danh mục sản phẩm</a>
							</li>
							<li class="active">Danh mục sản phẩm</li>
						</ul><!-- /.breadcrumb -->

						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- /.nav-search -->
					</div>

					<div class="page-content">
						@include('admin.layout.settings_layout')

						<div class="page-header">
							<h1>
								Quản lý danh mục sản phẩm
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Danh mục sản phẩm
								</small>
							</h1>
						</div><!-- /.page-header -->
						@if(count($errors) > 0)
						@foreach($errors->all() as $err)
							<div class="alert alert-warning">
							    <strong>Cảnh báo!</strong> {{$err}}
						 	 </div>
						@endforeach
						@endif
						
						@if(session('thongbao'))
						  <div class="alert alert-success">
						    <strong>Thành công!</strong> {{session('thongbao')}}.
						  </div>
					  	@endif
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

								<div class="row">
									<div class="col-xs-12">

										<!-- div.table-responsive -->

										<!-- div.dataTables_borderWrap -->
<div class="col-sm-6">
										<div class="widget-box widget-color-green2">
											<div class="widget-header">
												<h4 class="widget-title lighter smaller">
													Danh mục sản phẩm
												</h4>
											</div>

<div class="widget-body">
    <div class="widget-main padding-8">
        <ul id="tree2" class="tree tree-unselectable tree-folder-select" role="tree">
            <li class="tree-branch hide" data-template="treebranch" role="treeitem" aria-expanded="false">
                <i class="icon-caret ace-icon tree-plus"></i>&nbsp;				
                <div class="tree-branch-header">					
                	<span class="tree-branch-name">						
                		<i class="icon-folder ace-icon fa fa-folder"></i>						
                		<span class="tree-label"></span>					
                	</span>				
                </div>
                <ul class="tree-branch-children" role="group"></ul>
                <div class="tree-loader hidden" role="alert">
                    <div class="tree-loading"><i class="ace-icon fa fa-refresh fa-spin blue"></i></div>
                </div>
            </li>
            <li class="tree-item hide" data-template="treeitem" role="treeitem">				
            	<span class="tree-item-name">				  				  
            		<span class="tree-label"></span>				
            	</span>			
            </li>
            @foreach($col_parent0 as $col0)
	            <li class="tree-branch tree-open" role="treeitem" aria-expanded="true">			
	                <div class="tree-branch-header">					
	                	<span class="tree-branch-name">						
	                	<i class="icon-folder red ace-icon fa fa-folder-open"></i>						
	                	<span class="tree-label">{{$col0->name}}</span>					
	                </span>				
	            </div>
	            @php 
	            	$col_parent1 = Collection::where('parent','=',$col0->id)->orderBy('position', 'ASC')->get();
	            @endphp 
	            @if(count($col_parent1)>0)
	            	@foreach($col_parent1 as $col1)
			             <ul class="tree-branch-children" role="group">
			                    <li class="tree-branch tree-open" role="treeitem" aria-expanded="true">				
			                        <div class="tree-branch-header">					
				                        <span class="tree-branch-name">						
				                        	<i class="icon-folder pink ace-icon fa fa-folder-open"></i>						
				                        	<span class="tree-label">{{$col1->name}}</span>					
				                        </span>				
			                    </div>

			                    @php 
			                    	$col_parent2 = Collection::where('parent','=', $col1->id)->orderBy('position', 'ASC')->get();
			                    @endphp
			                    @if(count($col_parent2)>0)
				                    @foreach($col_parent2 as $col2)
										<ul class="tree-branch-children" role="group">
											<li class="tree-item" role="treeitem">				
												<span class="tree-item-name">				  				  
													<span class="tree-label">
													<i class="icon-folder pink ace-icon fa fa-folder-open"></i>	</i>&nbsp {{$col2->name}}</span>				
												</span>			
											</li>
										</ul>
									@endforeach
			                    @endif
			                    </li>
			                </ul>
			        @endforeach
	            @endif
	        </li>
            @endforeach
        </ul>
    </div>
</div>
										</div>
									</div>
									</div>
								</div>

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
@endsection

@section('script-1')
    <script src="public/assets_admin/js/bootbox.js"></script>
    <script>
		$(document).on("click", "[data-toggle=\"confirm\"]", function (e) {
		    e.preventDefault();
		    var lHref = $(this).attr('href');
		    var lText = this.attributes.getNamedItem("data-title") ? this.attributes.getNamedItem("data-title").value : "Bạn có chắc chắn muốn xóa?"; // If data-title is not set use default text
		    bootbox.confirm(lText, function (confirmed) {
		        if (confirmed) {
		            //window.location.replace(lHref); // similar behavior as an HTTP redirect (DOESN'T increment browser history)
		            window.location.href = lHref; // similar behavior as clicking on a link (Increments browser history)
		        }
		    });
		});
    </script>
@endsection