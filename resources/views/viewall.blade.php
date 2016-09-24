<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
	<title>view all customers</title>

	<style type="text/css">
		table,th,tr,td{
			border:1px solid red;
			border-collapse: collapse;
		}

	</style>
</head>
<body>

<a href="insert">Insert customer</a>
<br>
<br>
<br>
		<table>
			<tr>
				<th>Ad</th>
				<th>Email</th>

				<th>Olke</th>

				<th>Cins</th>

				<th>ŞCŞQ</th>

				<th>Sekil</th>

				<th>Show by id</th>

				<th>update</th>

				<th>delete</th>

			</tr>
			<tbody>
				 @foreach($user as $users)
				<tr>
					<td>{{$users->name}}</td>
					<td>{{$users->email}}</td>
					<td>{{$users->country}}</td>
					<td>{{$users->gender}}</td>
					<td>{{$users->favorite}}</td>
					<td><img src="{{URL::to('/image/'.$users->image)}}" width="50px" height="50px;"></td>
					<td>
						<a href="customer/{{$users->name}}">view by id</a>
					</td>
					<td>
						<a href="edit/{{$users->name}}">update</a>
					</td>
					<td>
						<a href="delete/{{$users->name}}">delete</a>
					</td>
				</tr>
				 @endforeach
			</tbody>
		</table>
</body>
</html>


  

   		

  