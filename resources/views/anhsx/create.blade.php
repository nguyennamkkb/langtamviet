@extends('layouts.admin')
@section('title')Create Image | Image @endsection
@section('muc')Thêm mới ảnh sản xuất @endsection
@section('table-content')

		<div class="panel panel-default">
			{!! Form::open(['method'=>'post','url'=>'ltvadmin/anhsx','files'=>true])!!}
			@include('anhsx.form')
			{!!Form::close()!!}
		</div>
	</div>
	
</div>

@endsection
