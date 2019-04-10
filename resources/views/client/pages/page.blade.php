@extends('client.master')
@section('sidebar')
@include('client.layout.sidebar')
@endsection
@section('banner')
@include('client.layout.banner')
@endsection
@section('content')
<div class="col-md-9" id="layout-page">
		<span class="header-page clearfix">
			 <h1>{{$data->name}}</h1>
		</span>

		<div class="content-page">
			{!!$data->content!!}
		</div>
  </div>
@endsection