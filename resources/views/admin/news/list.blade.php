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
								<a href="#">Quản lý tin</a>
							</li>
							<li class="active">Danh sách tin</li>
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
								Quản lý tin
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Danh sách tin
								</small>
							</h1>
							<div style="height:10px;"></div>
							<input type="button" class="btn btn-info" value="Thêm" onclick="location.href='{{route('news.add')}}'">
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
														<th width="45%">Tiêu đề</th>
														<th width="35%">Hình ảnh</th>
														<th width="12%">Thời gian đăng</th>
														<th width="8%">Thao tác</th>
														<th width="5%"><input type="checkbox" name="Check" id="Check" onClick="toggle(this)"></th>
													</tr>
												</thead>

												<tbody>
													@foreach($allnews as $all)
													<tr>
														<td>{{$all->id}}</td>

														<td>
															<a href="{{route('blogs')}}/readmore/{{$all->id}}/{{$all->title_ascii}}.html" target="_blank"><b>{{$all->title}}</b></a>
														</td>
														<td><img src="{{$all->image}}" width="30%" /></td>
														<td>
															{{$all->create_at}}
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
														<td><input type="checkbox" name="choise" id="choise" value="{{$all->id}}"></td>
													</tr>
													@endforeach

													
												</tbody>
											</table>

											{{$allnews->links()}}
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

	function toggle(source) {
	  checkboxes = document.getElementsByName('choise');
	  for(var i=0, n=checkboxes.length;i<n;i++) {
	    checkboxes[i].checked = source.checked;
	  }
	}
	$("#RemoveChoise").click(function(){
		var listid="";
		$("input[name='choise']").each(function(){
			if (this.checked) listid = listid+","+this.value;
			})
		listid=listid.substr(1);	 //alert(listid);
		if (listid=="") { alert("Bạn chưa chọn mục nào"); return false;}
		quest= confirm("Bạn có chắc chắn muốn xóa?");
		if (quest==true) document.location = "{{route('news.delete')}}?listid=" + listid;
	});
</script>
@endsection