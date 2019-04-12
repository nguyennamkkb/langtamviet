@extends('layouts.admin')
@section('title')Edit Slide | Slide @endsection
@section('muc')Chinh sửa ảnh slide @endsection
@section('table-content')
		<div class="panel panel-default">
			{!! Form::model($slide,['method'=>'patch','url'=>['ltvadmin/slide',$slide->id],'files'=>true])!!}
			@include('slide.form')
			{!!Form::close()!!}
		</div>
	</div>
	
</div>
@endsection
