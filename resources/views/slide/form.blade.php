
{!!Form::label('Tiêu đề chính',null,['class'=>'col-md-2 control-label'])!!}
<div class="col-md-10">
	{!!Form::text('tieudechinh',null,['class'=>'form-control'])!!}
</div>
</div>
{!! $errors->first('name','<p style="color:#761b18;">:message</p>') !!} 
<br>
<div class="form-group">
	{!!Form::label('Tiêu đề phụ',null,['class'=>'col-md-2 control-label'])!!}
	<div class="col-md-10">
		{!!Form::text('tieudephu',null,['class'=>'form-control'])!!}
	</div>
</div>
{!! $errors->first('subname','<p style="color:#761b18;">:message</p>') !!} 



<div class="form-group">
	{!!Form::label('Ảnh hiển thị',null,['class'=>'col-md-2 control-label'])!!}
	<div class="col-md-10">
		<div class="custom-file">
			{!! Form::file('hinhanh', ['class'=>'custom-file-input']) !!}
			<label class="custom-file-label" for="inputGroupFile04">Choose file</label>
		</div>
	</div>
</div>


@if(isset($slide))
<div class="form-group">
	{!!Form::label('Hình ảnh','',['class'=>'col-md-2 control-label'])!!}
	<div class="col-md-10">
		<img src="{{url('uploads/slide/',$slide->hinhanh)}}" style="height: 300px; ">
	</div>
</div>
@endif


<div class="form-group">
	<div class="col-md-offset-2 col-md-10">
		{!!Form::submit('save',['class'=>'btn btn-info'])!!}
		<a href="{{ url("ltvadmin/slide")}}"><button type="button" class="btn btn-default btn-sm">
		Trở về </a>
	</button>


