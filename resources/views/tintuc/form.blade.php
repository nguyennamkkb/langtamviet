{{-- tieude --}}
{!!Form::label('Tiêu đề chính',null,['class'=>'col-md-2 control-label'])!!}
<div class="col-md-10">
	{!!Form::text('tieude',null,['class'=>'form-control'])!!}
</div>
</div>
{!! $errors->first('name','<p style="color:#761b18;">:message</p>') !!} 
<br>

{{-- tóm tắt --}}
<div class="form-group">
	{!!Form::label('Tóm tắt',null,['class'=>'col-md-2 control-label'])!!}
	<div class="col-md-10">
		{!!Form::text('tomtat',null,['class'=>'form-control'])!!}
	</div>
</div>
{!! $errors->first('subname','<p style="color:#761b18;">:message</p>') !!} 
<br>
{{-- nội dung đầu --}}
{{-- hình ảnh 1 --}}
<div class="form-group">
	{!!Form::label('Hình thứ nhất',null,['class'=>'col-md-2 control-label'])!!}
	<div class="col-md-10">
			{!! Form::file('hinhanh1', ['class'=>'form-control-file border border-primary']) !!}
	</div>
</div>
<br>
<div class="form-group">
	{!!Form::label('Nội dung hình 1',null,['class'=>'col-md-2 control-label'])!!}
	<div class="col-md-10">
		{!! Form::textarea('motahinhanh1', null, ['class'=>'ckeditor']) !!}
	</div>
</div>
{!! $errors->first('subname','<p style="color:#761b18;">:message</p>') !!} 
<br>

{{-- hình ảnh 2 --}}
<div class="form-group">
	{!!Form::label('Hình thứ hai',null,['class'=>'col-md-2 control-label'])!!}
	<div class="col-md-10">
			{!! Form::file('hinhanh2', ['class'=>'form-control-file border border-primary']) !!}
	</div>
</div>
<br>
<div class="form-group">
	{!!Form::label('Nội dung hình 2',null,['class'=>'col-md-2 control-label'])!!}
	<div class="col-md-10">
		
		{!! Form::textarea('motahinhanh2', null, ['class'=>'ckeditor']) !!}
	</div>
</div>
{!! $errors->first('subname','<p style="color:#761b18;">:message</p>') !!} 
<br>
{{-- hình ảnh 3 --}}
<div class="form-group">
	{!!Form::label('Hình thứ ba',null,['class'=>'col-md-2 control-label'])!!}
	<div class="col-md-10">
			{!! Form::file('hinhanh3', ['class'=>'form-control-file border border-primary']) !!}
	</div>
</div>
<br>
<div class="form-group">
	{!!Form::label('Nội dung hình 3',null,['class'=>'col-md-2 control-label'])!!}
	<div class="col-md-10">
		
		{!! Form::textarea('motahinhanh3', null, ['class'=>'ckeditor']) !!}
	</div>
</div>
{!! $errors->first('subname','<p style="color:#761b18;">:message</p>') !!} 
<br>

{{-- hình ảnh 4 --}}
<div class="form-group">
	{!!Form::label('Hình thứ Tư',null,['class'=>'col-md-2 control-label'])!!}
	<div class="col-md-10">
			{!! Form::file('hinhanh4', ['class'=>'form-control-file border border-primary']) !!}
	</div>
</div>
<br>
<div class="form-group">
	{!!Form::label('Nội dung hình 4',null,['class'=>'col-md-2 control-label'])!!}
	<div class="col-md-10">
		
		{!! Form::textarea('motahinhanh4', null, ['class'=>'ckeditor']) !!}
	</div>
</div>
{!! $errors->first('subname','<p style="color:#761b18;">:message</p>') !!} 
<br>

{{-- hình ảnh 5 --}}
<div class="form-group">
	{!!Form::label('Hình thứ Năm',null,['class'=>'col-md-2 control-label'])!!}
	<div class="col-md-10">
			{!! Form::file('hinhanh5', ['class'=>'form-control-file border border-primary']) !!}
	</div>
</div>
<br>
<div class="form-group">
	{!!Form::label('Nội dung hình năm',null,['class'=>'col-md-2 control-label'])!!}
	<div class="col-md-10">
		
		{!! Form::textarea('motahinhanh5', null, ['class'=>'ckeditor']) !!}
	</div>
</div>
{!! $errors->first('subname','<p style="color:#761b18;">:message</p>') !!} 
<br>

{{-- hình ảnh 6 --}}
<div class="form-group">
	{!!Form::label('Hình thứ Sáu',null,['class'=>'col-md-2 control-label'])!!}
	<div class="col-md-10">
			{!! Form::file('hinhanh6', ['class'=>'form-control-file border border-primary']) !!}
	</div>
</div>
<br>
<div class="form-group">
	{!!Form::label('Nội dung hình sáu',null,['class'=>'col-md-2 control-label'])!!}
	<div class="col-md-10">
		
		{!! Form::textarea('motahinhanh6', null, ['class'=>'ckeditor']) !!}
	</div>
</div>
{!! $errors->first('subname','<p style="color:#761b18;">:message</p>') !!} 
<br>

{{-- hình ảnh 3 --}}{{-- hình ảnh 3 --}}
<div class="form-group">
	{!!Form::label('Hình thứ Bảy',null,['class'=>'col-md-2 control-label'])!!}
	<div class="col-md-10">
		
		{!! Form::file('hinhanh7', ['class'=>'form-control-file border border-primary']) !!}

		
	</div>
</div>
<br>
<div class="form-group">
	{!!Form::label('Nội dung hình bảy',null,['class'=>'col-md-2 control-label'])!!}
	<div class="col-md-10">
		
		{!! Form::textarea('motahinhanh7', null, ['class'=>'ckeditor']) !!}
	</div>
</div>
{!! $errors->first('subname','<p style="color:#761b18;">:message</p>') !!} 
<br>

{{-- hình ảnh loại tin --}}
<div class="form-group">
	{!!Form::label('Nội dung hình bảy',null,['class'=>'col-md-2 control-label'])!!}
	<div class="col-md-10">
		
		{!! Form::select('id_theloai', $theloai, null, ['class'=>'form-control']) !!}
	</div>
</div>
{!! $errors->first('subname','<p style="color:#761b18;">:message</p>') !!} 

{{-- @if(isset($tintuc))
<div class="form-group">
	{!!Form::label('Hình ảnh','',['class'=>'col-md-2 control-label'])!!}
	<div class="col-md-10">
		<img src="{{url('uploads/tintuc/',$slide->hinhanh)}}" style="height: 300px; ">
	</div>
</div>
@endif
--}}
<br>
<div class="form-group">
	<div class="col-md-offset-2 col-md-10">
		{!!Form::submit('save',['class'=>'btn btn-info'])!!}
		<a href="{{ url("ltvadmin/tintuc")}}"><button type="button" class="btn btn-default btn-sm">
		Trở về </a>
	</button>


