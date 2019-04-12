
@extends('layouts.admin')

@section('success') 
@if(Session::has('succcess'))
<div class="alert alert-success">
	<strong>Success!</strong>{{Session::get('succcess')}} 
</div>
@endif         
@endsection
@section('title')Dashboard |Ảnh sản xuất - Langtamviet @endsection
@section('muc')Quản lý Ảnh sản xuất @endsection
@section('add') <a href="{{ url("ltvadmin/anhsx/create")}}"><button type="button" class="btn btn-default btn-sm">
	<span class="glyphicon glyphicon-new-window"></span> Thêm mới
</button>
</a>  
@endsection



@section('table-content')
<table class="table text-center">
	<thead class="text-uppercase bg-light">
		<tr>
			<th scope="col">STT</th>
			<th scope="col">Hình ảnh</th>
			<th scope="col">Tiêu đề chính</th>
			<th scope="col">Tiêu đề phụ</th>
			<th scope="col">Loại ảnh</th>
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
			<td><img src="{{ url('uploads/anhsx/'.$key->fileanh)}}" style="height: 200px"></td>
			<td>{{$key->tenanh}}</td>
			<td>{{$key->tieudephu}}</td>
			<td>{{$key->loaianh->tentheloai}}</td>
			<td>
				<a href="{!! url('ltvadmin/anhsx/'.$key->id.'/edit')!!}"> 
					<button type="button" class="btn btn-default btn-sm">
						<i class="fa fa-edit"></i>
					</button>
				</a>

			</td>
			<td>
				{!! Form::open(['method'=>'delete','url'=>['ltvadmin/anhsx',$key->id]]) !!}
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



