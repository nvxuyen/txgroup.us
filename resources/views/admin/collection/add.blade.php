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
								<a href="{{route('trang-chu')}}">Home</a>
							</li>

							<li>
								<a href="#">Quản lý danh mục</a>
							</li>
							<li class="active">Thêm danh mục</li>
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
								Thêm danh mục

							</h1>
						</div><!-- /.page-header -->
						<style type="text/css">
							.col-sm-3 {
    							width: 10%;
							}
						</style>
						<div class="row">
							<div class="col-xs-12">
								@if(count($errors) > 0)
								@foreach($errors->all() as $err)
									<div class="alert alert-warning">
									    <strong>Warning!</strong> {{$err}}
								 	 </div>
								@endforeach
								@endif
								
								@if(session('thongbao'))
								  <div class="alert alert-success">
								    <strong>Success!</strong> {{session('thongbao')}}.
								  </div>
							  @endif

								<!-- PAGE CONTENT BEGINS -->
								<form class="form-horizontal" role="form" action="{{route('collection.add')}}" method="POST">
									<input type="hidden" name="_token" value="{{csrf_token()}}">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Tên chuyên mục </label>

										<div class="col-sm-9">
											<input type="text" name="name" value="" class="col-xs-10 col-sm-5" />
										</div>
									</div>
									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Chọn danh mục cha </label>

										<div class="col-sm-9">
											<select name="parent" id="parent">
												<option value="0">---Không chọn---</option>
												@foreach($col as $c)
												<option value="{{$c->id}}" @if(isset($id)) @if($id == $c->id) selected @endif @endif>{{$c->position}} - {{$c->name}}</option>
												@php 
													$col_parent1 = Collection::where('parent', $c->id)->orderBy('position','ASC')->get();
												@endphp
												@if(count($col_parent1) > 0)
													@foreach($col_parent1 as $col1)
														<option value="{{$col1->id}}" @if(isset($id)) @if($id == $col1->id) selected @endif @endif>---{{$col1->position}} - {{$col1->name}}</option>
														@php 
															$col_parent2 = Collection::where('parent', $col1->id)->orderBy('position','ASC')->get();
														@endphp 
														@if(count($col_parent2) > 0)
															@foreach($col_parent2 as $col2)
																<option value="{{$col2->id}}" disabled="disabled">------{{$col2->position}} - {{$col2->name}}</option>
															@endforeach
														@endif
													@endforeach
												@endif
												@endforeach
											</select>
										</div>
									</div>
									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Mô tả </label>

										<div class="col-sm-9">
											<textarea name="des" id="des" cols="10" rows="10" style="margin: 0px; width: 835px; height: 83px;"></textarea>
										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Thứ tự hiển thị </label>

										<div class="col-sm-9">
											<input type="text" style="width: 3%;" name="position" value="{{isset($order_num) ? $order_num : ''}}" class="col-xs-10 col-sm-5" />
										</div>
									</div>

									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<button class="btn btn-info" type="submit">
												<i class="ace-icon fa fa-check bigger-110"></i>
												Thêm
											</button>

											&nbsp; &nbsp; &nbsp;
											<button class="btn" type="reset">
												<i class="ace-icon fa fa-undo bigger-110"></i>
												Làm mới
											</button>
										</div>
									</div>
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

@endsection

@section('script-head')
<script src="public/assets_admin/js/ckeditor/ckeditor.js" type="text/javascript"></script>
@endsection