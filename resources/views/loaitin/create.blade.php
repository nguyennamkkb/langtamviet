@extends('layouts.admin')
@section('title')Create Loại tin | Loại tin @endsection
@section('muc')Thêm mới thể loại tin @endsection
@section('table-content')

		<div class="panel panel-default">
			{!! Form::open(['method'=>'post','url'=>'ltvadmin/loaitin','files'=>true])!!}
			@include('loaitin.form')
			{!!Form::close()!!}
		</div>
	</div>
	
</div>

@endsection
