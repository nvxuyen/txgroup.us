@extends('admin.master')
@section('content')

			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="{{route('trang-chu')}}">Home</a>
							</li>

							<li>
								<a href="#">Cài đặt Slider</a>
							</li>
							<li class="active">Thêm Slider</li>
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
								Thêm Slider

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
								<form class="form-horizontal" role="form" action="{{route('adm.slider.add')}}" method="POST" enctype="multipart/form-data">
									<input type="hidden" name="_token" value="{{csrf_token()}}">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Hiển thị </label>

										<div class="col-sm-9">
											<input type="checkbox" name="enable" value="1" class="col-xs-10 col-sm-5" checked style="width:5%;margin-top:10px;" />
										</div>
									</div>
									<div class="space-4"></div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Hình ảnh </label>

										<div class="col-sm-9">
											<input type="file" id="uploadFile" name="photos" class="col-xs-10 col-sm-5" />
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
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Liên kết </label>

										<div class="col-sm-9">
											<input type="text" name="link" value="http://example.com/xyz" class="col-xs-10 col-sm-5" />
										</div>
									</div>
									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Thẻ ALT</label>

										<div class="col-sm-9">
											<input type="text" name="alt" value="" class="col-xs-10 col-sm-5" />
										</div>
									</div>
									<div class="space-4"></div>

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
