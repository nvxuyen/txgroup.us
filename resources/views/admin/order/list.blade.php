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
								<a href="#">Quản lý đơn hàng</a>
							</li>
							<li class="active">Danh sách đơn hàng</li>
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
								Quản lý đơn hàng
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Danh sách đơn hàng
								</small>
							</h1>

							<div style="height:10px;"></div>
							<input type="button" class="btn btn-info" value="Thêm đơn hàng" onclick="location.href='{{route('product.add')}}'">
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
														<th width="3%">#</th>
														<th width="10%">Thời gian đặt</th>
														<th width="15%">Trạng thái đơn hàng</th>
														<th width="10%">Hình thức thanh toán</th>
														<th width="10%">Tổng tiền</th>
														<th width="5%">Action</th>
													</tr>
												</thead>

												<tbody>
													@foreach($order as $orders)
													<tr>
														<td><a href="{{ route('account.order',['code' => $orders->code]) }}" target="_blank" >#{{ $orders->id }}</a></td>
														<td>{{ $orders->create_at }}</td>
														<td>
															<select data-role="status" data-id="{{ $orders->id }}" name="status" id="status">
																<option value="0" @if ($orders->status == 0) selected @endif>Chờ xử lý</option>
																<option value="1" @if ($orders->status == 1) selected @endif>Đang xử lý</option>
																<option value="2" @if ($orders->status == 2) selected @endif>Đang giao hàng</option>
																<option value="3" @if ($orders->status == 3) selected @endif>Đã giao hàng</option>
																<option value="4" @if ($orders->status == 4) selected @endif>Đã hủy</option>
															</select>
														</td>
														<td>{{ $orders->payment }}</td>
														<td>{{ $orders->total_prices }} VND</td>

														<td>
															<div class="hidden-sm hidden-xs action-buttons">

																<a class="green" href="">
																	<i class="ace-icon fa fa-pencil bigger-130"></i>
																</a>

																<a class="red" data-toggle="confirm" href="">
																	<i class="ace-icon fa fa-trash-o bigger-130"></i>
																</a>
															</div>
														</td>
													</tr>
													@endforeach
															
													<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">	
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

	$(document).ready(function(){
		$(document).on('change', 'select[data-role=status]', function(){
			var id = $(this).data('id');
			var status = this.value;
			var token = $('#token').val();
				$.ajax({
					url 	: '{{ route('order.update') }}',
					method 	: 'POST',
					data 	: {
						"_token" : token,
						"id"	 : id,
						"status" : status
					},
					success : function(response){
						alert(response);
					}
				});
		});
	});
</script>
@endsection