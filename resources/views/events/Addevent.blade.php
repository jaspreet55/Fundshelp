<!DOCTYPE html>
<html>
<head>
	<title>Events</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="{{ asset('css/bootstrapcss/bootstrap.min.css')}}" type="text/css" rel="stylesheet"/>
    <script src="{{ asset('css/jsfile/jquery-3.1.1.min.js')}}" type="text/javascript"/></script>
	<script src="{{ asset('css/jsfile/bootstrap.min.js')}}" type="text/javascript"/></script>
	
</head>
<body>
<div class="container" style="width:50%">
  	
	  @if(Session::has('success'))
		<div class="alert alert-success">
			<p style="color:green;">{{Session::get('success')}}</p>
				@php
		        Session::forget('success');
		        @endphp
	    </div>
	  @endif
		<center><h2><b>Add Events</b></h2></center>
		{!! Form::open(['route' => 'create.event', 'method'=>'post', 'files'=>'true']) !!}
		<div class="row">
			<div class="col-md-12">
		 		<div class="form-group">
					{!! Form::label('Name', 'Name') !!}
					{!! Form::text('name', null, array('placeholder' => 'Enter Your Name','class' => 'form-control')) !!}
					@if ($errors->has('name'))

                	<span class="text-danger">{{ $errors->first('name') }}</span>

            		@endif
				</div>
			</div> 
			<div class="col-md-12">
				<div class="form-group">
					{!! Form::label('Title', 'Title') !!}
					{!! Form::text('title', null, array('placeholder' => 'Title','class' => 'form-control')) !!}
					@if ($errors->has('title'))
                	<span class="text-danger">{{ $errors->first('title') }}</span>
            		@endif
				</div>
			</div> 
			<div class="col-md-12"> 
				<div class="form-group">
					{!! Form::label('Type', 'Type') !!}
					{!! Form::select('type',$data_type, null, array('class' => 'form-control')) !!}
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group">
					{!! Form::label('Description', 'Description') !!}
					{!! Form::textarea('description', null, array('placeholder' => 'Description','class' => 'form-control','style'=>'col:')) !!}
						@if ($errors->has('description'))
                		<span class="text-danger">{{ $errors->first('description') }}</span>
            			@endif
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group">
					{!! Form::label('Video', 'Video') !!}
					{!! Form::file('video', null, array('class' => 'form-control')) !!}
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group">
					{!! Form::label('Images', 'Images') !!}
					{!! Form::file('images[]', null, array('class' => 'form-control')) !!}
				</div>
				<button class="add_field_button">Add More Fields</button>
			</div>
			<div id="extend"></div>
			{{-- <div class="col-md-12">
				<div class="form-group">
					{!! Form::label('Images', 'Images') !!}
					{!! Form::file('images[]', null, array('class' => 'form-control')) !!}
				</div>
			</div> --}}
			<div class="col-md-12">
				<div class="form-group">
					{!! Form::label('Mobile', 'Mobile') !!}
					{!! Form::text('phone', null, array('placeholder' => 'Enter your Phone Number','class' => 'form-control')) !!}
					@if ($errors->has('phone'))

                	<span class="text-danger">{{ $errors->first('phone') }}</span>

            	@endif
				</div>
			</div>
			<div class="col-md-12">	
				<div class="form-group">
					{!! Form::label('Address', 'Address') !!}
					{!! Form::textarea('address', null, array('placeholder' => 'Enter Your Address','class' => 'form-control')) !!}
					@if ($errors->has('address'))

                	<span class="text-danger">{{ $errors->first('address') }}</span>

            	@endif
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group">
					{!! Form::label('PinCode', 'PinCode') !!}
					{!! Form::text('pin_code', null, array('placeholder' => 'Your Area Pincode','class' => 'form-control')) !!}
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group">
					{!! Form::label('Account Number', 'Account Number') !!}
					{!! Form::text('account', null, array('placeholder' => 'Fill Account Number(optional)','class' => 'form-control','style'=>'padding:12px')) !!}
				</div>
			</div>
			<div class="col-md-12">	
				<div class="form-group">
					{!! Form::label('Amount', 'Amount') !!}
					{!! Form::text('amount', null, array('placeholder' => 'Enter Amount(optional)','class' => 'form-control')) !!}
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group">
					{!! Form::label('User ID', 'User ID') !!}
					{!! Form::text('user_id', null, array('placeholder' => 'Select User ID','class' => 'form-control')) !!}
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group">
			 		{!! Form::submit('SAVE',['class' => 'btn-warning btn-md' ,'style'=>'width:100px']) !!}
			 	</div>
			</div>

	 	{!! Form::close() !!}
 		</div>
</div>
<script type="text/javascript">
$(document).ready(function() {
	alert(334);
    var max_fields      = 10; //maximum input boxes allowed
    var field         = $("#extend"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).click(function(e){
    	alert(124);

     //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(field).append('<div class="form-group"><input type="file" name="images[]" class="form-control"/><a href="#" class="remove_field"><button><b>-</b></button></a></div>'); //add input box
        }
    });
    
    $(field).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault();
         $(this).parent('div').remove(); x--;
    })
});

</script>
</body>
</html>