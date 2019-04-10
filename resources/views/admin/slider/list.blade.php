@extends('admin.master')
@section('content')
			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="{{route('admin')}}">Home</a>
							</li>

							<li>
								<a href="#">Cài đặt Slider</a>
							</li>
							<li class="active">Danh sách Slider</li>
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
								Cài đặt Slider
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Danh sách Slider
								</small>
							</h1>
						<div style="height:10px;"></div>
						<input type="button" class="btn btn-info" value="Thêm" onclick="location.href='{{route('adm.slider.add')}}'">
						<button class="btn" id="RemoveChoise" name="RemoveChoise"><i class="ace-icon fa fa-trash-o"></i>Xóa chọn</button>
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
														<th width="50%">Hình ảnh</th>
														<th width="12%">Đường dẫn</th>
														<th width="12%">Thẻ ALT</th>
														<th with="8%">Trạng thái</th>
														<th width="10%">
															Thao tác
														</th>
													</tr>
												</thead>

												<tbody>
													@foreach($slider as $all)
													<tr>
														<td>{{$all->id}}</td>

														<td>
															<img src="{{ asset('public/assets/images/slider') }}/{{ $all->image }}" width="60%"/>
														</td>
														<td>
															{{$all->link}}
														</td>
														<td>
															{{$all->alt}}
														</td>
														<td>
															<div class="hidden-sm hidden-xs action-buttons">
																@if($all->active != 0)
																Hiển thị
																@else
																Ẩn
																@endif
															</div>
														</td>
														<td>
															<div class="hidden-sm hidden-xs action-buttons">

																<a class="green" href="{{route('adm.slider.edit', ['id' => $all->id])}}">
																	<i class="ace-icon fa fa-pencil bigger-130"></i>
																</a>

																<a class="red" data-toggle="confirm" href="{{route('adm.slider.delete', ['id' => $all->id])}}">
																	<i class="ace-icon fa fa-trash-o bigger-130"></i>
																</a>
															</div>
														</td>
													</tr>
													@endforeach

													
												</tbody>
											</table>
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