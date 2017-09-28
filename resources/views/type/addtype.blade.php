<!DOCTYPE html>
<html>
<head>
	<title>Type</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{{dump($errors->all())}}
{{dump($errors->toArray())}}

@if(!empty($errors->toArray()))
	@foreach($errors->toArray() as $key =>$val)

	 {{dump(implode(',',$val))}}

	@endforeach
@endif
<center>
	{!! Form::open(['route' =>'create.type', 'method'=>'post']) !!}
	{!! Form::label('type name','Type Name :') !!}
	{!! Form::text('name',null,array('class'=>'form-control','placeholder'=>'Enter Type')) !!}<br>
	{!! Form::label('Status ', 'Status :') !!}
	{!! Form::text('status',null,['placeholder'=>'Type status']) !!}<br>

	
	{!! Form::submit('Save Type') !!}
	{!! Form::close() !!}
	</center>
	</body>
	</html>