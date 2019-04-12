@extends('layouts.admin')
@section('title')Edit Loại Tin | Loại tin @endsection
@section('muc')Chinh sửa Thể loại tin @endsection
@section('table-content')
		<div class="panel panel-default">
			{!! Form::model($loaitin,['method'=>'patch','url'=>['ltvadmin/loaitin',$loaitin->id],'files'=>true])!!}
			@include('loaitin.form')
			{!!Form::close()!!}
		</div>
	</div>
	
</div>
@endsection
