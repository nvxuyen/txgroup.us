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
<table cellpadding="4" cellspacing="0" border="0" align="center" width="90%" style="border-collapse:separate" class="table table-striped table-bordered table-hover" id="cpform_table">
<tbody>
<tr>
	<th align="center" colspan="4">
			<b>Quản lý danh mục sản phẩm</b>
	</th>
</tr>
<tr valign="top">
	<td class="alt1" colspan="4">Nếu bạn thay đổi thứ tự hiển thị, vui lòng thay đổi bằng nút 'Lưu thứ tự hiển thị' ở cuối trang</td>
</tr>
@foreach($col_parent0 as $col0)
<tr valign="top" align="center">
	<td class="thead" align="left">Tên chuyên mục</td>
	<td class="thead">Điều khiển</td>
	<td class="thead">Thứ tự hiển thị</td>
</tr>

<tr valign="top" align="center">
	<td class="alt2" align="left"><a name="forum1">&nbsp;</a> <b><a href="forum.php?do=edit&amp;f=1">{{$col0->name}}</a> </b></td>
	<td class="alt2">
	<form role="form" action="{{route('collection.control')}}" method="GET">
		<select name="f1" class="bginput" style="width:30%">
			<option value="edit">Sửa chuyên mục</option>
			<option value="view">Xem chuyên mục</option>
			<option value="remove">Xóa chuyên mục</option>
			<option value="add">Thêm chuyên mục con</option>
		</select>
				<input type="hidden" name="colid" value="{{$col0->id}}">
		<input type="submit" class="button" value="Đến">
	</form>
	</td>
	<td class="alt2">
		<input type="text" class="bginput" name="order[1]" value="{{$col0->position}}" tabindex="1" size="3" title="Thay đổi thứ tự hiển thị">
	</td>
</tr>
@php 
	$col_parent1 = Collection::where('parent','=',$col0->id)->orderBy('position', 'ASC')->get();
@endphp 
@if(count($col_parent1)>0)
	@foreach($col_parent1 as $col1)
		<tr valign="top" align="center">
			<td class="alt2" align="left"><a name="forum1">&nbsp;</a> <b><a href="forum.php?do=edit&amp;f=1">---{{$col1->name}}</a> </b></td>
			<td class="alt2">
			<form role="form" action="{{route('collection.control')}}" method="GET">
				<select name="f1" class="bginput" style="width:30%">
					<option value="edit">Sửa chuyên mục</option>
					<option value="view">Xem chuyên mục</option>
					<option value="remove">Xóa chuyên mục</option>
					<option value="add">Thêm chuyên mục con</option>
				</select>
						<input type="hidden" name="colid" value="{{$col1->id}}">
				<input type="submit" class="button" value="Đến">
			</form>
			</td>
			<td class="alt2">
				<input type="text" class="bginput" name="order[1]" value="{{$col1->position}}" tabindex="1" size="3" title="Thay đổi thứ tự hiển thị">
			</td>
		</tr>

		@php 
			$col_parent2 = Collection::where('parent','=', $col1->id)->orderBy('position', 'ASC')->get();
		@endphp
		@if(count($col_parent2)>0)
		    @foreach($col_parent2 as $col2)
				<tr valign="top" align="center">
					<td class="alt2" align="left"><a name="forum1">&nbsp;</a> <b><a href="forum.php?do=edit&amp;f=1">------{{$col2->name}}</a> </b></td>
					<td class="alt2">
					<form role="form" action="{{route('collection.control')}}" method="GET">
						<select name="f1" class="bginput" style="width:30%">
							<option value="edit">Sửa chuyên mục</option>
							<option value="view">Xem chuyên mục</option>
							<option value="remove">Xóa chuyên mục</option>
						</select>
								<input type="hidden" name="colid" value="{{$col2->id}}">
						<input type="submit" class="button" value="Đến">
					</form>
					</td>
					<td class="alt2">
						<input type="text" class="bginput" name="order[1]" value="{{$col2->position}}" tabindex="1" size="3" title="Thay đổi thứ tự hiển thị">
					</td>
				</tr>
			@endforeach
		@endif
	@endforeach
@endif

@endforeach

<tr>
	<td class="tfoot" colspan="4" align="center">
		<input type="submit" class="btn btn-info" tabindex="1" value="Lưu thứ tự hiển thị" accesskey="s"> 
		<input type="button" class="btn btn-info" value="Thêm chuyên mục mới" title="" tabindex="1" onclick="window.location='{{route('collection.add')}}';"> 
	</td>
</tr>
</tbody></table>
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