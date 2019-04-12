@extends('layouts.admin')
@section('title')Edit Slide | Slide @endsection
@section('muc')Chinh sửa Thể loại ảnh @endsection
@section('table-content')
		<div class="panel panel-default">
			{!! Form::model($theloai,['method'=>'patch','url'=>['ltvadmin/theloaianh',$theloai->id],'files'=>true])!!}
			@include('theloaianh.form')
			{!!Form::close()!!}
		</div>
	</div>
	
</div>
@endsection
