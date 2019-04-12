@extends('layouts.admin')
@section('title')Create Slide | Slide @endsection
@section('muc')Thêm mới thể loại ảnh @endsection
@section('table-content')

		<div class="panel panel-default">
			{!! Form::open(['method'=>'post','url'=>'ltvadmin/theloaianh','files'=>true])!!}
			@include('theloaianh.form')
			{!!Form::close()!!}
		</div>
	</div>
	
</div>

@endsection
