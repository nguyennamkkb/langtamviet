
{!!Form::label('Tên loại tin',null,['class'=>'col-md-2 control-label'])!!}
<div class="col-md-10">
	{!!Form::text('name',null,['class'=>'form-control'])!!}
</div>

<br>
<div class="form-group">
	<div class="col-md-offset-2 col-md-10">
		{!!Form::submit('save',['class'=>'btn btn-info'])!!}
		<a href="{{ url("ltvadmin/loaitin")}}"><button type="button" class="btn btn-default btn-sm">
		Trở về </a>
	</button>


