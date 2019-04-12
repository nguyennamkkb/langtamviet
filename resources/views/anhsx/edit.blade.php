@extends('layouts.admin')
@section('title')Edit Ảnh sản xuất | Image @endsection
@section('muc')Chinh sửa ảnh sản xuất @endsection
@section('table-content')
		<div class="panel panel-default">
			{!! Form::model($anhsx,['method'=>'patch','url'=>['ltvadmin/anhsx',$anhsx->id],'files'=>true])!!}
			@include('anhsx.form')
			{!!Form::close()!!}
		</div>
	</div>
	
</div>
@endsection
