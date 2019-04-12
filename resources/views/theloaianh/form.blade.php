
{!!Form::label('Tên thể loại',null,['class'=>'col-md-2 control-label'])!!}
<div class="col-md-10">
	{!!Form::text('tentheloai',null,['class'=>'form-control'])!!}
</div>
{!!Form::label('Tên không dấu',null,['class'=>'col-md-2 control-label'])!!}
<div class="col-md-10">
	{!!Form::text('tenkhongdau',null,['class'=>'form-control'])!!}
</div>

<br>
<div class="form-group">
	<div class="col-md-offset-2 col-md-10">
		{!!Form::submit('save',['class'=>'btn btn-info'])!!}
		<a href="{{ url("ltvadmin/theloaianh")}}"><button type="button" class="btn btn-default btn-sm">
		Trở về </a>
	</button>


