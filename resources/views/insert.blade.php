<!DOCTYPE html>
<html>
	<head>
		<title>Insert</title>
	</head>
	<body>
		<form action="store" method="post" enctype="multipart/form-data">
			<label for="name">Ad</label>
			<input type="text" name="name" value="" id="name" autocomplete="off"><br>
			<input type="hidden" name="_token" value="{{csrf_token()}}"><br>
			<label for="email">Email</label>
			<input type="text" name="email" value="" id="email"  autocomplete="off">
			<br>
			<br>

			Olke&nbsp;&nbsp;&nbsp;<select name="country" id="country">
				
				<option value="AZERBAIJAN">AZERBAIJAN</option>
				<option value="USA">USA</option>
				<option value="TURKISH">TURKISH</option>
				<option value="ENGLAND">ENGLAND</option>
				<option value="JAPAN">JAPAN</option>
				<option value="ITALY">ITALY</option>
			</select>
			<br>
			<br>

			Cins&nbsp;&nbsp;&nbsp;<input type="radio" name="gender" value="kisi">Kisi
			<input type="radio" name="gender" value="qadin">Qadin
			<br>
			<br>
			<input type="checkbox" name="favorite[]" value="simal">Simal
			<input type="checkbox" name="favorite[]" value="cenub">Cenub
			<input type="checkbox" name="favorite[]" value="serq">Serq
			<input type="checkbox" name="favorite[]" value="qerb">Qerb
			<br>
			<input type="file" name="image">
			<br>
			<label for="submit"></label>
			<input type="submit" name="submit" value="submit" id="submit">
			
		</form>
	</body>
</html>