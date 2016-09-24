<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>update</title>
	</head>
	<body>
		<form action="update/{{$user->id}}" method="post" enctype="multipart/form-data">
			<label for="name">Name</label>
			<input type="text" id="name" value="{{$user->name}}" name="name">
			<br>
			{{method_field('patch')}}
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<label for="email">Email</label>
			<input type="text" id="email" value="{{$user->email}}" name="email">
			<br>
			<br>
			<label for=""></label>
			<input type="submit" id="submit" value="Submit" name="submit">
		</form>
	</body>
</html>