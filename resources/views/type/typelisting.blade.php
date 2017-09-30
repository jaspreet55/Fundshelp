<!DOCTYPE html>
<html>
<head>
	<title>Listing</title>
	<link href="{{ URL::asset('asset/css/../../../public/css/bootstrapcss/bootstrap.min.css')}}" type="text/css" rel="stylesheet"/>
    <script src="{{ URL::asset('asset/css/../../../public/css/jsfile/jquery-3.1.1.min.js')}}" type="text/javascript"/></script>
	<script src="{{ URL::asset('asset/css/../../../public/css/jsfile/bootstrap.min.js')}}" type="text/javascript"/></script>
	<style type="text/css">
		th{
			text-align: center;
			padding: 2px;
		}
		td{
			padding: 3px;
		}
	</style>
</head>
<body>
<center>
<h1><b>TYPE LISTING</b></h1>
<table cellpadding="0" cellspacing="0" border="1">
<tr>
<th >Sno.</th>
<th style="width: 40px;">Id</th>
<th>Name</th>

<th>status</th>
<th>Action</th>
<th>Apprsoved</th>
<!-- <th>action</th> -->
</tr>
<tbody>
	@foreach($typelist as $key => $val)

		<tr style="text-align: center;">
		<td>{{$loop->iteration}}</td>
			<td>{{$val['id']}}</td>
			<td>{{$val['name']}}</td>
			<td>{{$val['status']}}</td>
			<td><a href="{{route('type.edit',['id'=>$val['id']])}}">Edit</a>
			<a href="{{route('type.del',['id'=>$val['id']])}}">delete</a>
			</td>
			<td>
			@if($val['status']==0)
				<a href="{{route('type.enable',['id'=>$val['id']])}}"><button class="btn btn-info">Enable</button></a>
			@elseif($val['status']==1)
				<a href="{{route('type.disable',['id'=>$val['id']])}}"><button class="btn btn-danger">disable</button></a></td>
			@endif
		</tr>
	@endforeach
	</tbody>
</table>
</center>
</body>
</html>