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
								<a href="#">Cài đặt trang</a>
							</li>
							<li class="active">Cài đặt trang</li>
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
								Cài đặt bảo trì Website
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
								<form class="form-horizontal" role="form" action="{{route('adm.settings')}}" method="POST">
									<input type="hidden" name="_token" value="{{csrf_token()}}">

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Bảo trì </label>

										<div class="col-sm-9">
											<select name="maintance">
												<option value="0" @if ($set->maintance == 0) selected @endif>Tắt</option>
												<option value="1" @if ($set->maintance != 0) selected @endif>Bật</option>
											</select>
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nội dung bảo trì </label>

										<div class="col-sm-9">
											<textarea rows="4" class="form-control" name="maintance_notice" placeholder="Nhập nội dung thông báo bảo trì">{{$set->maintance_notice}}</textarea>
										</div>
									</div>

						<div class="page-header">
							<h1>
								Cài đặt thông tin Công Ty

							</h1>
						</div><!-- /.page-header -->

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Tên miền </label>

										<div class="col-sm-9">
											<input type="text" name="domain" value="{{$set->domain}}" class="col-xs-10 col-sm-5" />
										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Tên công ty </label>

										<div class="col-sm-9">
											<input type="text" name="company_name" value="{{$set->company_name}}" class="col-xs-10 col-sm-5" />
										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Địa chỉ</label>

										<div class="col-sm-9">
											<input type="text" name="address" value="{{$set->address}}" class="col-xs-10 col-sm-5" />
										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Địa chỉ Email</label>

										<div class="col-sm-9">
											<input type="text" name="email" value="{{$set->email}}" class="col-xs-10 col-sm-5" />
										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Skype</label>

										<div class="col-sm-9">
											<input type="text" name="skype" value="{{$set->skype}}" class="col-xs-10 col-sm-5" />
										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Hotline</label>

										<div class="col-sm-9">
											<input type="text" name="hotline1" value="{{$set->hotline1}}" class="col-xs-10 col-sm-5" />
										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Hotline Kinh Doanh</label>

										<div class="col-sm-9">
											<input type="text" name="hotline2" value="{{$set->hotline2}}" class="col-xs-10 col-sm-5" />
										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Hotline Kỹ Thuật</label>

										<div class="col-sm-9">
											<input type="text" name="hotline3" value="{{$set->hotline3}}" class="col-xs-10 col-sm-5" />
										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Hotline Bảo Hành</label>

										<div class="col-sm-9">
											<input type="text" name="hotline4" value="{{$set->hotline4}}" class="col-xs-10 col-sm-5" />
										</div>
									</div>


									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Fanpage</label>

										<div class="col-sm-9">
											<input type="text" name="fanpage" value="{{$set->fanpage}}" class="col-xs-10 col-sm-5" />
										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Copyright</label>

										<div class="col-sm-9">
											<textarea rows="4" class="form-control" name="copyright" placeholder="Nhập nội dung Copyright">{{$set->copyright}}</textarea>
										</div>
									</div>

						<div class="page-header">
							<h1>
								Cài đặt SEO

							</h1>
						</div><!-- /.page-header -->

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Tiêu đề </label>

										<div class="col-sm-9">
											<input type="text" name="title" placeholder="Nhập tiêu đề website" value="{{$set->title}}" class="col-xs-10 col-sm-5" />
										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Description</label>

										<div class="col-sm-9">
											<textarea rows="4" class="form-control" name="description" placeholder="Nhập description,độ dài từ 60-170 ký tự (Quan trọng). ">{{$set->description}}</textarea>
										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Keywords</label>

										<div class="col-sm-9">
											<textarea rows="4" class="form-control" name="keywords" placeholder="Nhập keywords,các từ hay cụm từ liên quan">{{$set->keywords}}</textarea>
										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Code Thêm trên thẻ /head</label>

										<div class="col-sm-9">
											<textarea rows="8" class="form-control" name="codeinhead" placeholder="Nhập thêm các code muốn thêm vào website đặt trong thẻ head">{{$set->codeinhead}}</textarea>
										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Code Thêm trên thẻ /body</label>

										<div class="col-sm-9">
											<textarea rows="8" class="form-control" name="codeinbody" placeholder="Nhập thêm các code muốn thêm vào website đặt trong thẻ /body">{{$set->codeinbody}}</textarea>
										</div>
									</div>


									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<button class="btn btn-info" type="submit">
												<i class="ace-icon fa fa-check bigger-110"></i>
												Lưu thiết lập
											</button>

											&nbsp; &nbsp; &nbsp;
											<button class="btn" type="reset">
												<i class="ace-icon fa fa-undo bigger-110"></i>
												Làm mới
											</button>
										</div>
									</div>
								</form>
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
@endsection