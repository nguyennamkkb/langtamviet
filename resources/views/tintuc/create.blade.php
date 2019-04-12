@extends('layouts.admin')
@section('title')Create Tin Tức | Tin Tức @endsection
@section('muc')Thêm mới Tin Tức @endsection
@section('table-content')

		<div class="panel panel-default">
			{!! Form::open(['method'=>'post','url'=>'ltvadmin/tintuc','files'=>true])!!}
			@include('tintuc.form')
			{!!Form::close()!!}
		</div>
	</div>
	
</div>

@endsection
