<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Hello</title>
</head>
<body>
	<h1>ok r nhe</h1>
	{{$test["name"]}}<br>
	{{$test["sdt"]}}<br>
	{{$test["diachi"]}}<br>

	@if($test['name'] == 'Dung')
	<h3>DZ</h3>
	@else
	<h3>Xau zai</h3>
	@endif
</body>
</html>