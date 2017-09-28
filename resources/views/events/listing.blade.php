<!DOCTYPE html>
<html>
<head>
	<title>Listing</title>
	<link href="{{ URL::asset('asset/css/../../../public/css/bootstrapcss/bootstrap.min.css')}}" type="text/css" rel="stylesheet"/>
    <script src="{{ URL::asset('asset/css/../../../public/css/jsfile/jquery-3.1.1.min.js')}}" type="text/javascript"/></script>
	<script src="{{ URL::asset('asset/css/../../../public/css/jsfile/bootstrap.min.js')}}" type="text/javascript"/></script>
</head>
<body>
<table cellpadding="1" cellspacing="0" border="1"  >
<tr>
<th>Sno.</th>
<th>Id</th>
<th>Name</th>
<th>Title</th>
<th>Type</th>
<th>Description</th>
<th>Video</th>
<th>Images</th>
<th>mobile</th>

<th>address</th>
<th>pincode</th>
<th>Account Number</th>
<th>Amount</th>
<th>User ID</th>
<th>status</th>
<th colspan="3">Action</th>

<!-- <th>action</th> -->
</tr>
<tbody>
	@foreach($list as $key => $val)

		<tr style="text-align: center;">
		<td>{{$loop->iteration}}</td>
			<td>{{$val['id']}}</td>
			<td>{{$val['name']}}</td>

			<td>{{$val['title']}}</td>
			<td>{{$val['type']}}</td>
			<td>{{$val['description']}}</td>
			<td>{{$val['video']}}</td>
			<td>{{$val['images']}}</td>
			<td>{{$val['phone']}}</td>
			<td>{{$val['address']}}</td>
			<td>{{$val['pin_code']}}</td>
			<td>{{$val['account']}}</td>
			<td>{{$val['amount']}}</td>
			<td>{{$val['user_id']}}</td>
			<td>{{$val['status']}}</td>
			
			<td>
			@if($val['status']==0)
				<a href="{{route('events.enable',['id'=>$val['id']])}}"><button class="btn btn-info">Enable</button></a>
			@elseif($val['status']==1)
				<a href=""><button class="btn btn-danger">disable</button></a></td>
			@endif
		</tr>
	@endforeach
	</tbody>
</table>
</body>
</html>