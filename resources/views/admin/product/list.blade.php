@extends('admin.master')
@section('content')
@php
	use App\ImgProduct;
@endphp
			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="{{route('admin')}}">Home</a>
							</li>

							<li>
								<a href="#">Quản lý sản phẩm</a>
							</li>
							<li class="active">Danh sách sản phẩm</li>
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
								Quản lý sản phảm
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Danh sách sản phẩm
								</small>
							</h1>

							<div style="height:10px;"></div>
							<input type="button" class="btn btn-info" value="Thêm sản phẩm" onclick="location.href='{{route('product.add')}}'">
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
										<div>
											<table id="dynamic-table" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th width="3%">ID</th>
														<th with= "30%">Hình ảnh</th>
														<th width="25%">Tên sản phẩm</th>
														<th width="5%">Tồn Kho</th>
														<th width="8%">Giá nhập</th>
														<th width="8%">Giá bán</th>
														<th width="5%">Khuyến mãi</th>
														<th width="5%">Nổi bật</th>
														<th width="8%">Thời gian cập nhật</th>
														<th width="5%">Action</th>
													</tr>
												</thead>

												<tbody>
													@foreach($product as $all)
														@php
															$img = ImgProduct::where('product_id', $all->id)->first();
														@endphp	
													<tr>
														<td>{{$all->id}}</td>
														<td><img src="{{asset('storage/app/'.$img->images)}}" width="40%" /></td>
														<td>
															<a href="{{route('blogs')}}/readmore/{{$all->id}}/{{$all->title_ascii}}.html" target="_blank">{{$all->name}}</a>
														</td>
														<td>@if($all->inventory == 0) <b><font color="red">Hết hàng</font></b> @else {!!$all->inventory!!} @endif</td>
														<td>{{number_format($all->price_import)}} VNĐ</td>
														<td>
															{{number_format($all->price)}} VNĐ
														</td>
														<td>{{ $all->promotion }}</td>
														<td>{{ $all->highlights }}</td>
														<td>
															{{$all->updated_at}}
														</td>
														<td>
															<div class="hidden-sm hidden-xs action-buttons">

																<a class="green" href="{{route('admin')}}/news/edit/{{$all->id}}">
																	<i class="ace-icon fa fa-pencil bigger-130"></i>
																</a>

																<a class="red" data-toggle="confirm" href="{{route('admin')}}/news/delete/{{$all->id}}">
																	<i class="ace-icon fa fa-trash-o bigger-130"></i>
																</a>
															</div>
														</td>
													</tr>
													@endforeach

													
												</tbody>
											</table>

											{{$product->links()}}
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