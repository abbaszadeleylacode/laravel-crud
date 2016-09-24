<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title> Id gore baxis</title>
	</head>
	<style type="text/css">
		table,tr,td,th{
			border:1px solid red;
		}

	</style>
	<body>
		<table >
			<tr>
				<th>Ad</th>
				<th>Email</th>
				<th>Cins</th>
				<th>Olke</th>
				<th>Secim</th>
				<th>Sekil</th>
			</tr>
			<tbody>
				<tr>
					<td>{{$user->name}}</td>
					<td>{{$user->email}}</td>
					<td>{{$user->gender}}</td>
					<td>{{$user->country}}</td>
					<td>{{$user->favorite}}</td>
					<td>
						<img src="{{URL::to('/image/'.$user->image)}}" alt=""
						width="50px" height="50px;">
					</td>
				</tr>

			</tbody>
		</table>
	</body>
</html>