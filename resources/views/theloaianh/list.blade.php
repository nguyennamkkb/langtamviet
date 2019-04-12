
@extends('layouts.admin')

@section('success') 
@if(Session::has('succcess'))
<div class="alert alert-success">
	<strong>Success!</strong>{{Session::get('succcess')}} 
</div>
@endif         
@endsection
@section('title')Dashboard | Thể loại ảnh - Langtamviet @endsection
@section('muc')Quản lý Thể loại ảnh @endsection
@section('add') <a href="{{ url("ltvadmin/theloaianh/create")}}"><button type="button" class="btn btn-default btn-sm">
	<span class="glyphicon glyphicon-new-window"></span> Thêm mới
</button>
</a>  
@endsection



@section('table-content')
<table class="table text-center">
	<thead class="text-uppercase bg-light">
		<tr>
			<th scope="col">STT</th>
			<th scope="col">Tên thể loại</th>
			<th scope="col">Tên không dấu</th>
			<th scope="col" colspan="2">action</th>
		</tr>
	</thead>
	<tbody>
		@if(isset($list))
		@php
		$stt=0;
		@endphp
		@foreach($list as $key)
		<tr>
			<th scope="row">{{$stt ++}}</th>
			<td>{{$key->tentheloai}}</td>
			<td>{{$key->tenkhongdau}}</td>
			<td>
				<a href="{!! url('ltvadmin/theloaianh/'.$key->id.'/edit')!!}"> 
					<button type="button" class="btn btn-default btn-sm">
						<i class="fa fa-edit"></i>
					</button>
				</a>

			</td>
			<td>
				{!! Form::open(['method'=>'delete','url'=>['ltvadmin/theloaianh',$key->id]]) !!}
				<button type="submit" onclick="return confirm('Are you sure!')" class="btn btn-danger btn-sm">
					<span class="ti-trash"></span>
				</button>
				{!! Form::close() !!}
			</td>
		</tr>
		@endforeach
		@endif
		
	</tbody>
</table>
@endsection



