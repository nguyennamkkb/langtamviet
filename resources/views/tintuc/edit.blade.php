@extends('layouts.admin')
@section('title')Edit Tin tức | Tin tức @endsection
@section('muc')Chinh sửa Tin tức @endsection
@section('table-content')
		<div class="panel panel-default">
			{!! Form::model($tintuc,['method'=>'patch','url'=>['ltvadmin/tintuc',$tintuc->id],'files'=>true])!!}
			@include('tintuc.form')
			{!!Form::close()!!}
		</div>
	</div>
	
</div>
@endsection
