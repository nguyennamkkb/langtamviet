@extends('layouts.admin')
@section('title')Create Slide | Slide @endsection
@section('muc')Thêm mới Tác phẩm @endsection
@section('table-content')

		<div class="panel panel-default">
			{!! Form::open(['method'=>'post','url'=>'ltvadmin/slide','files'=>true])!!}
			@include('slide.form')
			{!!Form::close()!!}
		</div>
	</div>
	
</div>

@endsection
