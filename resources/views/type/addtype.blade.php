<!DOCTYPE html>
<html>
<head>
	<title>Type</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="{{asset('css/bootstrapcss/bootstrap.min.css')}}" type="text/css" rel="stylesheet"/>
    <script src="{{ asset('css/jsfile/jquery-3.1.1.min.js')}}" type="text/javascript"/></script>
	<script src="{{ asset('css/jsfile/bootstrap.min.js')}}" type="text/javascript"/></script>
</head>
<body>
<div class="container" style="width:50%">

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{{-- {{dump($errors->all())}}
 --}}{{-- {{dump($errors->toArray())}} --}}

@if(!empty($errors->toArray()))
	@foreach($errors->toArray() as $key =>$val)

	 {{dump(implode(',',$val))}}

	@endforeach
@endif
<center>
	{!! Form::open(['route' =>'create.type', 'method'=>'post']) !!}
	<div class="row">
			<div class="col-md-12">
		 		<div class="form-group">
					{!! Form::label('Type Name', 'Type Name') !!}
					{!! Form::text('name', null, array('placeholder' => 'Enter Your Name','class' => 'form-control')) !!}
					@if ($errors->has('name'))

                	<span class="text-danger">{{ $errors->first('name') }}</span>

            		@endif
				</div>
			</div> 
				<div class="col-md-12">
		 			<div class="form-group">
						{!! Form::label('Status', 'Status') !!}
						{!! Form::text('status', null, array('placeholder' => 'Enter Your status','class' => 'form-control')) !!}
						@if ($errors->has('status'))

                		<span class="text-danger">{{ $errors->first('status') }}</span>

            			@endif
					</div>
				</div> 
				<div class="col-md-12">
				<div class="form-group">
			 		{!! Form::submit('SAVE',['class' => 'btn-warning btn-md' ,'style'=>'width:100px']) !!}
			 	</div>
			</div>
			{!! Form::hidden('id') !!}
	 	{!! Form::close() !!}
		</div><!-- end of row -->
	</div>
	</center>
	</body>
	</html>