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
								<a href="#">Quản lý sản phẩm</a>
							</li>
							<li class="active">Thêm sản phẩm</li>
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
								Thêm sản phẩm

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
								<!-- PAGE CONTENT BEGINS -->
								<form class="form-horizontal" role="form" action="{{route('product.add')}}" method="POST" enctype="multipart/form-data">
									<input type="hidden" name="_token" value="{{csrf_token()}}">

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nổi bật </label>

										<div class="col-sm-9">
											<input type="checkbox" name="highlights" value="1" class="col-xs-10 col-sm-5" style="width:5%;padding-top:5px;" />
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Tên sản phẩm </label>

										<div class="col-sm-9">
											<input type="text" name="name" value="" class="col-xs-10 col-sm-5" />
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Số lượng trong kho </label>

										<div class="col-sm-9">
											<input type="number" min="0" name="inventory" value="" class="col-xs-10 col-sm-5" style="width:5%;" />
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Giá nhập </label>

										<div class="col-sm-9">
											<input type="number" min="0"name="price_import" value="" class="col-xs-10 col-sm-5" style="width:15%;" />
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Giá bán </label>

										<div class="col-sm-9">
											<input type="number" min="0"name="price" value="" class="col-xs-10 col-sm-5" style="width:15%;" />
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Khuyến mãi </label>

										<div class="col-sm-9">
											<input type="number" name="promotion" min="0" max="100" value="0" class="col-xs-10 col-sm-5" style="width:5%;" /> %
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Danh mục </label>

										<div class="col-sm-9">
											<select class="col-xs-10 col-sm-5" id="col" name="col">
												@foreach($col as $c)
													<optgroup label="{{ $c->name }}">
														@php
															$col1 = Collection::where('parent', $c->id)->orderBy('position', 'ASC')->get();
														@endphp
														@foreach($col1 as $c1)
															<option value="{{ $c1->id }}">{{ $c1->name }}</option>
															@php
																$col2 = Collection::where('parent', $c1->id)->orderBy('position', 'ASC')->get();
															@endphp 
															@foreach($col2 as $c2)
															<option value="{{ $c2->id }}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;└──[{{ $c2->name }}]</option>
															@endforeach
														@endforeach
													</optgroup>
												@endforeach
											</select>
										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Hình ảnh </label>

										<div class="col-sm-9">
											<input type="file" id="uploadFile" name="photos[]" class="col-xs-10 col-sm-5" multiple />
										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"></label>

										<div class="col-sm-9">
											<div id="image_preview"></div>
										</div>
									</div>
									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Mô tả sản phẩm </label>
										<div class="col-sm-9">
								            <textarea name="content" id="content" rows="10" cols="80">
								                
								            </textarea>
								            <script>
								                // Replace the <textarea id="editor1"> with a CKEditor
								                // instance, using default configuration.
								                CKEDITOR.replace( 'content' );
								            </script>
										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Thẻ Tag </label>

										<div class="col-sm-9">
											<input type="text" placeholder="Mỗi thẻ cách nhau bởi dấu , không khoảng trắng" name="tags" class="col-xs-10 col-sm-5" />
										</div>
									</div>

									<div class="space-4"></div>


									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<button class="btn btn-info" type="submit">
												<i class="ace-icon fa fa-check bigger-110"></i>
												Đăng bài
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
  <style type="text/css">
    input[type=file]{
      display: inline;
    }
    #image_preview img{
      width: 200px;
      padding: 5px;
    }
  </style>

<script type="text/javascript">
  $("#uploadFile").change(function(){
     $('#image_preview').html("");
     var total_file=document.getElementById("uploadFile").files.length;


     for(var i=0;i<total_file;i++)
     {
      $('#image_preview').append("<img src='"+URL.createObjectURL(event.target.files[i])+"'>");
     }


  });
</script>
@endsection

@section('script-head')
<script src="public/assets_admin/js/ckeditor/ckeditor.js" type="text/javascript"></script>
@endsection